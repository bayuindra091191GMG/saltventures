<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomePartnersController extends Controller
{
    public function mainpartners(){
        return view('frontend.partners.mainpartners');
    }
    public function danny(){
        return view('frontend.partners.danny');
    }
    public function bong()
    {
        return view('frontend.partners.bong');
    }
    public function andika()
    {
        return view('frontend.partners.andika');
    }
    public function vincentius()
    {
        return view('frontend.partners.vincentius');
    }
}
