@extends('layouts.app')

@section('content')
    <style>

        .intro-2 {
            background: url("{{asset('images/img%20(11).jpg')}}")no-repeat center center;
            background-size: cover;
        }
        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }

        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }
        .md-form label {
            color: #ffffff;
        }
        h6 {
            line-height: 1.7;
        }
        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 750px;
            }
        }
        @media (min-width: 741px) and (max-height: 638px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 750px;
            }
        }

        .card {
            margin-top: 30px;
            /*margin-bottom: -45px;*/

        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #8EDEF8;
            box-shadow: 0 1px 0 0 #8EDEF8;
        }
        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #8EDEF8;
        }

        .md-form .form-control {
            color: #fff;
        }

        .navbar.navbar-dark form .md-form input:focus:not([readonly]) {
            border-color: #8EDEF8;
        }

    </style>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><strong>MDB</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>                
            </div>
        </nav>

        <!--Intro Section-->
        <section class="view intro-2">
            <div class="full-bg-img">
              <div class="mask rgba-stylish-strong flex-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

                            <!--Form with header-->
                            <div class="card wow fadeIn" data-wow-delay="0.3s">
                                <div class="card-body">

                                    <!--Header-->
                                    <div class="form-header purple-gradient">
                                        <h3><i class="fa fa-user mt-2 mb-2"></i> {{ __('Login') }}</h3>
                                    </div>

                                    <!--Body-->
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix white-text"></i>
                                            <input type="text" name="email" id="orangeForm-email" class="form-control" value="{{ old('email') }}">
                                            <label for="orangeForm-email">Votre email</label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fa fa-lock prefix white-text"></i>
                                            <input type="password" name="password" id="orangeForm-pass" class="form-control" value="{{ old('password') }}">
                                            <label for="orangeForm-pass">Votre password</label>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn purple-gradient btn-lg">Se connecter en tant qu'administrateur</button>
                                            <hr>
                                            <div class="inline-ul text-center d-flex justify-content-center">
                                                <a class="p-2 m-2 fa-lg tw-ic"><i class="fa fa-twitter white-text"></i></a>
                                                <a class="p-2 m-2 fa-lg li-ic"><i class="fa fa-linkedin white-text"> </i></a>
                                                <a class="p-2 m-2 fa-lg ins-ic"><i class="fa fa-instagram white-text"> </i></a>
                                            </div>
                                        </div>
                                    </form>
                                    

                                </div>
                            </div>
                            <!--/Form with header-->

                        </div>
                    </div>
                </div>
              </div>
            </div>
        </section>

@endsection
