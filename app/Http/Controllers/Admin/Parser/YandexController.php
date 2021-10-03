<?php

namespace App\Http\Controllers\Admin\Parser;

use App\Contract\Parser;
use App\Http\Controllers\Controller;
use App\Jobs\NewsYandexJob;
use App\Models\Category;
use Illuminate\Http\Request;

class YandexController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminAccess');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Parser $service)
    {
        foreach (Category::all() as $category) {
            $data['url'] = "https://news.yandex.ru/$category->slag.rss";
            $data['category_id'] = $category->id;
            dispatch(new NewsYandexJob($data));
        }

        return redirect()
            ->route('admin.news.index')
            ->with('success', "Новости ЯНДЕКС добавленны в очередь");
    }
}
