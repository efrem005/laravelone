<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\NewsCreateRequest;
use App\Http\Requests\Admin\News\NewsUpdateRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminAccess')->only(['edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index')
            ->with('news', News::with('category')->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create')
            ->with('category', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsCreateRequest $request, News $news)
    {
        $news->fill($request->validated())->save();

        if ($news->save()) {
            return redirect()
                ->route('admin.news.index')
                ->with('success', __('messages.admin.news.create.success'));
        }

        return back()
            ->with('error', __('messages.admin.news.create.fail'))
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
            ->with('new', $news)
            ->with('category', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdateRequest $request, News $news)
    {
        $news->fill($request->validated())->save();


        if ($news->save()) {
            return redirect()
                ->route('admin.news.index')
                ->with('success', __('messages.admin.news.update.success'));
        }

        return back()
            ->with('error', __('messages.admin.news.update.fail'))
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
                ->with('success', __('messages.admin.news.delete.success'));
        }

        return back()
            ->with('error', __('messages.admin.news.delete.fail'))
            ->withInput();
    }
}
