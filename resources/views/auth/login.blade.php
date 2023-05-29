<!DOCTYPE html>
<html>
<head>
    <title>登陆</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body id="login">
<div class="container">

    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="form-signin-heading">登录</h2>
        <input type="text" class="input-block-level" placeholder="邮箱地址" id="email" name="email" value="{{ old('email') }}" >
        <input type="password" class="input-block-level" placeholder="密码" id="password" name="password" value="{{ old('password') }}">
        <label class="checkbox">
{{--            <input type="checkbox" value="remember-me"> 记住密码--}}
        </label>
        <button class="btn btn-large btn-primary" type="submit">登录</button>
    </form>

</div> <!-- /container -->
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>






{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">--}}
{{--    <!-- Meta, title, CSS, favicons, etc. -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>登陆</title>--}}

{{--    <!-- Bootstrap -->--}}
{{--    <link href="css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link href="css/font-awesome.min.css" rel="stylesheet">--}}
{{--    <!-- NProgress -->--}}
{{--    <link href="css/nprogress.css" rel="stylesheet">--}}
{{--    <!-- Animate.css -->--}}
{{--    <link href="css/animate.min.css" rel="stylesheet">--}}

{{--    <!-- Custom Theme Style -->--}}
{{--    <link href="css/custom.min.css" rel="stylesheet">--}}
{{--</head>--}}

{{--<body class="login">--}}
{{--<div>--}}
{{--    <a class="hiddenanchor" id="signup"></a>--}}
{{--    <a class="hiddenanchor" id="signin"></a>--}}

{{--    <div class="login_wrapper">--}}
{{--        <div class="animate form login_form">--}}
{{--            <section class="login_content">--}}

{{--                <form id="loginForm" method="POST" action="{{ route('login') }}">--}}
{{--                    @csrf--}}
{{--                    <h1>登陆</h1>--}}
{{--                    <x-jet-validation-errors class="mb-4" />--}}
{{--                    @include('common.error')--}}
{{--                    <div>--}}
{{--                        <input type="email" class="form-control" placeholder="Email" required="" id="email" name="email" value="{{ old('email') }}" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input type="password" class="form-control" placeholder="Password" required="" id="password" name="password" value="{{ old('password') }}" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <a class="btn btn-default submit" onclick="document:loginForm.submit()">登陆</a>--}}
{{--                        <a class="reset_pass" href="#">Lost your password?</a>--}}
{{--                    </div>--}}

{{--                    <div class="clearfix"></div>--}}

{{--                    <div class="separator">--}}
{{--                        <p class="change_link">New to site?--}}
{{--                            <a href="#signup" class="to_register"> Create Account </a>--}}
{{--                        </p>--}}

{{--                        <div class="clearfix"></div>--}}
{{--                        <br />--}}

{{--                        <div>--}}
{{--                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>--}}
{{--                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </section>--}}
{{--        </div>--}}

{{--        <div id="register" class="animate form registration_form">--}}
{{--            <section class="login_content">--}}
{{--                <form>--}}
{{--                    <h1>Create Account</h1>--}}
{{--                    <div>--}}
{{--                        <input type="text" class="form-control" placeholder="Username" required="" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input id="email" class="block mt-1 w-full" type="email" name="email" value="" placeholder="Email" required="" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input type="password" class="form-control" placeholder="Password" required="" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <a class="btn btn-default submit" href="index.html">Submit</a>--}}
{{--                    </div>--}}

{{--                    <div class="clearfix"></div>--}}

{{--                    <div class="separator">--}}
{{--                        <p class="change_link">Already a member ?--}}
{{--                            <a href="#signin" class="to_register"> Log in </a>--}}
{{--                        </p>--}}

{{--                        <div class="clearfix"></div>--}}
{{--                        <br />--}}

{{--                        <div>--}}
{{--                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>--}}
{{--                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}





{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <x-jet-checkbox id="remember_me" name="remember" />--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
