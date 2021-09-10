@extends('layouts.main')

@section('title')
    @parent Авторизация
@endsection

@section('content')
    <div class="row justify-content-center">
        <form method="get" action="{{route('admin')}}" class="col-6">
            <div class="mb-3">
                <label for="exampleInputLogin" class="form-label">Логин</label>
                <input type="text" class="form-control" id="exampleInputLogin" name="login">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword" name="pass">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck">
                <label class="form-check-label" for="exampleCheck">запомнить</label>
            </div>
            <button type="submit" class="btn btn-primary">войти</button>
        </form>
    </div>
@endsection
