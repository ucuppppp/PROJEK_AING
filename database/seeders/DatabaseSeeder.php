<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
        'name' => 'Raditya Yusuf A.',
        'username' => 'radityaa',
        'email' => '12@gmail.com',
        'password' => bcrypt('12345'),
        'is_admin' => 'admin'
    ]);

        User::factory(9)->create();

        // Category::factory(3)->create();
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);
        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);
        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);

        Post::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}