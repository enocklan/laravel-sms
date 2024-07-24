<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => 'bettsonk@gmail.com',
           // 'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), // default password, change it if needed
            'phoneNumber' => '0742771316',
            //'phoneNumber' => $this->faker->phoneNumber,
            'is_active' => true,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
