<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estee :: Home</title>

    <base href="{{ asset('/') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent pt-4">
            <a class="navbar-brand text-bold text-uppercase" style="font-size: 24px; letter-spacing: 2px; color: #2E937A" href="{{ route('main.index') }}">ESTEE</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('main.index') }}">Main Page<span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('category.index') }}">Categories<span
                                class="sr-only">(current)</span></a>
                    </li>

                    @auth()
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Blog</a>

                            <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                <a class="dropdown-item" href="{{ route('personal.main.index') }}">Blog Personal</a>
                                <a class="dropdown-item" href="{{ route('admin.main.index') }}">Blog Admin</a>
                            </div>

                        </li>
                    @endauth
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    @guest()
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    @endguest
                    @auth()
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-outline-white" value="Logout">
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')


@guest()
    <section class="edica-footer-banner-section pt-5">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <h1 class="banner-title">log in to the system.</h1>
                <div class="banner-btns-wrapper">
                    <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                </div>
                <p class="banner-text">To be able to leave a comment on the blog page, <br>you need to be authenticated.
                </p>
            </div>
        </div>
    </section>
@endguest


<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area justify-content-center align-items-center">
            <div class="col-md-3">
                <a class="footer-brand-wrapper text-uppercase text-bold" style="font-size: 24px; letter-spacing: 2px; color: #2E937A" href="{{ route('main.index') }}">ESTEE</a>

                <p class="contact-details">esteeerol@gmail.com</p>
                <p class="contact-details">+90 531 820 45 98</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>

            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-tr flag-icon-squared"></span> Turkey <i
                            class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-uz flag-icon-squared"></span> Uzbekistan
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>


<script src="assets/vendors/popper.js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendors/aos/aos.js"></script>
<script src="assets/js/main.js"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
