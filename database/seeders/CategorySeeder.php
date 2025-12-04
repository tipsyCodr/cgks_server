<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
                'name' => 'News',
                'slug' => 'news',
                'type' => 'news',
                'status' => 1,
            ],
            [
                'name' => 'City',
                'slug' => 'city',
                'type' => 'news',
                'status' => 1,
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
                'type' => 'news',
                'status' => 1,
            ],
            [
                'name' => 'News',
                'slug' => 'news',
                'type' => 'announcement',
                'status' => 1,
            ],
            [
                'name' => 'City',
                'slug' => 'city',
                'type' => 'announcement',
                'status' => 1,
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
                'type' => 'announcement',
                'status' => 1,
            ]
        ];

        foreach ($rows as $row)
            DB::table('categories')->insert($row);

    }
}
