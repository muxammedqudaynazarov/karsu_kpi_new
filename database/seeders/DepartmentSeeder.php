<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 10; $i <= 18; $i++) {
            $page = 1;
            do {
                $response = Http::withToken(env('HEMIS_API_KEY'))->get('https://student.karsu.uz/rest/v1/data/department-list', [
                    '_structure_type' => $i, 'limit' => 200, 'page' => $page
                ]);
                if ($response->failed()) break;
                $resData = $response->json();
                $items = $resData['data']['items'] ?? [];

                foreach ($items as $department) {
                    $parentId = $department['parent'] ?? null;
                    Department::updateOrCreate(
                        ['id' => $department['id']],
                        [
                            'name' => [
                                'uz' => $department['name'],
                                'ru' => $department['name'],
                                'en' => $department['name'],
                                'kaa' => $department['name'],
                            ],
                            'parent_id' => $parentId,
                        ]
                    );
                }
                $pageCount = $resData['data']['pagination']['pageCount'] ?? 1;
                $page++;
            } while ($page <= $pageCount);
        }
    }
}
