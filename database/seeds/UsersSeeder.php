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
        	'first_name' => 'Super',
        	'last_name' => 'Administrator',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('admin'),
        	'role' => 10,
        	]);
        	
        User::create([
        	'first_name' => 'Jason',
        	'last_name' => 'McHugh',
        	'email' => 'jason@trademe.co.nz',
        	'password' => Hash::make('jasonmchugh'),
        	'role' => 5,
        	]);
        	
        User::create([
        	'first_name' => 'Tegan',
        	'last_name' => 'Clay',
        	'email' => 'tegan.clay@trademe.co.nz',
        	'password' => Hash::make('teganclay'),
        	'role' => 6,
        	]);
        	
        User::create([
        	'first_name' => 'James',
        	'last_name' => 'Bannister',
        	'email' => 'james.bannister@trademe.co.nz',
        	'password' => Hash::make('jamesbannister'),
        	'role' => 7,
        	]);
        	
        User::create([
        	'first_name' => 'Phillip',
        	'last_name' => 'Onesemo',
        	'email' => 'phillip.onesemo@trademe.co.nz',
        	'password' => Hash::make('philliponesemo'),
        	'role' => 8,
        	]);
        	
        User::create([
        	'first_name' => 'Rachel',
        	'last_name' => 'Garrett',
        	'email' => 'rachel@trademe.co.nz',
        	'password' => Hash::make('rachelgarrett'),
        	'role' => 9,
        	]);
        	
        User::create([
        	'first_name' => 'Alicia',
        	'last_name' => 'Rameka',
        	'email' => 'alicia.rameka@trademe.co.nz',
        	'password' => Hash::make('aliciarameka'),
        	'role' => 3,
        	]);
    }
}
