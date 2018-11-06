<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public $db_mail = "";
    public $db_phone = "";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db_mail  = "cashyewlead@gmail.com";
        $this->db_phone = "+1-888-926-4278";
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_mail  = $this->db_mail;
        $business_phone = $this->db_phone;
        return view('welcome', compact('business_mail', 'business_phone'));
    }

    public function about()
    {
        $business_mail  = $this->db_mail;
        $business_phone = $this->db_phone;
        return view('about', compact('business_mail', 'business_phone'));
    }

    public function contact()
    {
        $business_mail  = $this->db_mail;
        $business_phone = $this->db_phone;
        return view('contact', compact('business_mail', 'business_phone'));
    }

    public function loadMCA()
    {
        $business_mail  = $this->db_mail;
        $business_phone = $this->db_phone;
        $mca_info_list = DB::table('mca_information')->get();
        return view('mca', compact('mca_info_list', 'business_mail', 'business_phone'));
    }

    public function loadCD()
    {
        $business_mail  = $this->db_mail;
        $business_phone = $this->db_phone;
        $cd_info_list  = DB::table('cd_information')->get();
        return view('cd', compact('cd_info_list', 'business_mail', 'business_phone'));
    }

}
