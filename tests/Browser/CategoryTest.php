<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoryTest extends DuskTestCase
{

    use RefreshDatabase;

    public function testCreate_one()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/create')
                ->type('title', 'политика')
                ->type('slag', 'politika')
                ->screenshot('category_one')
                ->press('добавить')
                ->assertPathIs('/admin/category')
                ->assertSee('Создание категории прошло успешно');
        });
    }

    public function testCreate_two()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/create')
                ->type('title', 'экономика')
                ->type('slag', 'economika')
                ->screenshot('category_two')
                ->press('добавить')
                ->assertPathIs('/admin/category')
                ->assertSee('Создание категории прошло успешно')
                ->screenshot('category_index');
        });
    }
}
