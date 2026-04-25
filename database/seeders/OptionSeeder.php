<?php

namespace Database\Seeders;

use App\Models\Evaluation;
use App\Models\Formula;
use App\Models\Observance;
use App\Models\Option;
use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    public function run(): void
    {
        Evaluation::create([
            'code' => 'hold_degrees',
            'name' => [
                'uz' => 'Ilmiy daraja yoki unvonga ega bo‘lganlar',
                'ru' => 'Имеющие ученую степень или звание',
                'kaa' => 'Ilimiy dáreje yaki ataqqa iye bolganlar',
                'en' => 'Holding academic degrees or titles',
            ]
        ]);
        Evaluation::create([
            'code' => 'no_degrees',
            'name' => [
                'uz' => 'Ilmiy daraja yoki unvonga ega bo‘lmaganlar',
                'ru' => 'Не имеющие ученой степени или звания',
                'kaa' => 'Ilimiy dáreje yamasa ataqqa ie bolmaǵanlar',
                'en' => 'No academic degree or title',
            ]
        ]);
        Evaluation::create([
            'code' => 'foreign_lang',
            'name' => [
                'uz' => 'Fakultetlararo chet tillari kafedrasi',
                'ru' => 'Межфакультетская кафедра иностранных языков',
                'kaa' => 'Fakultetler aralıq shet tilleri kafedrası',
                'en' => 'Interfaculty Department of Foreign Languages',
            ]
        ]);
        Evaluation::create([
            'code' => 'physical',
            'name' => [
                'uz' => 'Fakultetlararo jismoniy tarbiya kafedrasi',
                'ru' => 'Межфакультетская кафедра физической культуры',
                'kaa' => 'Fakultetler aralıq dene tárbiyası kafedrası',
                'en' => 'Department of Interfaculty Physical Education',
            ]
        ]);

        Observance::create([
            'code' => 'current',
            'name' => [
                'uz' => 'Joriy o‘quv yili uchun',
                'kaa' => 'Usı oqıw jılı ushın',
                'ru' => 'На текущий учебный год',
                'en' => 'For the current academic year',
            ]
        ]);
        Observance::create([
            'code' => 'certificate_expire',
            'name' => [
                'uz' => 'Sertifikat muddati tugagunga qadar',
                'kaa' => 'Sertifikat múddeti tamamlanǵansha',
                'ru' => 'До истечения срока действия сертификата',
                'en' => 'Until the certificate expires',
            ]
        ]);
        Observance::create([
            'code' => 'last3years',
            'name' => [
                'uz' => 'Oxirgi 3 yilda',
                'kaa' => 'Sońǵı 3 jılda',
                'ru' => 'За последние 3 года',
                'en' => 'Last 3 years',
            ]
        ]);
        Observance::create([
            'code' => 'project_finished',
            'name' => [
                'uz' => 'Loyiha tugagunga qadar',
                'kaa' => 'Joybar juwmaqlanǵansha',
                'ru' => 'До завершения проекта',
                'en' => 'Until project completion',
            ]
        ]);
        Observance::create([
            'code' => 'end_of_council',
            'name' => [
                'uz' => 'Kengashda faoliyati tugagunga qadar',
                'kaa' => 'Keńestegi xızmeti juwmaqlanǵansha',
                'ru' => 'До окончания срока деятельности в Совете',
                'en' => 'Until the end of their term of office in the Council',
            ]
        ]);


        Option::create([
            'key' => 'title',
            'value' => 'KarSU KPI',
        ]);

        Formula::create([
            'name' => [
                'uz' => 'Raqobat reyting tizimida',
                'kaa' => 'Báseki reyting sistemasında',
                'ru' => 'В рейтинговой системе конкуренции',
                'en' => 'Competition in the rating system',
            ]
        ]);
        Formula::create([
            'name' => [
                'uz' => 'Maksimal ballga asoslangan',
                'kaa' => 'Maksimal ballǵa tiykarlanǵan',
                'ru' => 'На основе максимального балла',
                'en' => 'Based on maximum score',
            ]
        ]);
        Formula::create([
            'name' => [
                'uz' => 'Cheklanmagan ball asosida',
                'kaa' => 'Sheklenbegen ball tiykarında',
                'ru' => 'На основе неограниченных баллов',
                'en' => 'Unlimited points',
            ]
        ]);
    }
}
