<?php

namespace App\Livewire\Admin\Teacher;

use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddTeacher extends Component
{
    use WithFileUploads,LivewireAlert;

    public $name;
    public $email;
    public $phoneNumber;
    public $password;
    public $employee_id;
    public $department;
    public $date_of_employment;
    public $address;
    public $profile_picture;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:teachers,email',
        'phoneNumber' => 'required|string|max:15',
        'password' => 'required|string|min:8',
        'employee_id' => 'required|string|max:255|unique:teachers,employee_id',
        'department' => 'required|string|max:255',
        'date_of_employment' => 'required|date',
        'address' => 'required|string|max:255',
        'profile_picture' => 'nullable|image|max:1024', // 1MB Max
    ];

    public function submit()
    {
        $this->validate();

        $profilePath = null;
        if ($this->profile_picture) {
            $profilePath = $this->profile_picture->store('profile_pictures', 'public');
        }

        Teacher::create([
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'password' => Hash::make($this->password),
            'employee_id' => $this->employee_id,
            'department' => $this->department,
            'date_of_employment' => $this->date_of_employment,
            'address' => $this->address,
            'profile_picture' => $profilePath,
        ]);

        $this->alert('success', 'Success', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Teacher Added Successfully',
            'timerProgressBar' => true,
        ]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.teacher.add-teacher');
    }
}
