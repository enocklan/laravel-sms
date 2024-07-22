<?php

namespace App\Livewire\Admin\Students;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditStudent extends Component
{
    use LivewireAlert;

    public $studentId;
    public $name;
    public $email;
    public $phoneNumber;
    public $password;
    public $student_id;
    public $course;
    public $year_of_study;
    public $department;
    public $date_of_birth;
    public $address;

    public function mount($studentId)
    {
        $this->studentId = $studentId;
        $this->loadStudent();
    }

    public function loadStudent(): void
    {
        $student = User::findOrFail($this->studentId);

        $this->name = $student->name;
        $this->email = $student->email;
        $this->phoneNumber = $student->phoneNumber;
        $this->student_id = $student->student_id;
        $this->course = $student->course;
        $this->year_of_study = $student->year_of_study;
        $this->department = $student->department;
        $this->date_of_birth = $student->date_of_birth;
        $this->address = $student->address;
    }
    public function updateStudent(): void
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:15',
            'password' => 'nullable|string|min:8',
            'student_id' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year_of_study' => 'required|integer|min:1|max:10',
            'department' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        $student = User::findOrFail($this->studentId);

        $student->update([
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'student_id' => $this->student_id,
            'course' => $this->course,
            'year_of_study' => $this->year_of_study,
            'department' => $this->department,
            'date_of_birth' => $this->date_of_birth,
            'address' => $this->address,
            'password' => $this->password ? hash::make($this->password) : $student->password,
        ]);

        $this->alert('success', 'Success', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Student updated successfully.',
            'timerProgressBar' => true,
        ]);
//        return redirect()->route('admin.student.edit');
    }

    public function render()
    {
        return view('livewire.admin.students.edit-student');
    }
}
