<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $student_id;
    public $password;
    public $remember = false;

    protected $rules = [
        'student_id' => 'required|string',
        'password' => 'required|string',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt([
            'student_id' => $this->student_id,
            'password' => $this->password],
            $this->remember)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        } else {
            session()->flash('error', 'Invalid student ID or password.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }
}
