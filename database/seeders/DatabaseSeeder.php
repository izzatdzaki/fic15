<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@fic15.com',
            'password' => Hash::make('12345678'),
            'phone' =>  '1234567890',
            'role' => 'admin',

        ]);



        // seeder profileClinic manual
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'IMC',
            'address' => 'BTP Blok H',
            'phone' => '08888888888',
            'email' =>  'imc@imc.com',
            'doctor_name' => 'dr. imc',
            'unique_code' => '123456',

        ]);

        // call DoctorSeeder
        $this->call(DoctorSeeder::class);
    }
}
