<?php

namespace App\Http\Controllers;

use App\Models\Pin;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $pins = Pin::all();

        return view('home')
                ->with('pins', $pins);
    }

    public function deletePin(Request $request)
    {
        $pin = Pin::where('marker_id', $request->marker_id)->first();

        return $pin->delete();
    }

    public function sharePin(Request $request)
    {
        $pin = Pin::firstOrCreate([
            'owner' =>  session()->getId(),
            'lat'   =>  $request->lat,
            'long'  =>  $request->long
        ]);

        //PREVENT ADDING MULTIPLE PINS WITH THE SAME COORDINATES (UNIQUE TO USERS ONLY)
        $pin->update([
            'marker_id'    =>  $request->marker_id,
        ]);

        return $pin;
    }
}
