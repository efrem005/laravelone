@extends('layouts.auth')

@section('content')
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card login_page shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ __('Подтвердите адрес электронной почты') }}</h4>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('На ваш адрес электронной почты была отправлена новая ссылка для подтверждения.') }}
                                </div>
                            @endif
                            <form class="login-form mt-4" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="text-muted">
                                            {{ __('Прежде чем продолжить, пожалуйста, проверьте свою электронную почту на наличие ссылки для подтверждения.') }}
                                        </p>
                                        <p>
                                            {{ __('Если вы не получили электронное письмо.') }}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-primary btn-block">{{ __('нажмите здесь, чтобы запросить другой') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
@endsection
