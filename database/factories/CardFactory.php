<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'card_number' => str_pad(mt_rand(1, 9999999999999999), 16, '0', STR_PAD_LEFT),
            'balance' => fake()->numberBetween(0, 30000000),
            'account_id' => Account::all()->random()->id,
        ];
    }
}
