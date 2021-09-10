@extends('layouts.admin')

@section('title')
    @parent Добавить категорию
@endsection

@section('content')
    <div class="row justify-content-md-center">
        <form class="col-8">
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">название</label>
                <input type="text" class="form-control" id="exampleInputText">
            </div>
            <div class="mb-3">
                <label for="exampleInputUrl" class="form-label">имя URL</label>
                <input class="form-control" id="exampleInputUrl">
            </div>
            <button type="submit" class="btn btn-primary">добавить</button>
        </form>
    </div>
@endsection


