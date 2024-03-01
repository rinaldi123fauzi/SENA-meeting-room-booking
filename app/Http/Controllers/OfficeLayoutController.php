<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfficeLayoutRequest;
use App\Models\Map;
use App\Models\OfficeLayout;
use Illuminate\Http\Request;
use Str;

class OfficeLayoutController extends Controller
{
    // ADMIN
    public function index()
    {
        $maps = Map::with('office_layout')->get();
        return view('pages.office-layout.index', compact('maps'));
    }

    public function show($id)
    {
        $maps = Map::with('building')->where('id', $id)->get();
        $officeLayouts = OfficeLayout::with('office_map')->where('map_id', $id)->get();
        return view('pages.admin.office-layout.show', compact('maps', 'officeLayouts'));
    }

    public function createMap()
    {
        return view('pages.admin.map.create');
    }

    public function editMap()
    {
        return view('pages.admin.office-layout.edit-map');
    }

    public function addUserSeats($id)
    {
        $maps = Map::where('id', $id)->get();
        $map = $maps->first();
        return view('pages.admin.office-layout.create', compact('map'));    
    }

    public function storeUserSeats(OfficeLayoutRequest $request)
    {
        $data = $request->all();

        OfficeLayout::create([
            'map_id' => $data['map_id'],
            'location' => $data['location'],
            'user_name' => ucwords($data['user_name']),
            'department' => ucwords($data['department']),
        ]);
        return redirect()->route('office-layouts.show', $data['map_id']);
    }

    public function editUserSeats($id)
    {
        $officeLayouts = OfficeLayout::with('office_map')->where('id', $id)->get();
        $officeLayout = $officeLayouts->first();
        return view('pages.admin.office-layout.edit', compact('officeLayout'));
    }

    public function updateUserSeats(OfficeLayoutRequest $request, $id)
    {
        $data = $request->all();
        OfficeLayout::where('id', $id)->update([
            'location' => $data['location'],
            'user_name' => ucwords($data['user_name']),
            'department' => ucwords($data['department']),
        ]);
        return redirect()->route('office-layouts.show', $data['map_id']);
    }

    public function deleteUserSeats($id)
    {
        $officeLayout = OfficeLayout::with('office_map')->where('id', $id)->get()->first();
        $map_id = $officeLayout['map_id'];
        $officeLayout->delete();
        return redirect()->route('office-layouts.show', $map_id);
    }

    // USER 
    public function showUsers($id)
    {
        $map = Map::with('building')->where('id', $id)->first();
        $officeLayouts = OfficeLayout::with('office_map')->where('map_id', $id)->get();
        return view('pages.office-layout.show', compact('map', 'officeLayouts'));
    }
}
