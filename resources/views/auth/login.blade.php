<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <{{-- link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}} <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

        {{-- Piazzolla Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('userView/css/style.css') }}">


</head>

<body style="font-family: 'Piazzolla', serif; ">
    <main class="main-content mt-5">
        <section>
            <div class="page-header min-vh-75">
                <div class="container" >
                    <div class="row mt-5">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8" style="border:none;">
                                <div class="card-header pb-0 text-left bg-transparent" style="border: none;">
                                    <h3 class="font-weight-bolder text-dark">¡Bienvenido a tu blog!</h3>
                                    <p class="mb-0" style="border:none;">Ingresá tu e-mail y contraseña para ingresar.</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <label style="font-family: 'Piazzolla', serif; ">Email</label>
                                        <div class="mb-3">
                                            <input id="email" type="email"
                                                class="form-control blog @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input id="password" type="password" class="form-control blog border-end-lg @error('password') is-invalid @enderror" 
                                                placeholder="Password" name="password"
                                                required autocomplete="current-password"
                                                aria-label="Password" aria-describedby="password-addon">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" checked="" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rememberMe">Recordarme</label>
                                        </div>
                                        <div class="text-center">
                                            
                                            <button  type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Login</button>
                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link text-dark    " href="{{ route('password.request') }}">
                                                    {{ __('Olvidaste la contraseña?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        ¿No tenés cuenta?
                                        <a href="/register" class="text-info text-gradient font-weight-bold">Registrarme</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{asset('img/maquinachica.jpg')}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @extends('layouts.footer')



