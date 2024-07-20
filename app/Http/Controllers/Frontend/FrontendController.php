<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{
    function home(){

        return view('frontend.home');
        
    }
    function hotel(){


        return view('frontend.hotel');
    }
    function destination(){

        return view('frontend.destination');
    }
    function about(){
        return view('frontend.about');
    }

    function hotelpost($id){
        $hotel = Hotel::find($id);
        return view('frontend.hotelpost', compact('hotel'));
    }
    function destinationpost($id){
        $destination =  Destination::find($id);
        return view('frontend.destinationpost', compact('destination'));
    }
}
