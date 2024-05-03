<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate dummy data and insert into the 'comments' table
        for ($i = 1; $i <= 20; $i++) { // Assuming you have 20 posts
            for ($j = 1; $j <= 10; $j++) { // Assuming you have 10 users
                // Simulate random comments on posts
                if (rand(0, 1)) {
                    DB::table('comments')->insert([
                        'user_id' => $j, // Replace with the range of your user IDs
                        'post_id' => $i, // Replace with the range of your post IDs
                        'comment' => 'This is a comment by user ' . $j . ' on post ' . $i,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
