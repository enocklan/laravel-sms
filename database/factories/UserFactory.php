<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid,
            'student_id' => $this->faker->unique()->randomNumber(5, true),
            'name' => $this->faker->name,
            'phoneNumber' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => $this->faker->optional()->dateTime,
            'password' => hash::make('password'), // use Hash::make() for better security
            'is_active' => $this->faker->boolean(90),
            'is_otp_verified' => $this->faker->boolean(50),
            'has_to_change_password' => $this->faker->boolean(10),
            'course' => $this->faker->optional()->word,
            'department' => $this->faker->optional()->word,
            'year_of_study' => $this->faker->optional()->randomElement(['First', 'Second', 'Third', 'Fourth']),
            'date_of_birth' => $this->faker->optional()->date,
            'address' => $this->faker->optional()->address,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
