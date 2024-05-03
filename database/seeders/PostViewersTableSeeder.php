<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostViewersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         for ($i = 1; $i <= 20; $i++) { 
            for ($j = 1; $j <= 10; $j++) { 
                // Simulate random viewership of posts
                if (rand(0, 1)) {
                    DB::table('post_viewers')->insert([
                        'user_id' => $j, 
                        'post_id' => $i, 
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
