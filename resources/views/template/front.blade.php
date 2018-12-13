<!DOCTYPE html>
<html lang="en-US">
<!--[if lt IE 7 ]>
<html lang="en" class="innerpage no-js ie6">
<![endif]-->
<!--[if IE 7 ]>
<html lang="en" class="innerpage no-js ie7">
<![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="innerpage no-js ie8">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<!-- Mirrored from preview.motocms.com/estrella/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 04:42:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title  -->
    <title> Estrella | Blog</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets-front/images/favicon.png')}} ">
    <!-- Bootstrap -->
    <link href="{{asset('assets-front/css/bootstrap.min.css')}} " rel="stylesheet" type="text/css">
    <!-- Owl Carousel -->
    <link href="{{asset('assets-front/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Animate -->
    <link href="{{asset('assets-front/css/animate.min.css')}} " rel="stylesheet" type="text/css">
    <!-- Lightbox -->
    <link href="{{asset('assets-front/css/lightbox.css')}} " rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="{{asset('assets-front/css/font-awesome.min.css')}} " rel="stylesheet" type="text/css">
    <!-- Theme Styles -->
    <link href="{{asset('assets-front/css/styles.css')}} " rel="stylesheet" type="text/css">
    <link href="{{asset('assets-front/css/responsive.css')}} " rel="stylesheet" type="text/css">

    @yield('assets-top')

</head>
<body>
<!-- Preloader -->
<div class="page-load">
    <div class="loader">
        <img src="{{asset('assets-front/images/loader.png')}} " class="loader-image" alt="loader">
        <img src="{{asset('assets-front/images/loader-mb.png')}} " class="loader-image loader-image-mb" alt="loader-mb">
    </div>
</div>
<!-- Preloader end -->


<!-- Blog Wrapper -->
<div class="wrapper wrapper-blog">
    <!-- Header -->
    <header class="header-top">
        <div class="layout">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 w25-tb">
                        <a href="mailto:estrellaagency@gmail.com" class="link--mail mb-space">estrellaagency@gmail.com</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 w50-tb">
                        <div class="divider divider-gray divider-circles mb-space">
                            <hr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 w25-tb tr-tb">
                        <p class="socials--title">get social</p>
                        <ul class="socials socials-red">
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header-bottom">
        <nav class="navbar navbar-expand-md navbar-custom">
            <div class="container">
                <a href="index-2.html" class="header-bottom--logo logo">
                    <img src="{{asset('assets-front/images/header_logo.png')}} " alt="header_logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">


                        <li class="nav-item  nav-item--mobile">
                            <a class="nav-link nav-link--mobile" href="{{ url('/') }}">
                                Home
                                <ul class="circles-menu">
                                    <li>
                                        <span class="nav-link-circle nav-link-circle-f"></span>
                                    </li>
                                    <li>
                                        <span class="nav-link-circle nav-link-circle-s"></span>
                                    </li>
                                    <li>
                                        <span class="nav-link-circle nav-link-circle-t"></span>
                                    </li>
                                </ul>
                            </a>
                        </li>


                        <li class="nav-item  nav-item--mobile">
                            <a class="nav-link nav-link--mobile" href="{{ route('allposts') }}">
                                All Post
                                <ul class="circles-menu">
                                    <li>
                                        <span class="nav-link-circle nav-link-circle-f"></span>
                                    </li>
                                    <li>
                                        <span class="nav-link-circle nav-link-circle-s"></span>
                                    </li>
                                    <li>
                                        <span class="nav-link-circle nav-link-circle-t"></span>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <li class="nav-item dropdown  nav-item--mobile">
                            <a class="nav-link nav-link--mobile dropdown-toggle" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                                <ul class="circles-menu">
                                    <li>
                                        <span class="nav-link-circle nav-link-circle-f"></span>
                                    </li>
                                    <li>
                                        <span class="nav-link-circle nav-link-circle-s"></span>
                                    </li>
                                    <li>
                                        <span class="nav-link-circle nav-link-circle-t"></span>
                                    </li>
                                </ul>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item--mobile">


                                    {{--<a class="dropdown-link--mobile" href="#">--}}
                                        {{--asdfsdf--}}
                                        {{--<span>{{ $category->posts()->count() }}</span>--}}
                                    {{--</a>--}}


                                    @foreach(\App\Category::all() as $category)
                                    <a class="dropdown-link--mobile" href="{{ url('/allposts/category/'.$category->slug) }}">
                                     {{ $category->name }} ({{ $category->posts()->count() }})
                                    </a>
                                        @endforeach


                                </li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header end -->

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                        <a href="index-2.html" class="logo footer-top--logo">
                            <img src="{{asset('assets-front/images/footer_logo.png')}} " alt="footer-logo">
                        </a>
                        <h1>{{ $setting->tagline }}</h1>
                        <p class="footer-top-text">
                            {{ $setting->email }}
                        </p>
                        <p class="footer-top-text">
                            {{ $setting->phone }}
                        </p>
                        <p class="footer-top-text">
                            {{ $setting->address }}
                        </p>
                        <ul class="circles circles--red">
                            <li>
                                <span></span>
                            </li>
                            <li>
                                <span></span>
                            </li>
                            <li>
                                <span></span>
                            </li>
                        </ul>
                        <ul class="socials socials-red">
                            <li>
                                <a href="{{ $setting->so_twitter }}">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $setting->so_instagram }}">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $setting->so_facebook }}">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p class="footer-bottom-privacy">Copyright © 2018 by EXCLthemes</p>
                        <p class="footer-bottom-privacy">All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->
    <a class="to-top" id="buttonToTop"></a>
</div>
<!-- Blog Wrapper end -->
<!-- Jquery -->
<script src="{{asset('assets-front/js/jquery-3.2.1.min.js')}} "></script>
<!-- Lightbox -->
<script src="{{asset('assets-front/js/lightbox.js')}} "></script>
<!-- Bootstrap -->
<script src="{{asset('assets-front/js/bootstrap.min.js')}} "></script>
<!-- Wow -->
<script src=" {{asset('assets-front/js/wow.min.js')}} "></script>
<!-- Owl Carousel -->
<script src="{{asset('assets-front/js/owl.carousel.min.js')}} "></script>
<!-- Form validation -->
<script src="{{asset('assets-front/cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js')}} "></script>
<script src="{{asset('assets-front/cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js')}} "></script>
<!-- Init Script  -->
<script src="{{asset('assets-front/js/init.js')}} "></script>

@yield('assets-bot')
</body>

<!-- Mirrored from preview.motocms.com/estrella/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 04:42:11 GMT -->
</html>

