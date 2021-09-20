@extends('layouts.admin')

@section('title')
    @parent ADMIN | Добавить новость
@endsection

@section('start_page')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Добавить новость</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.') }}">admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">news</a></li>
                    <li class="breadcrumb-item active" aria-current="page">create</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row justify-content-md-center py-5">
        <form method="post" action="{{route('admin.news.store')}}" class="col-8">
            @csrf
            <div class="form-floating mb-3">
                <select name="category_id" class="form-select" id="exampleInputEmail1">
                    @foreach ($category as $item)
                        <option @if($item->id == old('category_id')) selected @endif value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                </select>
                <label for="exampleInputEmail1" class="form-label">категория</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="Название новости" id="exampleInputPassword1">
                <label for="exampleInputPassword1">Название новости</label>
            </div>
            @error('title')
            <div class="alert alert-danger col-8">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <textarea style="height: 100px" placeholder="Текст новости" name="description" class="form-control @error('description') is-invalid @enderror" id="exampleInputPassword1">{{ old('description') }}</textarea>
                <label for="exampleInputPassword1">Текст новости</label>
            </div>
            @error('description')
            <div class="alert alert-danger col-8">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="text" name="author" value="{{ old('author') }}" placeholder="Автор" class="form-control @error('author') is-invalid @enderror" id="exampleInputPassword1">
                <label for="exampleInputPassword1" class="form-label">Автор</label>
            </div>
            @error('author')
            <div class="alert alert-danger col-8">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">добавить</button>
        </form>
    </div>
@endsection


