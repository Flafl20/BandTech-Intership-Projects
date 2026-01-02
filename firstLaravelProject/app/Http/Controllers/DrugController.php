<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDrugRequest;
use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\Flight;


use function PHPUnit\Framework\returnSelf;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Drug::withTrashed()->orderby('id', 'DESC')->get();
        return view("drugs", ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("CreateNewDrug");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDrugRequest $request)
    {
        $dataToInsert = [
            "name" => $request->name,
            "dosage" => $request->dosage,
            "company" => $request->company,
            "expire_date" => $request->expire
        ];
        Drug::create($dataToInsert);
        return redirect()->route("drugs.index");
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
        $drugData = Drug::find($id);
        return view("EditDrug", ['data' => $drugData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Drug::find($id);
        $data->name = $request->name;
        $data->dosage = $request->dosage;
        $data->company = $request->company;
        $data->expire_date = $request->expire;
        $data->save();
        return redirect()->route('drugs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Drug::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('drugs.index');
    }
    public function softDelete(string $id)
    {
        Drug::where("id", "=", $id)->delete();
        return redirect()->route("drugs.index");
    }
    public function restore(string $id)
    {
        Drug::withTrashed()->findOrFail($id)->restore();
        return redirect()->route("drugs.index");
    }
}
