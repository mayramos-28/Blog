<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->count(3)->create();      
       
            $user = new User();
            $user->role = 'admin';                      
            $user->password = password_hash('admin', PASSWORD_BCRYPT);
            $user->remember_token = fake()->sha256();
            $user->save();
        
    }
}
