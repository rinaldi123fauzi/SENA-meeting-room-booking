<?php

namespace App\Http\Controllers;

use App\Charts\SeatChart;
use App\Models\Booking;
use App\Models\Building;
use App\Models\OfficeLayout;
use App\Models\Room;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(SeatChart $seatChart)
    {
        $week = Carbon::today()->subDays(7);
        $bookings = Booking::all();

        $totalDuration = 0;
        $count = 0;
    
        foreach ($bookings as $booking) {
            $start = Carbon::parse($booking->start_time);
            $end = Carbon::parse($booking->end_time);
            $duration = $end->diffInHours($start);
    
            $totalDuration += $duration;
            $count++;
        }
    
        $averageMeetingDuration = $totalDuration / $count;

        setlocale(LC_ALL, 'IND');
        $now = Carbon::now()->formatLocalized('%A, %d %B %Y');

        $booked = $bookings->where('status', 'BOOKED')->count();
        $canceled = $bookings->where('status', 'CANCELED')->count();

        $rooms = Room::all();
        $buildings = Building::all();
        $roomCounts = $rooms->count();
        $capacity = $buildings->sum('capacity');

        $seats = OfficeLayout::all();
        $seatAvailable = $capacity - $seats->count();

        $todaysMeet = Booking::whereDate('start_time', Carbon::today())->get();

        $chart = $seatChart->build();
        return view('pages.dashboard', compact('chart', 'now', 'averageMeetingDuration', 'canceled', 'roomCounts', 'capacity', 'seatAvailable', 'todaysMeet'));
    }
}
