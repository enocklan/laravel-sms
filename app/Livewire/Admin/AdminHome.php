<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use App\Models\Departments;
use App\Models\Hostel;
use App\Models\Teacher;
use App\Models\User;
use Livewire\Component;

class AdminHome extends Component
{
    public $studentCount;
    public $teacherCount;
    public $adminCount;
    public $departmentCount;
    public $hostelCount;

    public function mount(): void
    {
        $this->studentCount = User::count();
        $this->teacherCount = Teacher::count();
        $this->adminCount = Admin::count();
        $this->departmentCount = Departments::count();
        $this->hostelCount = Hostel::count();
    }



    public function render()
    {

        return view('livewire.admin.admin-home');
    }
}
