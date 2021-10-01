<?php

namespace App\Http\Controllers\Admin;

use App\Contract\Parser;
use App\Http\Controllers\Controller;
use App\Jobs\NewsJob;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class ParserController extends Controller
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
            dispatch(new NewsJob($data));
        }

        return redirect()
            ->route('admin.news.index')
            ->with('success', "Добавленно в очередь");
    }
}
