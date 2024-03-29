<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DonutChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setWidth(300)
            ->setToolbar("Toolbar")
            ->setSubtitle('Season 2021.')
            ->addData([20, 24, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }
}
