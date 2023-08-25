<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //\App\Models\User::factory(5)->create();

         $user = User::factory()->create([
            'name' => 'Anne',
            'email' => 'anne@gmail.com'
         ]);

         Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Listing::create([
        // 'title' => 'Laravel Junior Developer',
        // 'tags' => 'Laravel PHP',
        // 'company' => 'Icon',
        // 'location' => 'Paranaque',
        // 'email' => 'email@email.com',
        // 'website' => 'https"//www.icon.com',
        // 'description' => 'I am laravel'
        // ]);

        // Listing::create([
        // 'title' => 'Laravel Mid Developer',
        // 'tags' => 'Laravel PHP',
        // 'company' => 'Icon',
        // 'location' => 'Paranaque',
        // 'email' => 'email@email.com',
        // 'website' => 'https"//www.icon.com',
        // 'description' => 'I am laravel'
        // ]);

        // Listing::create([
        // 'title' => 'Laravel Senior Developer',
        // 'tags' => 'Laravel PHP',
        // 'company' => 'Icon',
        // 'location' => 'Paranaque',
        // 'email' => 'email@email.com',
        // 'website' => 'https"//www.icon.com',
        // 'description' => 'I am laravel'
        // ]);
    }
}
