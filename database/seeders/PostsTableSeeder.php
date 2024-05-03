<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Generate dummy data and insert into the 'posts' table
         DB::table('posts')->insert([
            [
                'post_title' => 'First Post',
                'content' => 'This is the content of the first post.',
                'user_id' => 1, // Replace with an existing user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_title' => 'Second Post',
                'content' => 'This is the content of the second post.',
                'user_id' => 2, // Replace with an existing user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more dummy data as needed
        ]);
    }
}
