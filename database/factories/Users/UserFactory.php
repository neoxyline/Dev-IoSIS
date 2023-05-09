<?php

namespace Database\Factories\Users;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        // admin

        // return [

        //     'uuid' => Uuid::uuid4()->toString(),

        //     'user_type' => json_encode(['admin', 'pegawai']),

        //     'name' => 'superuser',

        //     'email' => 'hasbiahsani92@gmail.com',

        //     'email_verified_at' => now(),

        //     'password' => Hash::make('bebe1h4pe'), // password

        //     'remember_token' => Str::random(10),

        // ];

        // Pelanggan

        return [

            'uuid' => Uuid::uuid4()->toString(),

            'user_type' => json_encode(['pelanggan']),

            'name' => 'superpelanggan',

            'email' => 'superpelanggan@gmail.com',

            'email_verified_at' => now(),

            'password' => Hash::make('bebe1h4pe'), // password

            'remember_token' => Str::random(10),

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
