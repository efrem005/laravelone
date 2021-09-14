@extends('layouts.admin')

@section('title')
    @parent ADMIN | Список категорий
@endsection

@section('start_page')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Список категорий</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.') }}">admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">category</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a class="btn btn-primary  dropdown-toggle" href="{{route('admin.category.create')}}">
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
                                <th>ID</th>
                                <th>название</th>
                                <th>slag</th>
                                <th class="text-center">доп.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $key => $value)
                                <tr data-id="{{$key}}" style="cursor: pointer;">
                                    <td data-field="id" style="width: 80px">{{$value->id}}</td>
                                    <td data-field="title">{{$value->title}}</td>
                                    <td data-field="header">{{$value->slag}}</td>
                                    <td class="text-center" style="width: 100px">
                                        <a class="btn btn-secondary btn-sm edit" href="{{route('admin.category.edit', ['category' => $value->id])}}" title="Edit">
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


