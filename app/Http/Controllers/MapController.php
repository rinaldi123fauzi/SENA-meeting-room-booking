<?php

namespace App\Http\Controllers;

use App\Http\Requests\MapRequest;
use App\Models\Building;
use App\Models\Map;
use App\Models\OfficeLayout;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buildings = Building::all();
        return view('pages.admin.maps.create', compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MapRequest $request)
    {
        $path = $request->file('image_url')->store('image', 'public');

        Map::create([
            'building_id' => $request->building_id,
            'name' => $request->name,
            'image_url' => $path
        ]);

        session()->flash('success', 'Map upload successfully');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
