<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index')
            ->with('news', News::with('category')->paginate(10))
            ->with('category', Category::all())
            ->with('newsCount', count(News::all()))
            ->with('categoryCount', count(Category::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create')
            ->with('category', Category::all())
            ->with('newsCount', count(News::all()))
            ->with('categoryCount', count(Category::all()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, News $news)
    {
        $request->validate([
            'category_id' => ['required', 'int'],
            'title' => ['required', 'string', 'min:5'],
            'description' => ['required', 'string', 'min:50'],
            'author' => ['required', 'string', 'min:2']
        ],[],
            [
                'category_id' => 'Название категории',
                'title' => 'Название новости',
                'description' => 'Текст новости',
                'author' => 'Автор'
            ]);

        $news->fill(
            $request->only('category_id', 'title', 'author', 'description')
        )->save();

        if ($news->save()) {
            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Запись прошла успешно');
        }

        return back()
            ->with('error', 'При записи произошла ошибка')
            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit')
            ->with('news', News::all())
            ->with('category', Category::all())
            ->with('newsCount', count(News::all()))
            ->with('categoryCount', count(Category::all()))
            ->with('new', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:5'],
            'description' => ['required', 'string', 'min:50'],
            'author' => ['required', 'string', 'min:2']
        ],[],
            [
                'title' => 'Название новости',
                'description' => 'Текст новости',
                'author' => 'Автор'
            ]);

        $news->fill(
          $request->only('category_id', 'title', 'author', 'description')
        )->save();

        if ($news->save()) {
            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Обновление прошло успешно');
        }

        return back()
            ->with('error', 'При обновление произошла ошибка')
            ->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $new = $news->delete();

        if ($new) {
            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Удаление прошло успешно');
        }

        return back()
            ->with('error', 'При удаление произошла ошибка')
            ->withInput();
    }
}
