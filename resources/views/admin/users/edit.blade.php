@extends('layouts.admin')

@section('title')
    @parent ADMIN | Редактировать пользователя
@endsection

@section('start_page')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Редактировать права пользователя</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.') }}">admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">edit</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-12">
        @include('inc.messages')
        </div>
        <form class="col-4" method="post" action="{{route('admin.users.update', ['user' => $user])}}">
            @csrf
            @method('put')

            <div class="form-floating mb-3">
                <input type="text" name="name" value="{{ old('name') ?? $user->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="Имя" id="exampleInputName">
                <label for="exampleInputName">Имя</label>
            </div>
            @error('name')
            <div class="alert alert-danger col-8">{{ $message }}</div>
            @enderror

            <div class="form-floating mb-3">
                <input type="text" name="login" value="{{ old('login') ?? $user->login}}" class="form-control @error('login') is-invalid @enderror" placeholder="Логин" id="exampleInputLogin">
                <label for="exampleInputLogin">Логин</label>
            </div>
            @error('login')
            <div class="alert alert-danger col-8">{{ $message }}</div>
            @enderror

            <div class="form-floating mb-3">
                <input type="text" name="email" value="{{ old('email') ?? $user->email}}" class="form-control @error('email') is-invalid @enderror" placeholder="Элек.почта" id="exampleInputEmail">
                <label for="exampleInputEmail">Электронная почта</label>
            </div>
            @error('email')
            <div class="alert alert-danger col-8">{{ $message }}</div>
            @enderror

            <div class="form-floating mb-3">
                <select name="is_admin" class="form-select" id="exampleInputEmail1">
                    @foreach([0 => 'нет', 1 => 'Админ', 2 => 'Super.Админ'] as $key => $value )
                    <option @if(old('is_admin') == $key || $user->is_admin == $key) selected @endif value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <label for="exampleInputPassword1" class="form-label">Права администратора</label>
            </div>
            @error('is_admin')
            <div class="alert alert-danger col-8">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">обновить</button>
        </form>
    </div>
@endsection
