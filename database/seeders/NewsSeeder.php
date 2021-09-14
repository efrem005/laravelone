<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert(
            [
                [
                    'author' => 'ТАСС',
                    'category_id' => 1,
                    'created_at' => now(),
                    'description' => 'Издание Guineematin опубликовало фотографию из соцсетей, на которой человек, похожий на Альфу Конде, сидит в машине в окружении вооруженных людей в военной форме',
                    'title' => 'Guinee News: военные мятежники задержали президента Гвинеи Альфу Конде',
                    'updated_at' => now()
                ],
                [
                    'author' => 'ТАСС',
                    'category_id' => 1,
                    'created_at' => now(),
                    'description' => 'Вопрос принадлежности Крыма не может обсуждаться на встрече президентов Владимира Путина и Владимира Зеленского, заявил пресс-секретарь президента российского лидера Дмитрий Песков',
                    'title' => 'Песков: вопрос принадлежности Крыма не может быть темой переговоров Путина и Зеленского',
                    'updated_at' => now()
                ],
                [
                    'author' => 'ТАСС',
                    'category_id' => 1,
                    'created_at' => now(),
                    'description' => 'Глава Минздрава Михаил Мурашко призвал страны G20 к взаимному признанию фактов вакцинации против коронавируса официально одобренными препаратами, сообщили в пресс-службе ведомства.',
                    'title' => 'Минздрав России предложил G20 взаимное признание фактов вакцинации от коронавируса',
                    'updated_at' => now()
                ],
                [
                    'author' => 'РИА Новости',
                    'category_id' => 2,
                    'created_at' => now(),
                    'description' => 'Специалисты на барже "Фортуна" сварили последнюю трубу второй нитки газопровода "Северный поток — 2", сообщила компания-оператор проекта Nord Stream 2 AG.',
                    'title' => 'Nord Stream 2 сообщила об укладке последней трубы газопровода «Северный поток — 2»',
                    'updated_at' => now()
                ],
                [
                    'author' => 'Комсомольская правда',
                    'category_id' => 2,
                    'created_at' => now(),
                    'description' => 'Вице-премьер России Татьяна Голикова сообщила, что 39 миллионов россиян уже привились двумя компонентами вакцин от коронавирусной инфекции.',
                    'title' => 'Голикова сообщила, что полный курс вакцинации от коронавируса прошли 39 млн россиян',
                    'updated_at' => now()
                ],
                [
                    'author' => 'Московский Комсомолец',
                    'category_id' => 2,
                    'description' => 'Под Канском есть потенциал для создания углехимического производства востребованных пластиков из неликвидного сырья, а в районе Лесосибирска предполагается создание кластера «Лес и строительные материалы».',
                    'created_at' => now(),
                    'title' => 'Сергей Шойгу: новые города в Сибири помогут раскрыть экономический потенциал региона',
                    'updated_at' => now()
                ],
                [
                    'author' => 'Smotrim.ru',
                    'category_id' => 3,
                    'created_at' => now(),
                    'description' => 'Стоимость газа в Европе в понедельник достигла нового рекорда – 53,68 доллара за МВт ч, или 654,1 доллара за 1 тысячу кубометров, согласно данным лондонской биржи ICE.',
                    'title' => 'Цена на газ в Европе выросла выше $650 за тысячу кубометров',
                    'updated_at' => now()
                ],
                [
                    'author' => 'Finam.Ru',
                    'category_id' => 3,
                    'created_at' => now(),
                    'description' => 'Ситуация в Гвинее несет существенные риски для российской и глобальной алюминиевой отрасли, заявил РИА Новости представитель Алюминиевой ассоциации РФ.',
                    'title' => 'Источники предупредили о рисках для производства «Русала» из-за кризиса в Гвинее',
                    'updated_at' => now()
                ],
                [
                    'author' => 'ТВ Центр',
                    'category_id' => 3,
                    'created_at' => now(),
                    'description' => 'Средняя стоимость дома в продаже в целом по России составляет в конце августа 7,08 млн рублей против 6,71 млн в начале лета (+5%) и 5,99 млн рублей год назад (+18%)", - отмечают эксперты.',
                    'title' => 'Загородная недвижимость в России за год подорожала в среднем на 18%',
                    'updated_at' => now()
                ],
                [
                    'author' => 'Lenta.ru',
                    'category_id' => 4,
                    'created_at' => now(),
                    'description' => 'Соответствующий плейлист приурочен к выходу спецпроекта «История русской поп-музыки».',
                    'title' => '«Лента.ру» совместно с сервисом СберЗвук назвала главные музыкальные хиты 2005 года',
                    'updated_at' => now()
                ],
                [
                    'author' => '46ТВ',
                    'category_id' => 4,
                    'created_at' => now(),
                    'description' => 'Игорь Угольников встретится с губернатором Курской области Романом Старовойтом, чтобы обсудить планы съемок, - рассказывают в курском Доме Советов.',
                    'title' => 'В Курск 7 сентября приедет заслуженный артист России Игорь Угольников',
                    'updated_at' => now()
                ],
                [
                    'author' => 'Кинобизнес сегодня',
                    'category_id' => 4,
                    'created_at' => now(),
                    'description' => 'Теперь в активе фильма с Райаном Рейнольдсом в главной роли $147,4 млн международных сборов и $239,2 млн общемировых.',
                    'title' => 'Боевик «Шан-Чи и легенда десяти колец» стал лидером российского проката',
                    'updated_at' => now()
                ],
                [
                    'author' => 'РИА Новости',
                    'category_id' => 5,
                    'created_at' => now(),
                    'description' => 'В WhatsApp рекомендуют владельцам старых смартфонов обновить устройство или сохранить историю чатов до отключения, чтобы сохранить личные данные пользователя.',
                    'title' => 'WhatsApp 1 ноября прекратит поддержку устройств с устаревшими версиями Android и iOS',
                    'updated_at' => now()
                ],
                [
                    'author' => 'Компания',
                    'category_id' => 5,
                    'created_at' => now(),
                    'description' => 'Непубличное акционерное общество «Оллмай.блог» подало на «Яндекс» в Арбитражный суд Москвы.',
                    'title' => 'AllMyBlog обвинил «Яндекс» в краже идеи при создании сервиса перевода видео',
                    'updated_at' => now()
                ],
                [
                    'author' => 'iXBT.com',
                    'category_id' => 5,
                    'created_at' => now(),
                    'description' => 'Лу Синчжи отмечает, что Apple обеспечивает более 20% доходов TSMC, однако прибыль составляет менее 20%, а валовая маржа продолжает опускаться ниже средней.',
                    'title' => 'TSMC подняла цены на изготовление чипов для Apple меньше, чем для других',
                    'updated_at' => now()
                ],
            ]
        );
    }
}
