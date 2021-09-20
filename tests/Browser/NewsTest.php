<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;


class NewsTest extends DuskTestCase
{
    use RefreshDatabase;

    public function testCreate_one()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->select('category_id', 1)
                ->type('title', 'Цена газа в Европе превысила $950 за 1 тыс. кубометров')
                ->type('description', 'В 11:51 мск стоимость октябрьских фьючерсов на хабе TTF в Нидерландах достигла €79 за МВт•ч. Рекордные цены на газ в Европе уже заставляют власти некоторых стран ЕС принимать чрезвычайные меры по ограничению тарифов на газ и электроэнергию.')
                ->type('author', 'В источнике')
                ->screenshot('news_create_one')
                ->press('добавить')
                ->assertPathIs('/admin/news')
                ->assertSee('Запись прошла успешно');
        });
    }

    public function testCreate_two()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->select('category_id', 2)
                ->type('title', 'Замминистра энергетики Украины Зеркаль призвала к борьбе с «Северным потоком – 2»')
                ->type('description', 'Заместитель министра энергетики Украины Елена Зеркаль озвучила план «победы» над газопроводом «Северный поток – 2». Зеркаль отметила, что Украине нужно заняться перестройкой системы транспортировки газа.')
                ->type('author', 'Banki Loans')
                ->screenshot('news_create_two')
                ->press('добавить')
                ->assertPathIs('/admin/news')
                ->assertSee('Запись прошла успешно');
        });
    }

    public function testCreate_three()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->select('category_id', 2)
                ->type('title', 'Замминистра энергетики Украины Зеркаль призвала к борьбе с «Северным потоком – 2»')
                ->type('description', 'Заместитель министра энергетики Украины Елена Зеркаль озвучила план «победы» над газопроводом «Северный поток – 2». Зеркаль отметила, что Украине нужно заняться перестройкой системы транспортировки газа.')
                ->type('author', 'Banki Loans')
                ->screenshot('news_create_three')
                ->press('добавить')
                ->assertPathIs('/admin/news')
                ->assertSee('Запись прошла успешно')
                ->screenshot('news_index_create');
        });
    }

    public function testUpdate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/3/edit')
                ->select('category_id', 1)
                ->type('title', '«Газпром» отказался увеличивать транзит через Украину в октябре')
                ->type('description', '«Газпром» не стал бронировать объем дополнительных мощностей для транзита газа через Украину на октябрь, сообщает ТАСС со ссылкой на данные венгерской торговой платформы RBP.')
                ->type('author', 'В источнике')
                ->screenshot('news_update')
                ->press('обновить')
                ->assertPathIs('/admin/news')
                ->assertSee('Обновление прошло успешно')
                ->screenshot('news_index_update');
        });
    }
}
