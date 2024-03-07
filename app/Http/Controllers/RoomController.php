<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Building;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
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
        return view('pages.admin.room.create', compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request)
    {
        $data = $request->all();
        Room::create($data);
        return redirect()->route('meeting-room-list');
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
        $room = Room::with('building')->findOrFail($id);
        $buildings = Building::all();
        return view('pages.admin.room.edit', compact('room', 'buildings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoomRequest $request, string $id)
    {
        $data = $request->all();
        $room = Room::findOrFail($id);
        $room->update($data);
        return redirect()->route('meeting-room-list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('meeting-room-list');
    }
}
