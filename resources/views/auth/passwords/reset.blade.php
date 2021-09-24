@extends('layouts.auth')

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
                            <h4 class="card-title text-center">Сброс пароля</h4>
                            <form class="login-form mt-4" method="POST" action="{{ route('password.update') }}">
                        @csrf
                            <div class="row">

                                <input type="hidden" name="token" value="{{ $token }}">

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
                                    <button type="submit" class="btn btn-primary btn-block">сбросить</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
