<?php

namespace App\Http\Controllers;

use App\Models\Pin;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $pins = Pin::all();

        $jsPins = [];

        foreach ($pins as $pin) {
            array_push($jsPins, $pin->coordinates);
        }

        return view('home')
                ->with('pins', $pins)
                ->with('jsPins', $jsPins);
    }

    public function deletePin(Request $request)
    {
        $pin = Pin::where('marker_id', $request->marker_id)->first();

        return $pin->delete();
    }

    public function getPins(Request $request)
    {
        $pins = Pin::all();

        $jsPins = [];

        foreach ($pins as $pin) {
            array_push($jsPins, ['lat' => $pin->lat, 'long' => $pin->long, 'id' => $pin->marker_id]);
        }

        return response()->json(['pins' => $jsPins]);
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
