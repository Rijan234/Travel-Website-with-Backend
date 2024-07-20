<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::orderBy('updated_at', 'desc')->get();
       return view('backend.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.destination.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $destination = new Destination();
        $destination->destination_name = $request->destination_name;
        $destination->destination_address = $request->destination_address;
        $destination->destination_sub_address = $request->destination_sub_address;
        $destination->destination_info = $request->destination_info;
        // return $request->lodging;
         $destination->destination_distance = $request->destination_distance;
        
        uploadImage($request, $destination, 'destination_photo');

        $destination->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destination = Destination::find($id);
        return view('backend.destination.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destination = Destination::find($id);
        $destination->destination_name = $request->destination_name;
        $destination->destination_address = $request->destination_address;
        $destination->destination_sub_address = $request->destination_sub_address;
        $destination->destination_info = $request->destination_info;
         $destination->destination_distance = $request->destination_distance;
        
        uploadImage($request, $destination, 'destination_photo');

        $destination->update();
        return redirect()->route('destination.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destination = Destination::find($id);
        $destination->delete();
        if(file_exists($destination->destination_photo)){
            unlink($destination->destination_photo);
        }
        return redirect()->back();
    }
}
