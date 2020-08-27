@extends('layouts.master')
@section('custom_css')
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href={{asset('images/icons/favicon.ico')}}>
    <!--===============================================================================================-->
    {{--<link rel="stylesheet" type="text/css" href={{asset('vendor/bootstrap/css/bootstrap.min.css')}}>--}}
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('vendor/animate/animate.css')}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('vendor/css-hamburgers/hamburgers.min.css')}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('vendor/animsition/css/animsition.min.css')}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('vendor/select2/select2.min.css')}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('vendor/daterangepicker/daterangepicker.css')}}>
    <!--k===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('css/util.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('css/main(login).css')}}>
    <!--===============================================================================================-->
@endsection

@section('content')
    <section class="page_breadcrumbs ds parallax section_padding_45 column_margin_0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>SIGN IN</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                Homepage
                            </a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li >
                            <a class="active" href="{{ route('register') }}">
                            Registration
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-b-160 p-t-50">
            @if(count($errors->all()) > 0)
                <div class="alert alert-danger" role="alert">
                    <p><b>Required Fields Missing!</b></p>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf

                <div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
                    <input class="input100" type="email" name="email">
                    <span class="label-input100">email</span>
                </div>


                <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password">
                    <span class="label-input100">Password</span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Sign in
                    </button>
                </div>

                {{--<div class="text-center w-full p-t-23">--}}
                    {{--<a href="#" class="txt1">--}}
                        {{--Forgot password?--}}
                    {{--</a>--}}
                {{--</div>--}}
            </form>
        </div>
    </div>
</div>

@endsection



@section('custom_js')
{{--<!--===============================================================================================-->--}}
{{--<script src={{asset('vendor/jquery/jquery-3.2.1.min.js')}}></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src={{asset('vendor/animsition/js/animsition.min.js')}}></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src={{asset('vendor/bootstrap/js/popper.js')}}></script>--}}
{{--<script src={{asset('vendor/bootstrap/js/bootstrap.min.js')}}></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src={{asset('vendor/select2/select2.min.js')}}></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src={{asset('vendor/daterangepicker/moment.min.js')}}></script>--}}
{{--<script src={{asset('vendor/daterangepicker/daterangepicker.js')}}></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src={{asset('vendor/countdowntime/countdowntime.js')}}></script>--}}
{{--<!--===============================================================================================-->--}}
<script src={{asset('js/main(login).js')}}></script>
@endsection
