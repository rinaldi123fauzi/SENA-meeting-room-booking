<?php

namespace App\Charts;

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
        return $this->chart->pieChart()
            ->setTitle('Office Capacity')
            ->addData([40, 60])
            ->setLabels(['Empty seat', 'Seat occupied']);
    }
}
