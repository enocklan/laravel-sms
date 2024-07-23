<?php

namespace App\Livewire;

use Asantibanez\LivewireCharts\Models\LineChartModel;
use Livewire\Component;

class Charts extends Component
{
    public LineChartModel $chart;
    public $lineChartModel;

    public function render()
    {
        return view('livewire.charts');
    }
}
