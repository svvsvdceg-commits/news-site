<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (News::count() > 0) {
            return;
        }

        News::create([
            'title' => 'Искусственный интеллект помогает учиться',
            'content' => 'Студенты используют искусственный интеллект для поиска информации и изучения новых тем.',
        ]);

        News::create([
            'title' => 'В колледже прошли спортивные соревнования',
            'content' => 'Студенты разных групп приняли участие в соревнованиях по волейболу.',
        ]);

        News::create([
            'title' => 'Искусственный интеллект в медицине',
            'content' => 'Новые программы помогают врачам анализировать снимки и находить признаки заболеваний.',
        ]);
    }
}
