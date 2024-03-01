<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingStatus;
use App\Models\Building;
use App\Models\Map;
use App\Models\OfficeLayout;
use App\Models\Role;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() 
    {
        $buildings = Building::all();
        $rooms = Room::with('building')->get();
        $roles = Role::all();
        // $officeLayouts = OfficeLayout::with('maps')->get();
        $maps = Map::with('office_layout')->get();
        // $maps = Map::all();
        $week = Carbon::today()->subDays(7);
        $bookings = Booking::with('room', 'user')->where('start_time', '>=', $week)->get();
        setlocale(LC_ALL, 'IND');
        $now = Carbon::now()->formatLocalized('%A, %d %B %Y  -  %H:%M');

        $roleCounts = [];

        foreach ($roles as $role) {
            $roleCounts[$role->name] = User::where('role_id', $role->id)->count();
        }

        return view('pages.admin.index', compact('now', 'buildings', 'rooms', 'roleCounts', 'maps', 'bookings'));
    }
}
