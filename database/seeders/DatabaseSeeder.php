<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Project;
use App\Models\Writer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Writer::factory(3)->create();

        Category::create([
            'slug' => 'frondend',
            'name' => 'Frondend'
        ]);
        Category::create([
            'slug' => 'backend',
            'name' => 'Backend'
        ]);
        Category::create([
            'slug' => 'hobby',
            'name' => 'Hobby'
        ]);

        Project::factory(22)->create();

        // Writer::create([
        //     'username' => 'Bursho',
        //     'name' => 'Bursho Glossarano',
        //     'description' => 'You have to write the book that wants to be written.'
        // ]);
        // Writer::create([
        //     'username' => 'Madeleine',
        //     'name' => "Madeleine L'Engle",
        //     'description' => "If you don't have time to read, you don't have the time (or the tools) to write. Simple as that."
        // ]);

        // Project::create([
        //     'category_id' => 3,
        //     'writer_id' => 2,
        //     'slug' => 'music',
        //     'title' => 'Music',
        //     'img' => 'No Image',
        //     'description' => 'Music Text. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos impedit quae quam aliquid, nemo aliquam eos maxime asperiores blanditiis sint!'
        // ]);
        // Project::create([
        //     'category_id' => 3,
        //     'writer_id' => 2,
        //     'slug' => 'football',
        //     'title' => 'Football',
        //     'img' => 'No Image',
        //     'description' => 'Football Text. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos impedit quae quam aliquid, nemo aliquam eos maxime asperiores blanditiis sint!'
        // ]);
        // Project::create([
        //     'category_id' => 3,
        //     'writer_id' => 1,
        //     'slug' => 'games',
        //     'title' => 'Games',
        //     'img' => 'No Image',
        //     'description' => 'Games Text. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos impedit quae quam aliquid, nemo aliquam eos maxime asperiores blanditiis sint!'
        // ]);
        // Project::create([
        //     'category_id' => 2,
        //     'writer_id' => 2,
        //     'slug' => 'programmers',
        //     'title' => 'Programmers',
        //     'img' => 'No Image',
        //     'description' => 'Programmers Text. Ugi is a Software Developer who is passionate about delivering impactful digital'
        // ]);
        // Project::create([
        //     'category_id' => 1,
        //     'writer_id' => 1,
        //     'slug' => 'design',
        //     'title' => 'Design',
        //     'img' => 'No Image',
        //     'description' => 'Design Text. <p class="font-[600] text-[14px]"> Eid Mubarak! May Allah fulfill all your dreams and hopes.</p> Eid Al-Fitr Mubarak! Sending all my love and good wishes to you. Eid Mubarak!'
        // ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}