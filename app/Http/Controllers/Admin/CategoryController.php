<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryCreateRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        return view('admin.category.index')
            ->with('category', Category::withCount('news')->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request, Category $category)
    {
        $category->fill($request->validated())->save();

        if ($category->save()) {
            return redirect()
                ->route('admin.category.index')
                ->with('success', __('messages.admin.category.create.success'));
        }

        return back()
            ->with('error', __('messages.admin.category.create.fail'))
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
            ->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->fill($request->validated())->save();

        if ($category->save()) {
            return redirect()
                ->route('admin.category.index')
                ->with('success', __('messages.admin.category.update.success'));
        }

        return back()
            ->with('error', __('messages.admin.category.update.fail'))
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
                ->with('success', __('messages.admin.category.delete.success'));
        }

        return back()
            ->with('error', __('messages.admin.category.delete.fail'))
            ->withInput();
    }
}
