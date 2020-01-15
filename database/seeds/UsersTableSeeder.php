<?php

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'rameseslabs@gmail.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Brad Basinger',
                'email' => 'rameseslabs@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('Password1')

            ]);
        }
    }
}
