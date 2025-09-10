<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'bio' => (string) Str::random(10),
            'address' => (string) Str::random(10),
            'profile_photo' => "https://avatar.iran.liara.run/public",
            'email_verified_at' => now(),
            'mobile' => fake()->unique()->numerify('9#########'), // Indian mobile number format
            // 'company' => fake()->company(),
            'occupation' => fake()->jobTitle(), // Added occupation
            // 'department' => fake()->word(), // Added department
            // ✅ Pick position from fixed 6 options
            'position' => fake()->randomElement([
                'प्रदेश',
                'जिला',
                'खड़',
                'गुड़ी',
                'पार',
                'बूथ',
            ]),

            // ✅ Pick designation from fixed list
            'designation' => fake()->randomElement([
                'संयोजक',
                'अध्यक्ष',
                'महामंत्री',
                'संगठन मंत्री',
                'उपाध्यक्ष',
                'उपाध्यक्ष',
                'उपाध्यक्ष',
                'उपाध्यक्ष',
                'मंत्री',
                'मंत्री',
                'सचिव',
                'सचिव',
                'सचिव',
                'सहसचिव',
                'सहसचिव',
                'सहसचिव',
                'मिडिया प्रभारी',
                'IT प्रभारी',
                'सदस्यता प्रभारी',
                'कार्यकारिणी सदस्य',
            ]),

            // 'category' => fake()->word(), // Added category
            'role' => 'user',
            // 'due_date' => now()->addYear(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
