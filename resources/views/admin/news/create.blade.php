@extends('layouts.admin')

@section('title')
    @parent Добавить новость
@endsection

@section('content')
    <div class="row justify-content-md-center">
        <form class="col-8">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">категория</label>
                <select name="category" class="form-select" id="exampleInputEmail1">
                    <option selected>выбирете категорию....</option>
                    @foreach ($category as $item)
                        <option value="{{$item['id']}}">{{$item['title']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">название</label>
                <input type="text" name="title" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">текс</label>
                <textarea name="text" class="form-control" id="exampleInputPassword1"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">автор</label>
                <input type="text" name="author" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">добавить</button>
        </form>
    </div>
@endsection


