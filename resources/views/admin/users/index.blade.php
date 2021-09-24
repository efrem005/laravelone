@extends('layouts.admin')

@section('title')
    @parent ADMIN | Список пользователей
@endsection

@section('start_page')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Список пользователей</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.') }}">admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">users</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a class="btn btn-primary  dropdown-toggle" href="{{route('admin.users.create')}}">
                            <i class="mdi mdi-cog me-2"></i> добавить
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
                                <tr class="text-center" style="cursor: pointer;">
                                    <th style="width: 3%">ID</th>
                                    <th>Имя</th>
                                    <th>Логин</th>
                                    <th>eMail</th>
                                    <th>Проверка</th>
                                    <th>Админ</th>
                                    <th>Super.Админ</th>
                                    <th style="width: 13%">дата доб.</th>
                                    <th class="text-center" colspan="2">ред.</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr class="text-center" data-id="{{$user->id}}" style="cursor: pointer;">
                                    <td data-field="id" style="width: 80px">{{$user->id}}</td>
                                    <td data-field="name">{{ $user->name}}</td>
                                    <td data-field="age">{{ $user->login }}</td>
                                    <td data-field="gender">{{$user->email}}</td>
                                    <td data-field="gender">@if($user->email_verified_at) Прошел @else Нет @endif</td>
                                    <td data-field="gender">@if($user->is_admin) Да @else Нет @endif</td>
                                    <td data-field="gender">@if($user->is_admin == 2) Да @else Нет @endif</td>
                                    <td data-field="gender">{{$user->created_at}}</td>
                                    <td class="text-center p-1" style="width: 30px; vertical-align: middle">
                                        <a class="btn btn-success btn-sm edit" href="{{route("admin.users.edit", ['user' => $user])}}" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                    <td class="text-center p-1" style="width: 30px; vertical-align: middle">
                                        <form method="post" action="{{route("admin.users.destroy", ['user' => $user])}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm edit" title="delete">
                                                <i class="fas fa-shopping-basket"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
            {!! $users->links('inc.paginator') !!}
        </div>
@endsection

