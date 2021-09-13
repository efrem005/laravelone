@extends('layouts.admin')

@section('title')
    @parent ADMIN | Создать категорию
@endsection

@section('start_page')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Создать категорию</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.') }}">admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">create</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row justify-content-md-center py-5">
        <form method="post" action="{{route('admin.category.store')}}" class="col-8">
            @csrf
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Название категории</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="exampleInputText">
            </div>
            @if($errors->has('title'))
                @foreach($errors->get('title') as $error)
                    <div class="alert alert-danger col-8">{{ $error }}</div>
                @endforeach
            @endif
            <div class="mb-3">
                <label for="exampleInputUrl" class="form-label">имя URL</label>
                <input name="slag" value="{{ old('slag') }}" class="form-control" id="exampleInputUrl">
            </div>
            @if($errors->has('slag'))
                @foreach($errors->get('slag') as $error)
                    <div class="alert alert-danger col-8">{{ $error }}</div>
                @endforeach
            @endif
            <button type="submit" class="btn btn-primary">добавить</button>
        </form>
    </div>
@endsection


