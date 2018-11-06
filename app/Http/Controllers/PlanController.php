<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        if ($user->payment_type == '0'){
            $priceList = DB::table('tv_pricing_plans')->get();
            return view('plan', compact('priceList'));
        }
        else{
            return redirect('/home');
        }

        
    }

}
