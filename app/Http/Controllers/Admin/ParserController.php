<?php

namespace App\Http\Controllers\Admin;

use App\Contract\Parser;
use App\Http\Controllers\Controller;
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
        $count = 0;

        foreach (Category::all() as $category) {

            $data = $service->parse("https://news.yandex.ru/$category->slag.rss");

            foreach ($data['news'] as $new) {

                if (!News::where('title', $new['title'])->first()) {

                    $news = new News();

                    $news->fill([
                        'title' => $new['title'],
                        'guid' => $new['guid'],
                        'description' => $new['description'],
                        'category_id' => $category['id'],
                        'author' => $data['title'],
                        'created_at' => now()
                    ]);
                    $news->save();
                    $count++;
                }
            }
        }
        return redirect()
        ->route('admin.news.index')
        ->with('success', "Добавленно $count новостей");
    }
}
