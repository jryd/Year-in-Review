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
            'seed_password' => 'admin',
            'password_is_admin_set' => 1,
        	'role_id' => 10,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Jason',
        	'last_name' => 'McHugh',
        	'email' => 'jason@trademe.co.nz',
        	'password' => Hash::make('jovial_goodall'),
            'seed_password' => 'jovial_goodall',
            'password_is_admin_set' => 1,
        	'role_id' => 5,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Tegan',
        	'last_name' => 'Clay',
        	'email' => 'tegan.clay@trademe.co.nz',
        	'password' => Hash::make('drunk_perlman'),
            'seed_password' => 'drunk_perlman',
            'password_is_admin_set' => 1,
        	'role_id' => 6,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'James',
        	'last_name' => 'Bannister',
        	'email' => 'james.bannister@trademe.co.nz',
        	'password' => Hash::make('silly_austin'),
            'seed_password' => 'silly_austin',
            'password_is_admin_set' => 1,
        	'role_id' => 7,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Phillip',
        	'last_name' => 'Onesemo',
        	'email' => 'phillip.onesemo@trademe.co.nz',
        	'password' => Hash::make('prickly_poincare'),
            'seed_password' => 'prickly_poincare',
            'password_is_admin_set' => 1,
        	'role_id' => 8,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Rachel',
        	'last_name' => 'Garrett',
        	'email' => 'rachel@trademe.co.nz',
        	'password' => Hash::make('ecstatic_lamarr'),
            'seed_password' => 'ecstatic_lamarr',
            'password_is_admin_set' => 1,
        	'role_id' => 9,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Alicia',
        	'last_name' => 'Rameka',
        	'email' => 'alicia.rameka@trademe.co.nz',
        	'password' => Hash::make('drunk_wright'),
            'seed_password' => 'drunk_wright',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
    }
}
