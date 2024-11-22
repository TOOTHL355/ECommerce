<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Contracts\View\View;
class sitecontroller extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getService(){
        return view('Service');
    }

    public function getContact() {
        return view('contact');
    }
}
