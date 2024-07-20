<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels= Hotel::orderBy('updated_at','desc')->get();
        return view('backend.hotel.index', compact('hotels'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $hotel = new Hotel();
        $hotel->hotel_name = $request->hotel_name;
        $hotel->hotel_address = $request->hotel_address;
        $hotel->hotel_sub_address = $request->hotel_sub_address;
        // return $request->lodging;
         $hotel->lodge = $request->lodging;
        
        uploadImage($request, $hotel, 'hotel_photo');

        $hotel->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hotel = Hotel::find($id);
        return view('backend.hotel.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hotel = Hotel::find($id);
        $hotel->hotel_name = $request->hotel_name;
        $hotel->hotel_address = $request->hotel_address;
        $hotel->hotel_sub_address = $request->hotel_sub_address;
        // return $request->lodging;
         $hotel->lodge = $request->lodging;
        
        uploadImage($request, $hotel, 'hotel_photo');

        $hotel->update();
        return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        if(file_exists($hotel->hotel_photo)){
            unlink($hotel->hotel_photo);
        }
        return redirect()->back();
    }
}
