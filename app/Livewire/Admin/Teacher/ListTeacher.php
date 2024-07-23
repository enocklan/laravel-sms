<?php

namespace App\Livewire\Admin\Teacher;

use App\Models\Teacher;
use Exception;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class ListTeacher extends Component
{
    use WithPagination, LivewireAlert;

    protected $paginationTheme = 'bootstrap';

    public $teacherId;
    public $name;
    public $email;
    public $employee_id;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:teachers,email',
        'employee_id' => 'required|string|max:255|unique:teachers,employee_id',
    ];

    public function mount()
    {
        $this->resetInputFields();
    }

    public function resetInputFields()
    {
        $this->teacherId = null;
        $this->name = '';
        $this->email = '';
        $this->employee_id = '';
        $this->isEditing = false;
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        $this->teacherId = $teacher->id;
        $this->name = $teacher->name;
        $this->email = $teacher->email;
        $this->employee_id = $teacher->employee_id;
        $this->isEditing = true;
    }

    public function update()
    {
        $this->validate();

        if ($this->teacherId) {
            $teacher = Teacher::find($this->teacherId);
            $teacher->update([
                'name' => $this->name,
                'email' => $this->email,
                'employee_id' => $this->employee_id,
            ]);

            $this->alert('success', 'Teacher updated successfully', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);

            $this->resetInputFields();
            $this->resetPage();
        }
    }

    public function delete($id): void
    {
        try {
            $teacher = Teacher::findOrFail($id);
            Log::info('Teacher to delete:', ['teacher' => $teacher]);
            $teacher->delete();

            $this->alert('success', 'Teacher deleted successfully', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);

            $this->resetPage();
        } catch (Exception $e) {
            $this->alert('error', 'Error', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Failed to delete teacher.',
                'timerProgressBar' => true,
            ]);
            Log::error('Delete teacher failed: ' . $e->getMessage());
        }
    }

    public function render()
    {
        $teachers = Teacher::paginate(10);
        return view('livewire.admin.teacher.list-teacher', [
            'teachers' => $teachers,
        ]);
    }
}
