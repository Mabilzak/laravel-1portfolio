<?php

namespace App\Models;

class Project
{

    private static $works = [
        App\Models\Project::create([
            'category_id' => 3,
            'slug' => 'music',
            'title' => 'Music',
            'img' => 'No Image',
            'description' => 'Threject One text. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos impedit quae quam aliquid, nemo aliquam eos maxime asperiores blanditiis sint!'
        ]),
        App\Models\Project::create([
            'category_id' => 2,
            'slug' => 'programmers',
            'title' => 'Programmers',
            'img' => 'No Image',
            'description' => 'Namine Text. Ugi is a Software Developer who is passionate about delivering impactful digital'
        ]),
        App\Models\Project::create([
            'category_id' => 1,
            'slug' => 'design',
            'title' => 'Design',
            'img' => 'No Image',
            'description' => 'Exam3 Text. <p class="font-[600] text-[14px]"> Eid Mubarak! May Allah fulfill all your dreams and hopes.</p> Eid Al-Fitr Mubarak! Sending all my love and good wishes to you. Eid Mubarak!'
        ]),
        Category::create([
            'slug' => 'hobby',
            'name' => 'Hobby'
        ])

    ];

    public static function all()
    {
        return collect(self::$works);
    }

    public static function find($slug)
    {
        $works = static::all();

        return $works->firstWhere('slug', $slug);
    }


}