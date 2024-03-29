@extends('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'])
{{--<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>--}}

@section('styles')
    <style>
        .center {
            margin-left: 23%;
            margin-top: 10%;
            width: 50%;
        }
        .card-header{
            height: 245px;
            padding: 0 !important;
        }
    </style>
@endsection

@section('content')
{{--    <div class="col-md-10 text-center ml-auto mr-auto">--}}
{{--        <h3 class="mb-5">Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more.</h3>--}}
{{--    </div>--}}
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}" autocomplete="off">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header">
                    <div class="col-md-12">
                        <img src="/educat-logo.png" alt="" class="center">
                    </div>
{{--                    <img src="/assets/img/card-primary.png" alt="">--}}
{{--                    <h1 class="card-title">{{ __('Log in') }}</h1>--}}
                </div>
                <div class="card-body">
{{--                    <p class="text-dark mb-2">Sign in with <strong>admin@white.com</strong> and the password <strong>secret</strong></p>--}}
                    <p class="text-dark mb-2"><b>Login</b></p>
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ __('Password') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-danger btn-lg btn-block mb-3">{{ __('Get Started') }}</button>
                    <div class="pull-left">
                        <h6>
                            <a href="{{ route('register') }}" class="link footer-link" style="color: red">{{ __('Create Account') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" class="link footer-link" style="color: red">{{ __('Forgot password?') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
