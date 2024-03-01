<?php

namespace App\Http\Controllers;

use App\Charts\SeatChart;
use App\Models\Booking;
use App\Models\Building;
use App\Models\OfficeLayout;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(SeatChart $seatChart)
    {
        $week = Carbon::today()->subDays(7);
        $bookings = Booking::with('room', 'user')->where('start_time', '>=', $week)->get();
        setlocale(LC_ALL, 'IND');
        $now = Carbon::now()->formatLocalized('%A, %d %B %Y');

        $booked = $bookings->where('status', 'BOOKED')->count();
        $canceled = $bookings->where('status', 'CANCELED')->count();

        $buildings = Building::all();
        $buildingCount = $buildings->count();
        $capacity = $buildings->sum('capacity');

        $seats = OfficeLayout::all();
        $seatAvailable = $capacity - $seats->count();

        $todaysMeet = Booking::whereDate('start_time', Carbon::today())->get();

        $chart = $seatChart->build();
        return view('pages.dashboard', compact('chart', 'now', 'booked', 'canceled', 'buildingCount', 'capacity', 'seatAvailable', 'todaysMeet'));
    }
}
