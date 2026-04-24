<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    public function run(): void
    {
        University::create([
            'id' => 346,
            'name' => [
                'uz' => 'Berdaq nomidagi Qoraqalpoq davlat universiteti',
                'ru' => 'Каракалпакский государственный университет имени Бердаха',
                'kaa' => 'Berdaq atındaǵı Qaraqalpaq mámleketlik universiteti',
                'en' => 'Karakalpak State University named after Berdakh',
            ],
            'logo' => 'https://hemis.karsu.uz/static/crop/2/5/250_250_90_2588838948.jpg',
            'url' => 'https://hemis.karsu.uz',
        ]);
    }
}
