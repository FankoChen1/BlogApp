<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate dummy data and insert into the 'followers' table
        for ($i = 1; $i <= 10; $i++) { // Assuming you have 10 users
            for ($j = 1; $j <= 10; $j++) { // Assuming each user follows 1 to 10 other users
                // Simulate random follower relationships
                if ($i !== $j && rand(0, 1)) {
                    DB::table('followers')->insert([
                        'follower_id' => $i, // Replace with the range of your user IDs
                        'followed_id' => $j, // Replace with the range of your user IDs
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
