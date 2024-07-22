<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use App\Models\Teacher;
use App\Models\User;
use Livewire\Component;

class AdminHome extends Component
{
    public $studentCount;
    public $teacherCount;
    public $adminCount;

    public function mount(): void
    {
        $this->studentCount = User::count();
        $this->teacherCount = Teacher::count();
        $this->adminCount = Admin::count();
    }

    public function render()
    {
        return view('livewire.admin.admin-home');
    }
}
