@extends('layouts.header')
<main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('../assets/img/curved-images/curved14.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">¡Bienvenido!</h1>
                        <p class="text-lead text-white">Disfrutá de la auto-gestión del sitio creando tu usuario.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Ingresá tus datos.</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" role="form text-left">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" id="name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Nombre" aria-label="Name" aria-describedby="email-addon">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        aria-label="Email" aria-describedby="email-addon">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="password" placeholder="Password" aria-label="Password"
                                        aria-describedby="password-addon">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input id="password-confirm" type="password" class="form-control"
                                        placeholder="Repetir Password" name="password_confirmation"
                                        required autocomplete="new-password" aria-label="Password"
                                        aria-describedby="password-addon">
                                </div>
                                <div class="form-check form-check-info text-left">
                                    <input class="form-check-input" type="checkbox" name="terminos"   value="" id="flexCheckDefault"
                                        checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Acepeto los <a href="javascript:;" class="text-dark font-weight-bolder">Terminos
                                            y
                                            Condiciones</a>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-dark w-100 my-4 mb-2">Registrarme</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">¿Ya tenés una cuenta? <a href="/login"
                                        class="text-dark font-weight-bolder">login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@extends('layouts.footer')
