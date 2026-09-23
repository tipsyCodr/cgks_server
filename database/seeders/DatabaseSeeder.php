<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['mobile' => '0987654321'],
            [
                'name' => 'Admin',
                'email' => 'admin@cgks.com',
                'password' => bcrypt('cgks@bycrypt@123'),
                'role' => 'admin',
            ]
        );
        User::firstOrCreate(
            ['mobile' => '1234567890'],
            [
                'name' => 'User',
                'email' => 'user@cgks.com',
                'password' => bcrypt('cgks@bycrypt@123'),
                'role' => 'user',
            ]
        );

        $this->call([
            NewsSeeder::class,
            AnnouncementSeeder::class,
            AndolanSeeder::class,
            BhaakhaAuSanskrtiSeeder::class,
            PurakhaSeeder::class,
            LiveVideoSeeder::class,
            GallerySeeder::class,
        ]);
    }
}
