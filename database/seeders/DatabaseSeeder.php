<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Appointment;
use App\Models\patient_record;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        Appointment::factory()->count(40)->create();
        patient_record::factory()->count(40)->create();
        User::create([
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'ic' => '000000-00-0000',
            'gender' =>'male',
            'expertise' =>'admin',
            'profilePic' =>'https://xsgames.co/randomusers/assets/avatars/female/55.jpg',    
            'phone' => '000-0000000',
            'remember_token' => Str::random(10),
        ]);
    }
}
