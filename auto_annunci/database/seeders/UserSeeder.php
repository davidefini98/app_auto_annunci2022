<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'davide',
            'email'=>'davidefini98@gmail.com',
            'password' => Hash::make('ciaoatutti'),
        ]);
        
        User::factory()
            ->count(10)
            // ->hasPosts(1,[
            //     'user_id' => User::factory(),
            //     // 'titolo' => $this->faker->title(),
            //     // 'descrizione' => $this->faker->paragraph(),
            // ])
            // ->hasComments(3,[
            //     // 'testo' => $this->faker->title(),
            //     'user_id' => User::factory()
            // ])
            ->create(); 
    }
}
