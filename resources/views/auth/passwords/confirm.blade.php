@extends('layouts.auth')

@section('content')
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="mr-lg-5">
                        <img src="{{asset('/assets/images/user/signup.svg')}}" class="img-fluid d-block mx-auto" alt="recovery">
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
                            <h4 class="card-title text-center">Подтвердите пароль</h4>
                            <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="text-muted text-center">Пожалуйста, введите свой пароль.</p>
                                        <div class="form-group position-relative">
                                            <label>Пароль <span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input id="password" type="password" class="form-control @error('email') is-invalid @enderror pl-5" placeholder="Пароль" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-block">Востановить</button>
                                    </div>

                                    @if (Route::has('password.request'))
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Забыли свой пароль ?</small> <a href="{{route('password.request')}}" class="text-dark font-weight-bold">Востановить</a></p>
                                    </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
