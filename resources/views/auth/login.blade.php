@extends('layouts.auth')
@if(isset($error))
@dd($error)
@endif

@section('content')
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="mr-lg-5">
                        <img src="{{asset('/assets/images/user/login.svg')}}" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card login-page bg-white shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Авторизация</h4>
                            <form method="POST" action="{{ route('login') }}" class="login-form mt-4">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Логин <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror pl-5" name="login" value="{{ old('login') }}" placeholder="Логин" required autocomplete="login" autofocus>
                                            @error('login')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>{{ __('Пароль') }}<span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror pl-5" name="password" placeholder="Пароль" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="remember">{{ __('Запомнить меня') }}</label>
                                                </div>
                                            </div>
                                            @if (Route::has('password.request'))
                                            <p class="forgot-pass mb-0">
                                                <a href="{{ route('password.request') }}" class="text-dark font-weight-bold">Забыл пароль ?</a>
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-0">
                                        <button type="submit" class="btn btn-primary btn-block">Войти</button>
                                    </div>
                                    <div class="col-lg-12 mt-4 text-center">
                                        <h6>Или войдите с помощью</h6>
                                        <ul class="list-unstyled social-icon mb-0 mt-3">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        </ul><!--end icon-->
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Нет учетной записи ?</small> <a href="{{route('register')}}" class="text-dark font-weight-bold">Зарегистрироваться</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!---->
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
@endsection
