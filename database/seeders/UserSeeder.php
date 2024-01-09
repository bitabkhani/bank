<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    public function run(): void
    {
        foreach (range(10, 30) as $item) {
            $firstNumber = (rand(0, 1) == 1) ? '3' : '1';

            if ($firstNumber == '3') {
                $secondNumber = rand(3, 9);
            } else {
                $secondNumber = rand(0, 9);
            }

            $mobileNumber = '09' . $firstNumber . $secondNumber . mt_rand(1000000, 9999999);
            DB::table('users')->insert([
                'name' => fake()->firstName.'-'.fake()->lastName,
                'email' => fake()->unique()->safeEmail(),
                'mobile' => $mobileNumber,
                'email_verified_at' => now(),
                'password' => static::$password ??= Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
