<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Srmklive\PayPal\Services\AdaptivePayments;
use Srmklive\PayPal\Services\ExpressCheckout;

use DB;
use Auth;

class PayPalController extends Controller
{
    /**
     * @var ExpressCheckout
     */
    protected $provider;

    public function __construct()
    {
        $this->provider = new ExpressCheckout();
    }

    public function getIndex(Request $request)
    {
        $response = [];
        if (session()->has('code')) {
            $response['code'] = session()->get('code');
            session()->forget('code');
        }

        if (session()->has('message')) {
            $response['message'] = session()->get('message');
            session()->forget('message');
        }

        return view('welcome', compact('response'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getExpressCheckout(Request $request)
    {
        $recurring = ($request->get('mode') === 'recurring') ? true : false;
        $plan_id = $request->get('plan_id');

        $cart = $this->getCheckoutData($recurring, $plan_id);

        try {

            $options = [
                'BRANDNAME' => 'Service',
                'LOGOIMG' => url('/').'images/Service.png',
                'CHANNELTYPE' => 'Merchant'
            ];
            $response = $this->provider->addOptions($options)->setExpressCheckout($cart, $recurring);

            // $response = $this->provider->setExpressCheckout($cart, $recurring);

            return redirect($response['paypal_link']);
        } catch (\Exception $e) {
            $invoice = $this->createInvoice($cart, 'Invalid');

            session()->put(['code' => 'danger', 'message' => "Error processing PayPal payment for Order $invoice->id!"]);
        }
    }

    /**
     * Process payment on PayPal.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getExpressCheckoutSuccess(Request $request)
    {
        $recurring = ($request->get('mode') === 'recurring') ? true : false;
        $token = $request->get('token');
        $PayerID = $request->get('PayerID');
        $plan_id = $request->get('plan_id');

        $cart = $this->getCheckoutData($recurring, $plan_id);
        
        $user = \Auth::user();

        // Verify Express Checkout Token
        $response = $this->provider->getExpressCheckoutDetails($token);

        $buyer_email = $response['EMAIL'];

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            if ($recurring === true) {
                //$response = $this->provider->createMonthlySubscription($response['TOKEN'], $cart['total'], $cart['subscription_desc']);
                $response = $this->provider->createCustomSubscription($response['TOKEN'], $cart['total'], $cart['subscription_desc'], $cart['months']);

                $profile_id = $response['PROFILEID'];

                if (!empty($response['PROFILESTATUS']) && in_array($response['PROFILESTATUS'], ['ActiveProfile', 'PendingProfile'])) {
                    
                    $status = 'Processed';

                    $user->plan_id = $plan_id;
                    $user->payment_type = 1;
                    $user->paypal_id = $profile_id;
                    $user->paypal_email = $buyer_email;
                    $user->status = "active";
                    $user->save();

                } else {
                    $status = 'Invalid';
                }
            } else {
                // Perform transaction on PayPal
                $payment_status = $this->provider->doExpressCheckoutPayment($cart, $token, $PayerID);
                $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
            }

            $invoice = $this->createInvoice($cart, $status);

            if ($invoice->paid) {
                session()->put(['code' => 'success', 'message' => "Order $invoice->id has been paid successfully!"]);
                return redirect('/home');
            } else {
                session()->put(['code' => 'danger', 'message' => "Error processing PayPal payment for Order $invoice->id!"]);
                return redirect('/plan');
            }
        }
    }

    public function getAdaptivePay()
    {
        $this->provider = new AdaptivePayments();

        $data = [
            'receivers'  => [
                [
                    'email'   => 'johndoe@example.com',
                    'amount'  => 10,
                    'primary' => true,
                ],
                [
                    'email'   => 'janedoe@example.com',
                    'amount'  => 5,
                    'primary' => false,
                ],
            ],
            'payer'      => 'EACHRECEIVER', // (Optional) Describes who pays PayPal fees. Allowed values are: 'SENDER', 'PRIMARYRECEIVER', 'EACHRECEIVER' (Default), 'SECONDARYONLY'
            'return_url' => url('payment/success'),
            'cancel_url' => url('payment/cancel'),
        ];

        $response = $this->provider->createPayRequest($data);
        dd($response);
    }

    /**
     * Parse PayPal IPN.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function notify(Request $request)
    {
        // if (!($this->provider instanceof ExpressCheckout)) {
        //     $this->provider = new ExpressCheckout();
        // }

        // $request->merge(['cmd' => '_notify-validate']);
        // $post = $request->all();

        // $response = (string) $this->provider->verifyIPN($post);

        // $logFile = 'ipn_log_'.Carbon::now()->format('Ymd_His').'.txt';
        // Storage::disk('local')->put($logFile, $response);

        Storage::disk('local')->put('file.txt', 'Contents');
    }

    /**
     * Set cart data for processing payment on PayPal.
     *
     * @param bool $recurring
     *
     * @return array
     */
    protected function getCheckoutData($recurring = false, $plan_id)
    {
        $data = [];
        $order_id = Invoice::all()->count() + 1;
        $plan = DB::table('tv_pricing_plans')->where('uid', $plan_id)->first();

        if ($recurring === true) {
            $data['items'] = [
                [
                    'name'  => $plan->description.' '.config('paypal.invoice_prefix').' #'.$order_id,
                    'price' => $plan->price,
                    'qty'   => 1,
                ]
            ];
            $data['return_url'] = url('/paypal/ec-checkout-success?mode=recurring&plan_id='.$plan_id);
            $data['subscription_desc'] = $plan->description.' '.config('paypal.invoice_prefix').' #'.$order_id;
        } else {
            $data['items'] = [
                [
                    'name'  => $plan->description,
                    'price' => $plan->price,
                    'qty'   => 1,
                ]
            ];
            $data['return_url'] = url('/paypal/ec-checkout-success?plan_id='.$plan_id);
        }

        $data['invoice_id'] = config('paypal.invoice_prefix').'_'.$order_id;
        $data['invoice_description'] = "Order #$order_id Invoice";
        $data['months'] = $plan->months;
        $data['cancel_url'] = url('/');
        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }

        $data['total'] = $total;

        return $data;
    }

    /**
     * Create invoice.
     *
     * @param array  $cart
     * @param string $status
     *
     * @return \App\Invoice
     */
    protected function createInvoice($cart, $status)
    {
        $invoice = new Invoice();
        $invoice->title = $cart['invoice_description'];
        $invoice->price = $cart['total'];
        if (!strcasecmp($status, 'Completed') || !strcasecmp($status, 'Processed')) {
            $invoice->paid = 1;
        } else {
            $invoice->paid = 0;
        }
        $invoice->save();

        collect($cart['items'])->each(function ($product) use ($invoice) {
            $item = new Item();
            $item->invoice_id = $invoice->id;
            $item->item_name = $product['name'];
            $item->item_price = $product['price'];
            $item->item_qty = $product['qty'];

            $item->save();
        });

        return $invoice;
    }

    function getCurrentEstTime() {
        date_default_timezone_set('US/Eastern');
        return date("Y-m-d H:i:s");
    }

    public function checkPaypalStatus(){


        $sql = "select * from users where payment_type = '1' and status='active'";
        $userList = DB::select( DB::raw($sql ));

        foreach($userList as $user){
            $user_id = $user->id;
            $profile_id = $user->paypal_id;
            $response = $this->provider->getRecurringPaymentsProfileDetails($profile_id);
            
            $status = strtolower($response['STATUS']);
            $next_day = $response['NEXTBILLINGDATE'];

            $next_day_str = strtotime($next_day);
            $next_date = date('Y-m-d H:i:s',$next_day_str);

            $current_date = $this->getCurrentEstTime();

            if ($next_date <= $current_date) {
                $sql = "update users status = 'inactive' where id = '$user_id'";
                DB::statement($sql);
            }
        }
    }

    

}
