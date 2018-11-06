<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Subscription;

use App\User;
use Auth;
use DB;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function charge(Request $request)
    {
        dd($request->all());
    }

    public function subscribe_process(Request $request)
    {
        $user = \Auth::user();

        $stripe_plan_id = $request->post('stripe_plan_id');
        $plan_id = $request->post('plan_id');

        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            
            $user->newSubscription('main', $stripe_plan_id)->create($request->stripeToken);

            $user->plan_id = $plan_id;
            $user->payment_type = 2;
            $user->status = "active";
            $user->save();

            // return 'Subscription successful, you get the course!';
            
            return redirect('/home');
        } catch (\Exception $ex) {
            // return $ex->getMessage();
            return redirect('/plan');
        }
    }

    public function subscribe_card_update(Request $request)
    {
        $user = \Auth::user();

        if (isset($request->stripeToken)){
            
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            try {
                $cu = \Stripe\Customer::retrieve($user->stripe_id); // stored in your application
                $cu->source = $request->stripeToken; // obtained with Checkout
                $cu->save();
                $success = "Your card details have been updated!";

                $card = $cu->sources->data[0];
                $user->payment_type = 2;
                $user->card_brand = $card->brand;
                $user->card_last_four = $card->last4;

                $subscription = $cu->subscriptions->data[0];

                $user->save();

                return redirect('/home');
            }
            catch(\Stripe\Error\Card $e) {
                // Use the variable $error to save any errors
                // To be displayed to the customer later in the page
                $body = $e->getJsonBody();
                $err  = $body['error'];
                $error = $err['message'];

                return redirect('/home');
            }
            // Add additional error handling here as needed
        }
    }

    public function cancel_subscribe()
    {
        $user = \Auth::user();

        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $user = \Auth::user();
            $user->subscription('main')->cancel();

            $user->payment_type = 0;
            $user->card_brand = "";
            $user->card_last_four = "";
            $user->status = "inactive";
            $user->save();

            // return 'Subscription cancelled successfully';
        } catch (\Exception $ex) {
            // return $ex->getMessage();
        }
        return redirect('/home');
    }

    public function invoices()
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $user = \Auth::user();
            $invoices = $user->invoices();
            return view('invoices', compact('invoices'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function invoice($invoice_id)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $user = \Auth::user();
            return $user->downloadInvoice($invoice_id, [
                'vendor'  => 'Service platform',
                'product' => 'Service',
            ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }


    function getCurrentEstTime() {
        date_default_timezone_set('US/Eastern');
        return date("Y-m-d H:i:s");
    }

    public function checkStripeStatus(){

        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $customers = Customer::all();

            $cnt = 0;

            foreach ($customers['data'] as $customer){
                $customer_id = $customer['id'];
                $subscription_data = $customer['subscriptions']['data'];
                if(count($subscription_data) == 0){
                    $sql = "update users set status = 'inactive' where stripe_id = '$customer_id'";
                    DB::statement($sql);
                }
            }

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }   

    }
    
}
