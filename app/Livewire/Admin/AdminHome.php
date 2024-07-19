<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminHome extends Component
{
    public $studentCount;

    public function mount(): void
    {
        $this->studentCount = User::count();
//        $this->studentCount = max($this->studentCount, 10000);
    }

    public function render()
    {
        return view('livewire.admin.admin-home');
    }
}
