<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = new News();
        $category = new Category();

        return view('admin.news.index')
            ->with('news', $news->getNews())
            ->with('category', $category->getCategory())
            ->with('newsCount', $news->countNews())
            ->with('categoryCount', $category->countCategory());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = new News();
        $category = new Category();

        return view('admin.news.create')
            ->with('category', $category->getCategory())
            ->with('newsCount', $news->countNews())
            ->with('categoryCount', $category->countCategory());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return json_encode(['created' => 'запись прошла успешно']);
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
    public function edit(int $id)
    {
        $news = new News();
        $category = new Category();

        return view('admin.news.edit')
            ->with('news', $news->getNews())
            ->with('category', $category->getCategory())
            ->with('newsCount', $news->countNews())
            ->with('categoryCount', $category->countCategory())
            ->with('new', $news->getNewOne($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
