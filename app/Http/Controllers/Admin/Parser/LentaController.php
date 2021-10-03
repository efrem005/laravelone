<?php

namespace App\Http\Controllers\Admin\Parser;

use App\Contract\Parser;
use App\Http\Controllers\Controller;
use App\Jobs\NewsLentaJod;
use App\Models\Category;
use Illuminate\Http\Request;

class LentaController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminAccess');
    }

    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Parser $service)
    {
        // articles
        // news
        $categories = Category::all();
        foreach (['articles', 'news'] as $id) {
            foreach ($categories as $category) {
                $data['url'] = "https://lenta.ru/rss/$id/$category->slag";
                $data['category_id'] = $category->id;
                dispatch(new NewsLentaJod($data));
            }
        }

        return redirect()
            ->route('admin.news.index')
            ->with('success', "Новости с LENTA.RU добавленны в очередь");
    }
}
