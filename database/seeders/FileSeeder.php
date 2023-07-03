<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $users = User::all();
        $profile = Profile::all();

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));

        foreach ($posts as $post) {
            $file = new File([
                'filename' => $faker->imageUrl(150, 150),
                'fileable_type' => 'App\Models\Post',
                'fileable_id' => $post->id,
                'type' => 'image',
                'owner_type' => 'post',
            ]);
            $post->files()->save($file);
        }

        foreach ($users as $user) {
            $file = new File(
                [
                    'filename' => $faker->imageUrl(150, 150),
                    'fileable_type' => 'App\Models\User',
                    'fileable_id' => $user->id,
                    'type' => 'image',
                    'owner_type' => 'user',
                ]
            );
            $user->files()->save($file);
        }

        foreach ($profile as $profile) {
            $file = new File(
                [
                    'filename' => $faker->imageUrl(1584, 396),
                    'fileable_type' => 'App\Models\Profile',
                    'fileable_id' => $profile->id,
                    'type' => 'image',
                    'owner_type' => 'profile',
                ]
            );
            $profile->files()->save($file);
        }
    }
}
