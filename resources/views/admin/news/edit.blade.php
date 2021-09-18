@extends('layouts.admin')

@section('title')
    @parent ADMIN | Редактировать новость
@endsection

@section('start_page')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Редактировать новость</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.') }}">admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">news</a></li>
                    <li class="breadcrumb-item active" aria-current="page">edit</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row justify-content-md-center py-5">
        @include('inc.messages')
        <form method="post" action="{{route('admin.news.update', ['news' => $new])}}" class="col-8">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">категория</label>
                <select name="category_id" class="form-select" id="exampleInputEmail1">
                    @foreach ($category as $item)
                        <option @if($item->id == $new->category_id) selected @endif value="{!! $item->id !!}">{{$item->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Название новости</label>
                <input type="text" name="title" value="{{ $new->title }}" class="form-control" id="exampleInputPassword1">
            </div>
            @if($errors->has('title'))
                @foreach($errors->get('title') as $error)
                    <div class="alert alert-danger col-8">{{ $error }}</div>
                @endforeach
            @endif
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Текст новости</label>
                <textarea name="description" class="form-control" id="exampleInputPassword1">{{ $new->description }}</textarea>
            </div>
            @if($errors->has('description'))
                @foreach($errors->get('description') as $error)
                    <div class="alert alert-danger col-8">{{ $error }}</div>
                @endforeach
            @endif
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Автор</label>
                <input type="text" name="author" value="{{ $new->author }}" class="form-control" id="exampleInputPassword1">
            </div>
            @if($errors->has('author'))
                @foreach($errors->get('author') as $error)
                    <div class="alert alert-danger col-8">{{ $error }}</div>
                @endforeach
            @endif
            <button type="submit" class="btn btn-primary">обновить</button>
        </form>
    </div>
@endsection
