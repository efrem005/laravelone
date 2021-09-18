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
        return view('admin.category.index')
            ->with('category', Category::withCount('news')->paginate(10))
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
        return view('admin.category.create')
            ->with('newsCount', count(News::all()))
            ->with('categoryCount', count(Category::all()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3'],
            'slag' => ['required', 'string', 'min:3']
        ],[],
            [
                'title' => 'Название категории',
                'slag' => 'имя URL'
            ]);

        $category->fill(
            $request->only(['title', 'slag'])
        )->save();

        if ($category->save()) {
            return redirect()
                ->route('admin.category.index')
                ->with('success', 'Создание категории прошло успешно');
        }

        return back()
            ->with('error', 'При создание категории произошла ошибка')
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
    public function edit(Category $category)
    {
        return view('admin.category.edit')
            ->with('category', $category)
            ->with('newsCount', count(News::all()))
            ->with('categoryCount', count(Category::all()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3'],
            'slag' => ['required', 'string', 'min:3']
        ],[],
            [
                'title' => 'Название категории',
                'slag' => 'имя URL'
            ]);

        $category->fill(
            $request->only(['title', 'slag'])
        )->save();

        if ($category->save()) {
            return redirect()
                ->route('admin.category.index')
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
    public function destroy(Category $category)
    {
        $categorise = $category->delete();

        if ($categorise) {
            return redirect()
                ->route('admin.category.index')
                ->with('success', 'Удаление прошло успешно');
        }

        return back()
            ->with('error', 'При удаление произошла ошибка')
            ->withInput();
    }
}
