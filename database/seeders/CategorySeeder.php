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
                'title' => 'Короновирус',
                'slag' => 'koronavirus',
                'created_at' => now(),
                'updated_at' => now()
            ],
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
                'slag' => 'business',
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
                'slag' => 'computers',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Наука',
                'slag' => 'science',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Спорт',
                'slag' => 'sport',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'В мире',
                'slag' => 'world',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Происшествия',
                'slag' => 'incident',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Авто',
                'slag' => 'auto',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

}
