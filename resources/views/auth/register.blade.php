@extends('layouts.auth')

@section('title')
    @parent Регистрация
@endsection

@section('content')
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="mr-lg-5">
                        <img src="{{asset('/assets/images/user/signup.svg')}}" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card login_page shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Регистрация</h4>
                            <form class="login-form mt-4" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Имя <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror pl-5" placeholder="Ваше имя" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Логин <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror pl-5" placeholder="Логин" name="login" value="{{ old('login') }}" required autocomplete="login">
                                            @error('login')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Ваш адрес электронной почты <span class="text-danger">*</span></label>
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror pl-5" placeholder="Эл. почта" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Пароль <span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror pl-5" placeholder="Пароль" name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Повторите пароль <span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror pl-5" placeholder="Пароль" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Я принимаю <a href="#" class="text-primary">условия и положения</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button>
                                    </div>
                                    <div class="col-lg-12 mt-4 text-center">
                                        <h6>Или зарегистрируйтесь с</h6>
                                        <ul class="list-unstyled social-icon mb-0 mt-3">
                                            <li class="list-inline-item"><a href="{{ route('facebook.start') }}" class="rounded"><i class="uil uil-facebook-f" style="font-size:19px;line-height:32px;"></i></a></li>
                                            <li class="list-inline-item"><a href="{{ route('github.start') }}" class="rounded"><i class="uil uil-github-alt" style="font-size:19px;line-height:32px;"></i></a></li>
                                            <li class="list-inline-item"><a href="{{ route('vk.start') }}" class="rounded"><i class="uil uil-vk-alt" style="font-size:19px;line-height:32px;"></i></a></li>
                                            <li class="list-inline-item"><a href="{{ route('google.start') }}" class="rounded"><i class="uil uil-google" style="font-size:19px;line-height:32px;"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="uil uil-instagram-alt" style="font-size:19px;line-height:32px;"></i></a></li>
                                        </ul><!--end icon-->
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Уже есть аккаунт ?</small> <a href="{{route('login')}}" class="text-dark font-weight-bold">Войти</a></p>
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
