@extends('HOME.general')
@section('content')


<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader -->


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="{{route('welcome')}}"><img src="{{asset('resources/HOME/images/logo1.png')}}" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('welcome')}}">INICIO <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->


<!-- Header -->
<header id="header" class="ex-2-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Iniciar sesión</h1>
                <p>¿No tienes una contraseña? Entonces por favor <a class="white" href="{{route('register')}}"> regístrate</a></p>
                <!-- Sign Up Form -->
                <div class="form-container">
                    <form data-toggle="validator" data-focus="false" action="{{route('loginSubmit')}}" method="POST">
                    @csrf    
                    <div class="form-group">
                            <input name="email" type="email" class="form-control-input" id="lemail" required value="{{old('email')}}">
                            <label class="label-control" for="lemail">Email</label>
                            <div class="help-block with-errors"></div>
                            @error('email')
                            <div class="">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="password" type="text" class="form-control-input" id="lpassword" required >
                            <label class="label-control" for="lpassword">Password</label>
                            <div class="help-block with-errors"></div>
                            @error('password')
                            <div class="">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">INICIAR SESSIÓN</button>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div> <!-- end of form container -->
                <!-- end of sign up form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->
@endsection