<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'first_name' => 'xxx',
        	'last_name' => 'xxx',
        	'email' => 'xxx',
        	'password' => Hash::make('xxx'),
        	'role' => xxx,
        	]);
    }
}
