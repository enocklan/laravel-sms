<?php

namespace App\Livewire\Admin\Departments;

use App\Models\Departments;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddDepartment extends Component
{
    use WithFileUploads,LivewireAlert;

    public $name;
    public $HOD;
    public $year_started;
    public $student_count = 0;
    public $file;

    protected $rules = [
        'name' => 'required|string|max:255',
        'HOD' => 'required|string|max:255',
        'year_started' => 'nullable|date',
        'student_count' => 'required|integer|min:0',
        'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:1024',
    ];

    public function submit()
    {
        $this->validate();

        Departments::create([
            'name' => $this->name,
            'HOD' => $this->HOD,
            'year_started' => $this->year_started,
            'student_count' => $this->student_count,
        ]);

        if ($this->file) {
            $this->file->store('files');
        }

        $this->alert('success', 'Success', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'text' => 'Department Added Successfully',
            'timerProgressBar' => true,
        ]);

        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.departments.add-department');
    }
}
