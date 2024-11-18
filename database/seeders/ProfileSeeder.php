<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => "Vincent Mulyadi",
            'description' => "Vincent Mulyadi is a student at the Department of Information Technology (PTIK) at Universitas Sebelas Maret. He is currently working towards his degree, focusing on developing his skills in technology and information systems. In addition to his studies, Vincent has a deep passion for reading, which helps him broaden his knowledge in various fields. He enjoys exploring both academic and non-academic books, allowing him to gain new perspectives. Outside of his academic life, Vincent is a curious and dedicated individual, always eager to learn. His love for reading and learning plays a key role in his personal and academic growth.",
            'job' => "Student",
            'birthdate' => "2003-01-22",
            'email' => "vincentmulyadi@student.uns.ac.id",
            'phone' => '+62-8123-4567-8910',
            'address' => 'Pontianak Street, No.1 RT.1 RW.I Desa Kaliurang',
            'avatar_url' => "/profile/avatar/avatar.jpg",
        ]);
    }
}
