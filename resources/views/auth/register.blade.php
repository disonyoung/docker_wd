<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>登陆</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
{{--            <section class="login_content">--}}
{{--                <form id="loginForm" method="POST" action="{{ route('login') }}">--}}
{{--                    @csrf--}}
{{--                    <h1>登陆</h1>--}}
{{--                    --}}{{--                    <x-jet-validation-errors class="mb-4" />--}}
{{--                    @include('common.error')--}}
{{--                    <div>--}}
{{--                        <input type="email" class="form-control" placeholder="Email" required="" id="email" name="email" value="" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input type="password" class="form-control" placeholder="Password" required="" id="password" name="password" value="" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <a class="btn btn-default submit" onclick="document:loginForm.submit()">Log in</a>--}}
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
            <section class="login_content">
                <form id="RegisterForm" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1>注册</h1>
                    @include('common.error')
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" id="name" name="name" value="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" id="email" name="email" value="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" id="password" name="password" value="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="RePassword" required="" id="password_confirmation" name="password_confirmation" value="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" onclick="document:RegisterForm.submit()">注册</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
{{--                        <p class="change_link">Already a member ?--}}
{{--                            <a href="#signin" class="to_register"> Log in </a>--}}
{{--                        </p>--}}

{{--                        <div class="clearfix"></div>--}}
{{--                        <br />--}}

                        <div>
                            <h1><i class="fa fa-paw"></i> WD</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>







{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="name" value="{{ __('Name') }}" />--}}
{{--                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="terms">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <x-jet-checkbox name="terms" id="terms" required />--}}

{{--                            <div class="ml-2">--}}
{{--                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </x-jet-label>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
