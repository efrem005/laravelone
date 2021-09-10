@extends('layouts.admin')

@section('title')
    @parent Новости
@endsection

@section('start_page')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a class="btn btn-primary  dropdown-toggle" href="{{route('admin.news.create')}}">
                            <i class="mdi mdi-cog me-2"></i> добавить
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
            <div class="col-12">
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
                                    <th class="text-center">ред.</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $key => $value)
                                <tr data-id="{{$key}}" style="cursor: pointer;">
                                    <td data-field="id" style="width: 80px">{{$value['id']}}</td>
                                    @foreach($category as $item)
                                        @if($item['id'] == $value['category_id'])
                                            <td data-field="name">{{$item['title']}}</td>
                                        @endif
                                    @endforeach
                                    <td data-field="age">{{ $value['title'] . "...." }}</td>
                                    <td data-field="gender">{{$value['author']}}</td>
                                    <td data-field="gender">{{$value['created_at']}}</td>
                                    <td class="text-center" style="width: 100px">
                                        <a class="btn btn-success btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm edit" title="delete">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
@endsection

