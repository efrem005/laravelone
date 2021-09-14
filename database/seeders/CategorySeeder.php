<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            [
                'title' => 'Политика',
                'slag' => 'politics',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Общество',
                'slag' => 'society',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Экономика',
                'slag' => 'economy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Культура',
                'slag' => 'culture',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Технологии',
                'slag' => 'technologies',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Наука',
                'slag' => 'science',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

}
