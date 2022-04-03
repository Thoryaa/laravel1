<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //show home 
    public function showHome(){
        return view('index');
    }
    public function showlogin(){
        return view('loginpage');
    }    public function showsignup(){
        return view('signup');
    }    public function showservice(){
        return view('service');
    }
    public function showprofile(){
        return view('profile');
    }
    public function showjobs(){
        return view('jobs');
    }
    public function showjobdetails(){
        return view('jobdetails');
    }    public function showdashboard(){
        return view('dashboard');
    }    public function showcontact(){
        return view('contact');
    }    public function showcompanies(){
        return view('companies');
    }    public function showaccount(){
        return view('acount');
    }    public function showabout(){
        return view('about');
    }
}
