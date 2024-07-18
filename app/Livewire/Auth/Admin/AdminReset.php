<?php

namespace App\Livewire\Auth\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Livewire\Component;

class AdminReset extends Component
{
    public $email;
    public $token;
    public $password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'email' => 'required|email|exists:admins,email',
            'password' => ['required', 'string', 'min:8', 'confirmed', PasswordRule::defaults()],
        ];
    }

    public function resetPassword()
    {
        $this->validate();

        $status = Password::broker('admins')->reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            session()->flash('status', __($status));
            return redirect()->route('admin.login');
        }

        session()->flash('error', __($status));
    }

    public function render()
    {
        return view('livewire.auth.admin.admin-reset')
            ->layout('components.layouts.auth');
    }
}
