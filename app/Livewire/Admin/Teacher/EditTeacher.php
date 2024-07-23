<?php

namespace App\Livewire\Admin\Teacher;

use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditTeacher extends Component
{
    use LivewireAlert, WithFileUploads;

    public $teacherId;
    public $name;
    public $email;
    public $phoneNumber;
    public $password;
    public $employee_id;
    public $department;
    public $date_of_employment;
    public $address;
    public $profile_picture;
    public function mount($teacherId)
    {
        $this->teacherId = $teacherId;
        $this->loadTeacher();
    }

    public function loadTeacher(): void
    {
        $teacher = Teacher::findOrFail($this->teacherId);

        $this->name = $teacher->name;
        $this->email = $teacher->email;
        $this->phoneNumber = $teacher->phoneNumber;
        $this->employee_id = $teacher->employee_id;
        $this->date_of_employment = $teacher->date_of_employment;
        $this->department = $teacher->department;
        $this->address = $teacher->address;
        $this->profile_picture = $teacher->profile_picture;
    }
    public function updateTeacher(): void
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneNumber' => 'required|string|max:15',
            'password' => 'nullable|string|min:8',
            'employee_id' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'date_of_employment' => 'required|date',
            'address' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|max:1024', // 1MB Max
        ]);

        $teacher = Teacher::findOrFail($this->teacherId);

        $teacher->update([
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'employee_id' => $this->employee_id,
            'date_of_employment' => $this->date_of_employment,
            'department' => $this->department,
            'address' => $this->address,
            'password' => $this->password ? hash::make($this->password) : $teacher->password,
            'profile_picture' => $this->profile_picture,
        ]);

        $this->alert('success', 'Success', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'teacher updated successfully.',
            'timerProgressBar' => true,
        ]);
//        return redirect()->route('admin.teacher.edit');
    }
    public function render()
    {
        return view('livewire.admin.teacher.edit-teacher');
    }
}
