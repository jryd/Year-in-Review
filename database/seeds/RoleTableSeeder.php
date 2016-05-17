<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'CS Day Crew Team Member',
            'role_number' => 1,
        ]);
        
        Role::create([
            'name' => 'CS Evening Crew 1 Team Member',
            'role_number' => 2,
        ]);
        
        Role::create([
            'name' => 'CS Evening Crew 2 Team Member',
            'role_number' => 3,
        ]);
        
        Role::create([
            'name' => 'CS Nightwalker Team Member',
            'role_number' => 4,
        ]);
        
        Role::create([
            'name' => 'CS Day Crew Team Leader',
            'role_number' => 5,
        ]);
        
        Role::create([
            'name' => 'CS Evening Crew 1 Team Leader',
            'role_number' => 6,
        ]);
        
        Role::create([
            'name' => 'CS Evening Crew 2 Team Leader',
            'role_number' => 7,
        ]);
        
        Role::create([
            'name' => 'CS Nightwalker Team Leader',
            'role_number' => 8,
        ]);
        
        Role::create([
            'name' => 'CS Manager',
            'role_number' => 9,
        ]);
        
        Role::create([
            'name' => 'Super Administrator',
            'role_number' => 10,
        ]);

    }
}
