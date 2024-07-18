<?php

namespace App\Livewire\Admin\Account;

use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Validation\Rules\Password;

class AdminCredentials extends Component
{
    use LivewireAlert;

    public $oldPassword;
    public $newPassword;
    public $profile;
    public $admin;

    public function mount()
    {
        $this->admin = auth('admin')->user();
        $this->profile = $this->admin->profile_image_path; // Assuming you have a profile image path stored
    }

    protected function rules()
    {
        return [
            'oldPassword' => 'required',
            'newPassword' => [
                'required',
                Password::min(8)->mixedCase()->numbers()->symbols(),
            ],
        ];
    }

    public function changePassword()
    {
        $this->validate();

        if (!Hash::check($this->oldPassword, $this->admin->password)) {
            $this->alert('error', 'Old password is incorrect.', ['position' => 'bottom-end']);
            return;
        }

        $this->admin->update([
            'password' => Hash::make($this->newPassword),
        ]);

        $this->alert('success', 'Password updated successfully!', ['position' => 'bottom-end']);
    }

    public function render()
    {
        return view('livewire.admin.account.admin-credentials', [
            'admin' => $this->admin,
            'profile' => $this->profile,
        ]);
    }
}
