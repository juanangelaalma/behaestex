<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Skill;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'avatar' => 'https://blablabal.com',
            'name' => 'Juan Angela Alma',
            'address' => 'Gresik, East Java, Indonesia',
            'email' => 'juanangelaalma@gmail.com',
            'phone' => '83111064486',
            'summary' => 'I am a highly skilled web developer with over 2 years of coding experience. Renowned for my unwavering dedication and exceptional ability to meet tight deadlines, I consistently deliver outstanding results. I thrive in demanding environments and possess a track record of effective leadership and proficient project management skills.'
        ]);

        WorkExperience::create([
            'user_id' => $user->id,
            'title' => 'Backend Developer',
            'company' => 'PT Peduly Gotong Royong',
            'from' => '09-2022',
            'to' => '09-2023',
            'description' => 'Created virtual payment features with Midtrans services that have processed more than 1000 transactions'
        ]);

        Education::create([
            'user_id' => $user->id,
            'attainment' => 4,
            'school' => 'Universitas Negeri Surabaya',
            'from' => '09-2022',
            'to' => '09-2023',
            'description' => 'Created virtual payment features with Midtrans services that have processed more than 1000 transactions'
        ]);

        Skill::create([
            'user_id' => $user->id,
            'skill' => 'MYSQL Database',
            'level' => 'expert'
        ]);
    }
}
