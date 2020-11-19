<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Story::factory()->count(10)->create();
    }
}
