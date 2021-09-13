<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            ->with('news', $this->getNews())
            ->with('category', $this->getCategory())
            ->with('newsCount', $this->countNews())
            ->with('categoryCount', $this->countCategory());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create')
            ->with('category', $this->getCategory())
            ->with('newsCount', $this->countNews())
            ->with('categoryCount', $this->countCategory());
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
    public function edit($id)
    {
        return view('admin.news.edit')
            ->with('news', $this->getNews())
            ->with('category', $this->getCategory())
            ->with('newsCount', $this->countNews())
            ->with('categoryCount', $this->countCategory())
            ->with('new', $this->getNewOne($id));
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
