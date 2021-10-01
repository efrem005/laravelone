@extends('layouts.admin')

@section('title')
    @parent ADMIN | Список Новостей
@endsection

@section('start_page')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Список новостей</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.') }}">admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">news</li>
                </ol>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <div class="d-none d-md-block">
                    <div class="dropdown">
                        @if(Auth::user()->is_admin == 2)
                        <a class="btn btn-primary  dropdown-toggle" href="{{route('admin.parser')}}">
                            <i class="mdi mdi-update me-2"></i> обновить
                        </a>
                        @endif
                        <a class="btn btn-primary  dropdown-toggle" href="{{route('admin.news.create')}}">
                            <i class="mdi mdi-message me-2"></i> добавить
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
            <div class="col-12">
                @include('inc.messages')
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr style="cursor: pointer;">
                                    <th style="width: 3%">ID</th>
                                    <th>категория</th>
                                    <th>название</th>
                                    <th>автор</th>
                                    <th style="width: 13%">дата доб.</th>
                                    <th class="text-center" colspan="2">ред.</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $new)
                                <tr data-id="{{$new->id}}" style="cursor: pointer;">
                                    <td data-field="id" style="width: 80px">{{$new->id}}</td>
                                    <td data-field="name">{{ optional($new->category)->title}}</td>
                                    <td data-field="age">{{ $new->title }}</td>
                                    <td data-field="gender">{{$new->author}}</td>
                                    <td data-field="gender">{{$new->created_at}}</td>
                                    <td class="text-center p-1" style="width: 30px; vertical-align: middle">
                                        <a class="btn btn-success btn-sm edit" href="{{ route("admin.news.edit", ['news' => $new]) }}" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                    <td class="text-center p-1" style="width: 30px; vertical-align: middle">
                                        <button type="button" class="btn btn-danger btn-sm edit" data-bs-toggle="modal" data-bs-target="#myModal{{$new->id}}">
                                            <i class="fas fa-shopping-basket"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
            {!! $news->links('inc.paginator') !!}
        </div>



    @foreach($news as $new)
    <div id="myModal{{$new->id}}" class="modal fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Удалить новость</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="font-size-16">{{$new->title}}</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">отмена</button>
                    <form method="post" action="{{ route("admin.news.destroy", ['news' => $new]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger waves-effect waves-light" title="delete">
                            удалить
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection

