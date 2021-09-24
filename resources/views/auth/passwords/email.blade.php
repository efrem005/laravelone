@extends('layouts.auth')

@section('content')
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="mr-lg-5">
                        <img src="{{asset('assets/images/user/recovery.svg')}}" class="img-fluid d-block mx-auto" alt="recovery">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card login_page shadow rounded border-0">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h4 class="card-title text-center">Восстановить аккаунт</h4>
                            <form class="login-form mt-4" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="text-muted">Пожалуйста, введите свой адрес электронной почты. Вы получите ссылку для создания нового пароля по электронной почте.</p>
                                        <div class="form-group position-relative">
                                            <label>Адрес электронной почты <span class="text-danger">*</span></label>
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror pl-5" placeholder="Ваш адрес электронной почты" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-block">Востановить</button>
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Вспомнили свой пароль ?</small> <a href="{{route('login')}}" class="text-dark font-weight-bold">Войти</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
@endsection
