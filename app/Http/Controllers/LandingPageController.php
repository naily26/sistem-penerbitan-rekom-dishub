<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    
    public function homepage() {
        return view('landing-page.homePage');
    }

    public function aboutus() {
        return view('landing-page.aboutUs');
    }

    public function tutorial() {
        return view('landing-page.tutorial');
    }
}
