<?php

namespace App\Livewire\Auth\Admin;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class AdminForgot extends Component
{
    public $email;

    protected function rules()
    {
        return [
            'email' => 'required|email|exists:admins,email',
        ];
    }

    public function sendResetLink()
    {
        $this->validate();

        $status = Password::broker('admins')->sendResetLink(['email' => $this->email]);

        if ($status == Password::RESET_LINK_SENT) {
            session()->flash('status', __($status));
        } else {
            session()->flash('error', __($status));
        }
    }

    public function render()
    {
        return view('livewire.auth.admin.admin-forgot')->layout('components.layouts.auth');
    }
}
