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
            'password_is_admin_set' => 1,
        	'role_id' => 10,
        	]);
        	
        User::create([
        	'first_name' => 'Jason',
        	'last_name' => 'McHugh',
        	'email' => 'jason@trademe.co.nz',
        	'password' => Hash::make('jasonmchugh'),
            'password_is_admin_set' => 1,
        	'role_id' => 5,
        	]);
        	
        User::create([
        	'first_name' => 'Tegan',
        	'last_name' => 'Clay',
        	'email' => 'tegan.clay@trademe.co.nz',
        	'password' => Hash::make('teganclay'),
            'password_is_admin_set' => 1,
        	'role_id' => 6,
        	]);
        	
        User::create([
        	'first_name' => 'James',
        	'last_name' => 'Bannister',
        	'email' => 'james.bannister@trademe.co.nz',
        	'password' => Hash::make('jamesbannister'),
            'password_is_admin_set' => 1,
        	'role_id' => 7,
        	]);
        	
        User::create([
        	'first_name' => 'Phillip',
        	'last_name' => 'Onesemo',
        	'email' => 'phillip.onesemo@trademe.co.nz',
        	'password' => Hash::make('philliponesemo'),
            'password_is_admin_set' => 1,
        	'role_id' => 8,
        	]);
        	
        User::create([
        	'first_name' => 'Rachel',
        	'last_name' => 'Garrett',
        	'email' => 'rachel@trademe.co.nz',
        	'password' => Hash::make('rachelgarrett'),
            'password_is_admin_set' => 1,
        	'role_id' => 9,
        	]);
        	
        User::create([
        	'first_name' => 'Alicia',
        	'last_name' => 'Rameka',
        	'email' => 'alicia.rameka@trademe.co.nz',
        	'password' => Hash::make('aliciarameka'),
            'password_is_admin_set' => 1,
        	'role_id' => 3,
        	]);
    }
}
