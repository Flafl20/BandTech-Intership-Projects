<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Routing\RedirectController;

class FlightsController extends Controller
{
    public function index()
    {
        $data = Flight::all();
        return view('Flights', ['data' => $data]);
    }

    public function create()
    {
        return view('create_flights');
    }

    public function storeFlight(Request $request)
    {
        $dataToInsert = [
            "name" => $request->name,
            "created_at" => date('Y-m-d H:i:s')
        ];
        Flight::create($dataToInsert);
        return redirect()->route('flights')
            ->with('success', 'Flight added succesfully');
    }
    public function updateFlights($id)
    {
        $data = Flight::find($id);
        return view("update_flights", ['data' => $data]);
    }
    public function storeUpdatedFlight($id, Request $request)
    {
        $dataToUpdate = Flight::find($id);
        $dataToUpdate->name = $request->name;
        $dataToUpdate->save();

        return redirect()->route('flights')->with("success", 'Flight updated successfully');
    }
}
