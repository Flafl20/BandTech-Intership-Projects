<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Routing\RedirectController;
use App\Http\Requests\CreateFlightRequest;

class FlightsController extends Controller
{
    public function index()
    {
        $data = Flight::paginate(5);
        return view('Flights', ['data' => $data]);
    }

    public function create()
    {
        return view('create_flights');
    }

    public function storeFlight(CreateFlightRequest $request)
    {
        // $validated = $request->validate([
        //     "name" => "required",
        // ]);
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
    public function deleteFlight($id)
    {
        $dataToDelete = Flight::find($id);
        $dataToDelete->delete();

        return redirect()->route('flights')->with("success", 'Flight deleted successfully');
    }
}
