<?php

namespace App\Livewire\Admin\Students;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AddStudent extends Component
{
    use LivewireAlert;

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

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phoneNumber' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            'student_id' => 'required|string|max:50|unique:users,student_id',
            'course' => 'required|string|max:255',
            'year_of_study' => 'required|integer|min:1|max:7',
            'department' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
        ];
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'password' => Hash::make($this->password),
            'student_id' => $this->student_id,
            'course' => $this->course,
            'year_of_study' => $this->year_of_study,
            'department' => $this->department,
            'date_of_birth' => $this->date_of_birth,
            'address' => $this->address,
        ]);

        $this->alert('success', 'Success', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Student Added Successfully',
            'timerProgressBar' => true,
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.students.add-student');
    }
}
