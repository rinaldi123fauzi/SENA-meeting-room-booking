<?php

namespace App\Charts;

use App\Models\Building;
use App\Models\OfficeLayout;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SeatChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $buildings = Building::all();
        $capacity = $buildings->sum('capacity');

        $seats = OfficeLayout::all();
        $seatAvailable = $capacity - $seats->count() ;

        return $this->chart->pieChart()
            ->setTitle('Office Capacity')
            ->addData([$seatAvailable, $capacity - $seatAvailable])
            ->setLabels(['Empty seat', 'Seat occupied']);
    }
}
