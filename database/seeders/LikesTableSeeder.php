<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate dummy data and insert into the 'likes' table
        DB::table('likes')->insert([
            [
                'user_id' => 1, // Replace with an existing user ID
                'post_id' => 1, // Replace with an existing post ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Replace with an existing user ID
                'post_id' => 2, // Replace with an existing post ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more dummy data as needed
        ]);
    }
}
