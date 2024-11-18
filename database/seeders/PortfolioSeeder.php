<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'title' => 'Project 1',
            'client' => 'Google inc.',
            'duration' => '2020-2022',
            'description' => 'Ini Merupakan deskripsi project 1',
            'url' => '/portfolio/project1',
            'image_url' => '/images/portfolio/project1.jpg'
        ]);
        Portfolio::create([
            'title' => 'Project 2',
            'client' => 'Genba.co',
            'duration' => '2022',
            'description' => 'Ini Merupakan deskripsi project 2',
            'url' => '/portfolio/project2',
            'image_url' => '/images/portfolio/project2.jpg'
        ]);
        Portfolio::create([
            'title' => 'Project 3',
            'client' => 'Konco Space',
            'duration' => '2023-2024',
            'description' => 'Ini Merupakan deskripsi project 3',
            'url' => '/portfolio/project3',
            'image_url' => '/images/portfolio/project3.jpg'
        ]);
        Portfolio::create([
            'title' => 'Project 4',
            'client' => "Mother's Blessing",
            'duration' => '2023-2024',
            'description' => 'Ini Merupakan deskripsi project 4',
            'url' => '/portfolio/project4',
            'image_url' => '/images/portfolio/project4.jpg'
        ]);
        Portfolio::create([
            'title' => 'Project 5',
            'client' => 'Tresnan Tea',
            'duration' => '2024',
            'description' => 'Ini Merupakan deskripsi project 5',
            'url' => '/portfolio/project5',
            'image_url' => '/images/portfolio/project5.jpg'
        ]);
    }
}
