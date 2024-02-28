<?php

namespace App\Http\Controllers;

use App\Charts\SeatChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(SeatChart $seatChart)
    {
        $chart = $seatChart->build();
        return view('pages.dashboard', compact('chart'));
    }
}
