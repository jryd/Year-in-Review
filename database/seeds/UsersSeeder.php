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
        //Super Admin
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
        	
        //Day Crew
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
        	'first_name' => 'Balthazar',
        	'last_name' => 'Valentine',
        	'email' => 'ben.valentine@trademe.co.nz',
        	'password' => Hash::make('serene_mietner'),
            'seed_password' => 'serene_mietner',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Blair',
        	'last_name' => 'Macklin',
        	'email' => 'blair.macklin@trademe.co.nz',
        	'password' => Hash::make('trusting_wing'),
            'seed_password' => 'trusting_wing',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Alison',
        	'last_name' => 'Conroy',
        	'email' => 'alison.conroy@trademe.co.nz',
        	'password' => Hash::make('prickly_mayer'),
            'seed_password' => 'prickly_mayer',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Hannah',
        	'last_name' => 'Buchanan',
        	'email' => 'hannahmarybuchanan@gmail.com',
        	'password' => Hash::make('goofy_blackwell'),
            'seed_password' => 'goofy_blackwell',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Shara',
        	'last_name' => 'Hansard',
        	'email' => 'shara@trademe.co.nz',
        	'password' => Hash::make('pensive_swanson'),
            'seed_password' => 'pensive_swanson',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Ella',
        	'last_name' => 'Hard',
        	'email' => 'ella.hard@xero.com',
        	'password' => Hash::make('reverent_poincare'),
            'seed_password' => 'reverent_poincare',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Ally',
        	'last_name' => 'Buchanan',
        	'email' => 'alexandra.buchanan@trademe.co.nz',
        	'password' => Hash::make('romantic_feynman'),
            'seed_password' => 'romantic_feynman',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Emma',
        	'last_name' => 'Clapperton',
        	'email' => 'emma.clapperton@trademe.co.nz',
        	'password' => Hash::make('elated_booth'),
            'seed_password' => 'elated_booth',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Abe',
        	'last_name' => 'Foster',
        	'email' => 'foster.abe24@gmail.com',
        	'password' => Hash::make('cranky_darwin'),
            'seed_password' => 'cranky_darwin',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Bobbi',
        	'last_name' => 'Kerei',
        	'email' => 'bobbi@trademe.co.nz',
        	'password' => Hash::make('jolly_blackwell'),
            'seed_password' => 'jolly_blackwell',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Clare',
        	'last_name' => 'Keegan',
        	'email' => 'clare.keegan@trademe.co.nz',
        	'password' => Hash::make('naughty_carson'),
            'seed_password' => 'naughty_carson',
            'password_is_admin_set' => 1,
        	'role_id' => 1,
            'sidebar_min' => 0,
        	]);
        	
        //Evening Crew One
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
        	'first_name' => 'Linda',
        	'last_name' => 'Fatialofa',
        	'email' => 'linda.fatialofa@trademe.co.nz',
        	'password' => Hash::make('high_morse'),
            'seed_password' => 'high_morse',
            'password_is_admin_set' => 1,
        	'role_id' => 2,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Max',
        	'last_name' => 'North',
        	'email' => 'max@trademe.co.nz',
        	'password' => Hash::make('fervent_hodgkin'),
            'seed_password' => 'fervent_hodgkin',
            'password_is_admin_set' => 1,
        	'role_id' => 2,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Alex',
        	'last_name' => 'Smith',
        	'email' => 'alex.smith@trademe.co.nz',
        	'password' => Hash::make('stoic_liskov'),
            'seed_password' => 'stoic_liskov',
            'password_is_admin_set' => 1,
        	'role_id' => 2,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Sam',
        	'last_name' => 'Judd',
        	'email' => 'samantha.judd@trademe.co.nz',
        	'password' => Hash::make('nostalgic_keller'),
            'seed_password' => 'nostalgic_keller',
            'password_is_admin_set' => 1,
        	'role_id' => 2,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Byron',
        	'last_name' => 'Curtis',
        	'email' => 'byron.curtis@trademe.co.nz',
        	'password' => Hash::make('sleepy_pare'),
            'seed_password' => 'sleepy_pare',
            'password_is_admin_set' => 1,
        	'role_id' => 2,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Kate',
        	'last_name' => 'Clapperton',
        	'email' => 'kate.clapperton@trademe.co.nz',
        	'password' => Hash::make('stoic_carson'),
            'seed_password' => 'stoic_carson',
            'password_is_admin_set' => 1,
        	'role_id' => 2,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Mahana',
        	'last_name' => 'Hunkin',
        	'email' => 'mahana.hunkin@trademe.co.nz',
        	'password' => Hash::make('insane_hawking'),
            'seed_password' => 'insane_hawking',
            'password_is_admin_set' => 1,
        	'role_id' => 2,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Alex',
        	'last_name' => 'McGill',
        	'email' => 'alex.mcgill@trademe.co.nz',
        	'password' => Hash::make('trusting_almeida'),
            'seed_password' => 'trusting_almeida',
            'password_is_admin_set' => 1,
        	'role_id' => 2,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Liz',
        	'last_name' => 'Taylor',
        	'email' => 'liz@trademe.co.nz',
        	'password' => Hash::make('thirsty_leavitt'),
            'seed_password' => 'thirsty_leavitt',
            'password_is_admin_set' => 1,
        	'role_id' => 2,
            'sidebar_min' => 0,
        	]);
        	
        //Evening Crew Two
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
        	'first_name' => 'Gemma',
        	'last_name' => 'Linton',
        	'email' => 'gemma@trademe.co.nz',
        	'password' => Hash::make('cocky_aryabhata'),
            'seed_password' => 'cocky_aryabhata',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Gareth',
        	'last_name' => 'Clay',
        	'email' => 'gareth.clay@trademe.co.nz',
        	'password' => Hash::make('dreamy_darwin'),
            'seed_password' => 'dreamy_darwin',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Levi',
        	'last_name' => 'Walford',
        	'email' => 'levi.walford@trademe.co.nz',
        	'password' => Hash::make('suspicious_thompson'),
            'seed_password' => 'suspicious_thompson',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Alicia',
        	'last_name' => 'Rameka',
        	'email' => 'alicia.rameka@trademe.co.nz',
        	'password' => Hash::make('gloomy_wescoff'),
            'seed_password' => 'gloomy_wescoff',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Jason',
        	'last_name' => 'Brown',
        	'email' => 'jason.brown@trademe.co.nz',
        	'password' => Hash::make('goofy_einstein'),
            'seed_password' => 'goofy_einstein',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Toby',
        	'last_name' => 'Wray',
        	'email' => 'toby.wray@trademe.co.nz',
        	'password' => Hash::make('adoring_booth'),
            'seed_password' => 'adoring_booth',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Harprit',
        	'last_name' => 'Kaur',
        	'email' => 'harprit.kaur@trademe.co.nz',
        	'password' => Hash::make('pensive_mietner'),
            'seed_password' => 'pensive_mietner',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Frankie',
        	'last_name' => 'Dutt-Maharaj',
        	'email' => 'francesca.duttmaharaj@trademe.co.nz',
        	'password' => Hash::make('happy_dubinsky'),
            'seed_password' => 'happy_dubinsky',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Megan',
        	'last_name' => 'Mazengarb',
        	'email' => 'megan.mazengarb@trademe.co.nz',
        	'password' => Hash::make('dreamy_leakey'),
            'seed_password' => 'dreamy_leakey',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Vicky',
        	'last_name' => 'Struthers',
        	'email' => 'vicky.struthers@trademe.co.nz',
        	'password' => Hash::make('insane_bell'),
            'seed_password' => 'insane_bell',
            'password_is_admin_set' => 1,
        	'role_id' => 3,
            'sidebar_min' => 0,
        	]);
        
        //Nightwalkers	
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
        	'first_name' => 'Wiremu',
        	'last_name' => 'Tuhiwai',
        	'email' => 'wiremu@trademe.co.nz',
        	'password' => Hash::make('silly_wilson'),
            'seed_password' => 'silly_wilson',
            'password_is_admin_set' => 1,
        	'role_id' => 4,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Marissa-Anne',
        	'last_name' => 'Tamarai',
        	'email' => 'marissa-anne@trademe.co.nz',
        	'password' => Hash::make('dreamy_elion'),
            'seed_password' => 'dreamy_elion',
            'password_is_admin_set' => 1,
        	'role_id' => 4,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Alepi',
        	'last_name' => 'Anae',
        	'email' => 'alepi@trademe.co.nz',
        	'password' => Hash::make('ecstatic_pike'),
            'seed_password' => 'ecstatic_pike',
            'password_is_admin_set' => 1,
        	'role_id' => 4,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Jasmine',
        	'last_name' => 'Smith',
        	'email' => 'jasmine.smith@trademe.co.nz',
        	'password' => Hash::make('determined_banach'),
            'seed_password' => 'determined_banach',
            'password_is_admin_set' => 1,
        	'role_id' => 4,
            'sidebar_min' => 0,
        	]);
        	
        User::create([
        	'first_name' => 'Ra',
        	'last_name' => 'Hunkin',
        	'email' => 'ra.hunkin@trademe.co.nz',
        	'password' => Hash::make('pensive_allen'),
            'seed_password' => 'pensive_allen',
            'password_is_admin_set' => 1,
        	'role_id' => 4,
            'sidebar_min' => 0,
        	]);
        	
        //Management	
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
        	'first_name' => 'Darren',
        	'last_name' => 'Stuart',
        	'email' => 'darren@trademe.co.nz',
        	'password' => Hash::make('insane_hypatia'),
            'seed_password' => 'insane_hypatia',
            'password_is_admin_set' => 1,
        	'role_id' => 9,
            'sidebar_min' => 0,
        	]);
    }
}
