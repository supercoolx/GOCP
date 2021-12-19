<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //  public function index(){
    //     return view('website.pages.home.index');
    // }
    // public function contactus(){
    //     return view('website.pages.contactus.index');
    // }
    // public function aboutus(){
    //     return view('website.pages.aboutus.index');
    // } 
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
        return view('home');
    }
}
