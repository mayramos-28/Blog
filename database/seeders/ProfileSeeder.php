<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all();
        foreach ($user as $user) {
            $user->profile()->save(
                \App\Models\Profile::factory(1)->create()->firstOrFail()
            );
        }
      
    }
}
