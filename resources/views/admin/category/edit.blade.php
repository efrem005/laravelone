@extends('layouts.admin')

@section('title')
    @parent ADMIN | Редактировать категорию
@endsection

@section('start_page')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Редактировать категорию</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.') }}">admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">edit</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row justify-content-md-center py-5">
        @include('inc.messages')
        <form method="post" action="{{route('admin.category.update', ['category' => $category])}}" class="col-8">
            @csrf
            @method('put')

            <div class="form-floating mb-3">
                <input type="text" name="title" value="{{ $category->title }}" class="form-control @error('title') is-invalid @enderror" placeholder="Название категории" id="exampleInputText">
                <label for="exampleInputText">Название категории</label>
            </div>
            @error('title')
            <div class="alert alert-danger col-8">{{ $message }}</div>
            @enderror

            <div class="form-floating mb-3">
                <input type="text" name="slag" value="{{ $category->slag }}" class="form-control @error('slag') is-invalid @enderror" placeholder="имя URL" id="exampleInputUrl">
                <label for="exampleInputUrl">имя URL</label>
            </div>
            @error('slag')
            <div class="alert alert-danger col-8">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">обновить</button>
        </form>
    </div>
@endsection


