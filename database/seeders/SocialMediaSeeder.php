<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SocialMedia;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialMedia::create([
            'name' => 'twitter',
            'url' => 'https://twitter.com/'
        ]);
        SocialMedia::create([
            'name' => 'facebook',
            'url' => 'https://facebook.com/'
        ]);
        SocialMedia::create([
            'name' => 'instagram',
            'url' => 'https://instagram.com/'
        ]);
        SocialMedia::create([
            'name' => 'linkedin',
            'url' => 'https://linkedin.com/'
        ]);
    }
}
