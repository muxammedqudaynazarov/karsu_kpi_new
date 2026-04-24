<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\Year;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        Report::create([
            'name' => [
                'uz' => '2025-2026',
                'kaa' => '2025-2026',
                'ru' => '2025-2026',
                'en' => '2025-2026',
            ],
            'status' => '1',
        ]);

        $response = Http::withToken(env('HEMIS_API_KEY'))->get('https://student.karsu.uz/rest/v1/data/classifier-list', [
            'classifier' => 'h_language'
        ]);
        $years = $response->json();
        foreach ($years['data']['items'][0]['options'] as $year) {
            Language::create([
                'id' => $year['code'],
                'name' => [
                    'uz' => $year['name'],
                    'kaa' => $year['name'],
                    'ru' => $year['name'],
                    'en' => $year['name'],
                ],
                'status' => '1',
            ]);
        }

        $response = Http::withToken(env('HEMIS_API_KEY'))->get('https://student.karsu.uz/rest/v1/data/classifier-list', [
            'classifier' => 'h_education_year'
        ]);
        $years = $response->json();
        foreach ($years['data']['items'][0]['options'] as $year) {
            if ($year['code'] < 2018) continue;
            Year::create([
                'id' => $year['code'],
                'name' => $year['name'],
                'status' => '1',
            ]);
        }
    }
}
