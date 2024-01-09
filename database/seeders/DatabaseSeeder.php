<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Account;
use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*$this->call([
            CardSeeder::class,
        ]);*/

        $users = User::factory()->count(5)->create();

        $users->each(function ($user) {
            $accounts = Account::factory()
                ->count(2)
                ->create(['user_id' => $user->id]);
            $accounts->each(function ($account) {
                $cards = Card::factory()
                    ->count(2)
                    ->create(['account_id' => $account->id]);
            });
        });
    }
}
