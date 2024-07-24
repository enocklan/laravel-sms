<?php

namespace App\Livewire\Admin\Departments;

use App\Models\Departments;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditDepartment extends Component
{
    use WithFileUploads,LivewireAlert;

    public $departmentId;
    public $name;
    public $HOD;
    public $year_started;
    public $student_count;
    public $file;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'HOD' => 'required|string|max:255',
        'year_started' => 'nullable|date',
        'student_count' => 'required|integer|min:0',
        'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:1024',
    ];

    public function mount($departmentId)
    {
        $this->isEditing = true;
        $department = Departments::findOrFail($departmentId);

        $this->departmentId = $department->id;
        $this->name = $department->name;
        $this->HOD = $department->HOD;
        $this->year_started = $department->year_started;
        $this->student_count = $department->student_count;
    }

    public function update()
    {
        $this->validate();

        $department = Departments::findOrFail($this->departmentId);
        $department->update([
            'name' => $this->name,
            'HOD' => $this->HOD,
            'year_started' => $this->year_started,
            'student_count' => $this->student_count,
        ]);

        if ($this->file) {
            $this->file->store('files');
        }
        $this->alert('success', 'Success', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Department Updated Successfully',
            'timerProgressBar' => true,
        ]);

//        return redirect()->route('admin.department.list');
    }

    public function render()
    {
        return view('livewire.admin.departments.edit-department');
    }
}
