<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuildingRequest;
use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.building.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BuildingRequest $request)
    {
        $data = $request->all();
        Building::create($data);
        return redirect()->route('admin');
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
        $building = Building::findOrFail($id);
        return view('pages.admin.building.edit', compact('building'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BuildingRequest $request, string $id)
    {
        $data = $request->all();
        $building = Building::findOrFail($id);
        $building->update($data);
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Building $building)
    {
        $building->delete();
        return redirect()->route('admin');
    }
}
