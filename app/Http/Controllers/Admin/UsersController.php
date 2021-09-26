<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\UsersUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
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
        return view('admin.users.index')
            ->with('users', User::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $user)
    {
        return view('admin.users.edit')
            ->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $request, User $user)
    {
        if (\Auth::id() == $user->id){
            if (\Auth::user()->is_admin != $request->input('is_admin')){
                return back()
                    ->with('error', 'Вы не можите изменить права доступа')
                    ->withInput();
            }
        }

        $user->fill($request->validated())->save();

        if ($user->save()) {
            return redirect()
                ->route('admin.users.index')
                ->with('success', __('messages.admin.users.update.success'));
        }

        return back()
            ->with('error', __('messages.admin.users.update.fail'))
            ->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (\Auth::user()->email == $user->email) {
            return back()
                ->with('error', 'Вы не можите удалить аккаут в котором вы находитесь!!!')
                ->withInput();
        }

        $users = $user->delete();

        if ($users) {
            return redirect()
                ->route('admin.users.index')
                ->with('success', __('messages.admin.users.delete.success'));
        }

        return back()
            ->with('error', __('messages.admin.users.delete.fail'))
            ->withInput();
    }
}
