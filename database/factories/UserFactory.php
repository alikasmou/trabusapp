<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        $username = Str::of($name)->camel();
        $slug = Str::slug($username, '');
        $phone = Str::remove('+', $this->faker->e164PhoneNumber());
        return [
            'fullname' => $name,
            'photo_url' => 'https://i.pravatar.cc/300',
            'birthday' => Carbon::now()->subYears(rand(14,75)),
            'identity_number'=> '99'.rand(111111111,999999999),
            'phone'=> $phone,
            'username' => $slug,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => null,
            'client_type_id' => rand(1,3)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
