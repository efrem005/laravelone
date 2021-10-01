@extends('layouts.admin')

@section('title')
    @parent ADMIN | Диспетчер файлов
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-12 mt-3">
            <iframe src="/laravel-filemanager" style="width: 100%; height: 80vh; overflow: hidden; border: none;"></iframe>
        </div> <!-- end col -->
    </div>
@endsection
