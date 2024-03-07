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
    public function meetingList() 
    {
        $week = Carbon::today()->subDays(7);
        $bookings = Booking::with('room', 'user')->where('start_time', '>=', $week)->get();
        setlocale(LC_ALL, 'IND');
        $now = Carbon::now()->formatLocalized('%A, %d %B %Y  -  %H:%M');
        
        

        return view('pages.admin.meeting-list', compact('now', 'bookings'));
    }

    public function meetingRoomList() 
    {
        $buildings = Building::all();
        $rooms = Room::with('building')->get();
        return view('pages.admin.meeting-room-list', compact('rooms', 'buildings'));
    }

    public function officeLayoutList()
    {
        $maps = Map::with('office_layout')->get();

        return view('pages.admin.office-layout-list', compact('maps'));
    }

    public function usersList()
    {
        $roles = Role::all();
        $roleCounts = [];

        foreach ($roles as $role) {
            $roleCounts[$role->name] = User::where('role_id', $role->id)->count();
        }
        return view('pages.admin.users-list', compact('roles', 'roleCounts'));
    }
}
