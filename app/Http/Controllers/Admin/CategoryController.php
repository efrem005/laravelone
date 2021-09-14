<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
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

        return view('admin.category.index')
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

        return view('admin.category.create')
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
            'title' => ['required', 'string', 'min:3'],
            'slag' => ['required', 'string', 'min:3']
        ],[],
            [
                'title' => 'Название категории',
                'slag' => 'имя URL'
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

        return view('admin.category.edit')
            ->with('category', $category->getCategoryOne($id))
            ->with('newsCount', $news->countNews())
            ->with('categoryCount', $category->countCategory());
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
