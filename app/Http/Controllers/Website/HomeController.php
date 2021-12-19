<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
        return view('website.pages.home.index');
    }
    public function contactus(){
        return view('website.pages.contactus.index');
    }
    public function aboutus(){
        return view('website.pages.aboutus.index');
    } 
    public function login(){
    	return view('website.pages.login.index');
    }
    public function blog(){
        return view('website.pages.blog.index');
    }
}
