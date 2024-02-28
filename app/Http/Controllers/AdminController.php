<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Role;
use App\Models\Room;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() 
    {
        $buildings = Building::all();
        $rooms = Room::with('building')->get();
        $roles = Role::all();
        $roleCounts = [];

        foreach ($roles as $role) {
            $roleCounts[$role->name] = User::where('role_id', $role->id)->count();
        }

        return view('pages.admin.index', compact('buildings', 'rooms', 'roleCounts'));
    }
}
