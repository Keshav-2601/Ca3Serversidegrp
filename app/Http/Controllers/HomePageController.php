<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use App\Models\Hotels;
use App\Models\Image;
use Illuminate\Http\Request;
use DB;

class HomePageController extends Controller{
    public function index(){
        $destinations=Destination::with('images')->get();
        return view('Homepage',['destinations'=>$destinations]);

    }
    public function showAdminPage(){
        $destinations=Destination::with('images')->get();
        return view('adminhomepage', ['destinations'=>$destinations]);
    }

    public function createDestination()
    {
        return view('homepage.create_destination');
    }
    public function destroy($id){
        $destination = Destination::find($id);
        $destination->delete();
        return redirect()->route('admin');
 }
    public function storeDestination(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hotels.*.hotel_name' => 'required|string',
            'hotels.*.stars' => 'required|integer|between:1,5',
            'hotels.*.hotel_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
       
        $imageName = $request->image->getClientOriginalName();  
        $request->image->move(public_path('images'), $imageName);
    
       
        $destination = new Destination([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
       
        $destination->timestamps = false;
    
        $destination->save();
    
       
        $image = Image::create([
            'image_path' => 'images/'.$imageName,
            'destination_id' => $destination->id,
        ]);
    
        
        foreach ($request->hotels as $hotelData) {
            $hotelImageName = $hotelData['hotel_image']->getClientOriginalName();  
            $hotelData['hotel_image']->move(public_path('images'), $hotelImageName);
    
            $hotel = new Hotels();
            $hotel->name = $hotelData['hotel_name'];
            $hotel->stars = $hotelData['stars'];
            $hotel->image_url = 'images/'.$hotelImageName;
            $destination->hotels()->save($hotel);
        }
    
        return redirect()->route('adminhomepage')->with('success', 'Destination and Hotels created successfully.');
    }
    


}
