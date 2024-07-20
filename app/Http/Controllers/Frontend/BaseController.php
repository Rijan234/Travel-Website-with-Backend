<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public $hotels;
    public $destinations;
    public function __construct() {
        $hotels= Hotel::orderBy('updated_at','desc')->get();
        $destinations = Destination::orderBy('updated_at', 'desc')->get();
        View::share([
            'hotels'=> $hotels ,
            'destinations' => $destinations
        ]);
    }

  
}
