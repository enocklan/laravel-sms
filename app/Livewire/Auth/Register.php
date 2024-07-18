<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Notifications\StudentIDNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Str;

class Register extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $phone_number;
    public $password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'nullable|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function register(): RedirectResponse
    {
        $validatedData = $this->validate();

        // Generate a unique student ID
        $student_id = 'STU-' . Str::random(8);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'password' => Hash::make($validatedData['password']),
            'student_id' => $student_id,
        ]);

        // Send the student ID notification
        $user->notify(new StudentIDNotification($student_id));

        // Show toast alert
        $this->alert('success', 'Student ID Sent', (array)'Student ID has been sent to your email address.');

        // Optionally, you can log the user in after registration
        auth()->login($user);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('components.layouts.auth');
    }
}
