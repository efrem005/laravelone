<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getNews(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Guinee News: военные мятежники задержали президента Гвинеи Альфу Конде',
                'description' => 'Издание Guineematin опубликовало фотографию из соцсетей, на которой человек, похожий на Альфу Конде, сидит в машине в окружении вооруженных людей в военной форме',
                'author' => 'ТАСС',
                'category_id' => 1,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Песков: вопрос принадлежности Крыма не может быть темой переговоров Путина и Зеленского',
                'description' => 'Вопрос принадлежности Крыма не может обсуждаться на встрече президентов Владимира Путина и Владимира Зеленского, заявил пресс-секретарь президента российского лидера Дмитрий Песков',
                'author' => 'ТАСС',
                'category_id' => 1,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Минздрав России предложил G20 взаимное признание фактов вакцинации от коронавируса',
                'description' => 'Глава Минздрава Михаил Мурашко призвал страны G20 к взаимному признанию фактов вакцинации против коронавируса официально одобренными препаратами, сообщили в пресс-службе ведомства.',
                'author' => 'ТАСС',
                'category_id' => 1,
                'created_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Nord Stream 2 сообщила об укладке последней трубы газопровода «Северный поток — 2»',
                'description' => 'Специалисты на барже "Фортуна" сварили последнюю трубу второй нитки газопровода "Северный поток — 2", сообщила компания-оператор проекта Nord Stream 2 AG.',
                'author' => 'РИА Новости',
                'category_id' => 2,
                'created_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'Голикова сообщила, что полный курс вакцинации от коронавируса прошли 39 млн россиян',
                'description' => 'Вице-премьер России Татьяна Голикова сообщила, что 39 миллионов россиян уже привились двумя компонентами вакцин от коронавирусной инфекции.',
                'author' => 'Комсомольская правда',
                'category_id' => 2,
                'created_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'Сергей Шойгу: новые города в Сибири помогут раскрыть экономический потенциал региона',
                'description' => 'Под Канском есть потенциал для создания углехимического производства востребованных пластиков из неликвидного сырья, а в районе Лесосибирска предполагается создание кластера «Лес и строительные материалы».',
                'author' => 'Московский Комсомолец',
                'category_id' => 2,
                'created_at' => now()
            ],
            [
                'id' => 7,
                'title' => 'Цена на газ в Европе выросла выше $650 за тысячу кубометров',
                'description' => 'Стоимость газа в Европе в понедельник достигла нового рекорда – 53,68 доллара за МВт ч, или 654,1 доллара за 1 тысячу кубометров, согласно данным лондонской биржи ICE.',
                'author' => 'Smotrim.ru',
                'category_id' => 3,
                'created_at' => now()
            ],
            [
                'id' => 8,
                'title' => 'Источники предупредили о рисках для производства «Русала» из-за кризиса в Гвинее',
                'description' => 'Ситуация в Гвинее несет существенные риски для российской и глобальной алюминиевой отрасли, заявил РИА Новости представитель Алюминиевой ассоциации РФ.',
                'author' => 'Finam.Ru',
                'category_id' => 3,
                'created_at' => now()
            ],
            [
                'id' => 9,
                'title' => 'Загородная недвижимость в России за год подорожала в среднем на 18%',
                'description' => 'Средняя стоимость дома в продаже в целом по России составляет в конце августа 7,08 млн рублей против 6,71 млн в начале лета (+5%) и 5,99 млн рублей год назад (+18%)", - отмечают эксперты.',
                'author' => 'ТВ Центр',
                'category_id' => 3,
                'created_at' => now()
            ],
            [
                'id' => 10,
                'title' => '«Лента.ру» совместно с сервисом СберЗвук назвала главные музыкальные хиты 2005 года',
                'description' => 'Соответствующий плейлист приурочен к выходу спецпроекта «История русской поп-музыки».',
                'author' => 'Lenta.ru',
                'category_id' => 4,
                'created_at' => now()
            ],
            [
                'id' => 11,
                'title' => 'В Курск 7 сентября приедет заслуженный артист России Игорь Угольников',
                'description' => 'Игорь Угольников встретится с губернатором Курской области Романом Старовойтом, чтобы обсудить планы съемок, - рассказывают в курском Доме Советов.',
                'author' => '46ТВ',
                'category_id' => 4,
                'created_at' => now()
            ],
            [
                'id' => 12,
                'title' => 'Боевик «Шан-Чи и легенда десяти колец» стал лидером российского проката',
                'description' => 'Теперь в активе фильма с Райаном Рейнольдсом в главной роли $147,4 млн международных сборов и $239,2 млн общемировых.',
                'author' => 'Кинобизнес сегодня',
                'category_id' => 4,
                'created_at' => now()
            ],
            [
                'id' => 13,
                'title' => 'WhatsApp 1 ноября прекратит поддержку устройств с устаревшими версиями Android и iOS',
                'description' => 'В WhatsApp рекомендуют владельцам старых смартфонов обновить устройство или сохранить историю чатов до отключения, чтобы сохранить личные данные пользователя.',
                'author' => 'РИА Новости',
                'category_id' => 5,
                'created_at' => now()
            ],
            [
                'id' => 14,
                'title' => 'AllMyBlog обвинил «Яндекс» в краже идеи при создании сервиса перевода видео',
                'description' => 'Непубличное акционерное общество «Оллмай.блог» подало на «Яндекс» в Арбитражный суд Москвы.',
                'author' => 'Компания',
                'category_id' => 5,
                'created_at' => now()
            ],
            [
                'id' => 15,
                'title' => 'TSMC подняла цены на изготовление чипов для Apple меньше, чем для других',
                'description' => 'Лу Синчжи отмечает, что Apple обеспечивает более 20% доходов TSMC, однако прибыль составляет менее 20%, а валовая маржа продолжает опускаться ниже средней.',
                'author' => 'iXBT.com',
                'category_id' => 5,
                'created_at' => now()
            ],
        ];
    }

    protected function getCategory(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Политика',
                'slag' => 'politics'
            ],
            [
                'id' => 2,
                'title' => 'Общество',
                'slag' => 'society'
            ],
            [
                'id' => 3,
                'title' => 'Экономика',
                'slag' => 'economy'
            ],
            [
                'id' => 4,
                'title' => 'Культура',
                'slag' => 'culture'
            ],
            [
                'id' => 5,
                'title' => 'Технологии',
                'slag' => 'technologies'
            ],
            [
                'id' => 6,
                'title' => 'Наука',
                'slag' => 'science'
            ]
        ];
    }

    protected function getNewOne(int $id)
    {
        foreach (static::getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
    }

    protected function getCategoryOne(int $id)
    {
        foreach (static::getCategory() as $category) {
            if ($category['id'] == $id) {
                return $category;
            }
        }
    }

    protected function getCategorySearch(string $item)
    {
        $data = [];
        foreach (static::getCategory() as $category){
            if ($category['slag'] == $item){
                foreach (static::getNews() as $news) {
                    if ($news['category_id'] == $category['id']) {
                        array_push($data, $news);
                    }
                }
            }
        }
        return $data;
    }

    protected function countNews()
    {
        return count(static::getNews());
    }

    protected function countCategory()
    {
        return count(static::getCategory());
    }
}
