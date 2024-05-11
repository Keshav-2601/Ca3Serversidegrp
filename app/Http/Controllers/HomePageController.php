<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
    public function guestpage(){
        $destinations=Destination::with('images')->get();
        return view('guestpage',['destinations'=>$destinations]);
    }
    public function showAdminPage(){
        $destinations=Destination::with('images')->get();
        return view('adminhomepage', ['destinations'=>$destinations]);
    }
      public function search(Request $request)
    {
     
        $searchQuery = $request->input('query');

        $destinations = Destination::where('name', 'like', "%$searchQuery%")
                                    ->orWhere('description', 'like', "%$searchQuery%")
                                    ->get();
        return view('adminhomepage', compact('destinations', 'searchQuery'));
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
        'rating'=>$request->rating
    ]);

    $destination->timestamps = false;
    $destination->save();

    $image = new Image([
        'image_path' => 'images/'.$imageName,
        'destination_id' => $destination->id,
    ]);
    $image->timestamps = false;
    $image->save();

    foreach ($request->hotels as $hotelData) {
        $hotelImageName = $hotelData['hotel_image']->getClientOriginalName();  
        $hotelData['hotel_image']->move(public_path('images'), $hotelImageName);

        $hotel = new Hotels();
        $hotel->name = $hotelData['hotel_name'];
        $hotel->stars = $hotelData['stars'];
        $hotel->image_url = 'images/'.$hotelImageName;
        $hotel->timestamps = false;
        $destination->hotels()->save($hotel);
    }

    return redirect()->route('admin')->with('success', 'Destination and Hotels created successfully.');
}
    public function editDestination($destination_id)
{
    $destination = Destination::without('hotels')->findOrFail($destination_id);
    $hotels = $destination->hotels;
    return view('homepage.edit_destination', compact('destination', 'hotels'));
}

public function updateDestination(Request $request, $id)
{
    $destination = Destination::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'hotel_name' => 'required|string',
        'stars' => 'required|integer|between:1,5',
        'hotel_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $destination->timestamps = false;
    $destination->update([
        'name' => $request->name,
        'description' => $request->description,
    ]);

    if ($request->hasFile('image')) {
        // Handle image upload for destination
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Create or update image record
        $image = $destination->image;
        if (!$image) {
            $image = new Image();
            $image->destination_id = $destination->id;
        }
        $image->image_path = 'images/' . $imageName;
        $image->save();
    }

    if ($request->has('hotel_name') && $request->has('stars')) {
        $hotel = $destination->hotels->first() ?? new Hotels();
        $hotel->destination_id = $destination->id;
        $hotel->name = $request->hotel_name;
        $hotel->stars = $request->stars;

        if ($request->hasFile('hotel_image')) {
            $hotelImageName = time() . '.' . $request->hotel_image->extension();
            $request->hotel_image->move(public_path('images'), $hotelImageName);
            $hotel->image_url = 'images/' . $hotelImageName;
        }

        $hotel->timestamps = false;
        $hotel->save();
    }

    return redirect()->route('admin')->with('success', 'Destination and Hotel updated successfully.');
}
public function destroyDestination($id)
{
    $destination = Destination::findOrFail($id);

    if ($destination->hotels->isNotEmpty()) {
        foreach ($destination->hotels as $hotel) {
            $hotel->delete();
        }
    }
    $destination->delete();

    return redirect()->route('admin')->with('success', 'Destination and associated hotel deleted successfully.');
}
 public function showDestination($id)
    {
        $destination = Destination::find($id);

        if (!$destination) {
            return redirect()->route('homepage')->with('error', 'Destination not found.');
        }

        $hotels = Hotels::where('destination_id', $id)->get();

        return view('homepage.show_destination', compact('destination', 'hotels'));
    }

 function addhotelbyadminonly(){
    if(Auth::user()->email=='keshavv857@gmail.com'||Auth::user()->email=='ashik@gmail.com'){
        return view('homepage.addhotelpage');
    }
 }

}
