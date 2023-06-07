<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_tampilan;

class LandingPageController extends Controller
{
    
    public function homepage() {
        $data = data_tampilan::first();
        return view('landing-page.homePage', compact('data'));
    }

    public function aboutus() {
        $data = data_tampilan::first();
        return view('landing-page.aboutUs', compact('data'));
    }

    public function tutorial() {
        $data = data_tampilan::first();
        return view('landing-page.tutorial', compact('data'));
    }
}
