<?php

namespace App\Livewire\Auth\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class AdminLogin extends Component
{
    public $email;
    public $password;
    public $remember = false;

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ];
    }

    public function login()
    {
        $credentials = $this->validate();

        if (Auth::guard('admin')->attempt($credentials, $this->remember)) {
            session()->regenerate();

            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    public function render()
    {
        return view('livewire.auth.admin.admin-login')->layout('components.layouts.auth');
    }
}
