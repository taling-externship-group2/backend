<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $no  = 1;
        $name = 'user' . $no++;
        $email = $name . '@test.com';

        return [
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'profile_img' => "null",
            'name' => $name,
            'phone' => "null",
            'email' => $email,
            'email_verified_at' => now(),
            'tutor_auth' => false,
            'remember_token' => Str::random(10),

        ];
    }
}
