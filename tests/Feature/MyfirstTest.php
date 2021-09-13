<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyfirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_get_home_status()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_available_only_one_news()
    {
        $id = mt_rand(1, 15);
        $response = $this->get("/news/$id");

        $response->assertStatus(200);
    }

    public function test_available_only_one_category()
    {
        $response = $this->get("/category/economy");

        $response->assertStatus(200);
    }

    public function test_asserting_a_json_category()
    {
        $data = [
            'title' => 'Политика',
            'slag' => 'politics'
        ];

        $response = $this->json('POST', '/admin/category', $data);

        $response->assertStatus(200)
            ->assertExactJson([
                'created' => 'запись прошла успешно',
            ]);
    }

    public function test_asserting_a_json_news()
    {
        $data = [
            'title' => '«Лента.ру» совместно с сервисом СберЗвук назвала главные музыкальные хиты 2005 года',
            'description' => 'Соответствующий плейлист приурочен к выходу спецпроекта «История русской поп-музыки».',
            'author' => 'Lenta.ru',
        ];

        $response = $this->json('POST', '/admin/news', $data);

        $response->assertStatus(200)
            ->assertExactJson([
                'created' => 'запись прошла успешно',
            ]);
    }
}
