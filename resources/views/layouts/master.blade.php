<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Dream Hotel</title>
    @yield('extra-meta')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <link>

    @yield('extra-script')
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.4.1/css/bootstrap.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cfa8b0706f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>
<header>
    <div class="collapse bg-light" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <span>
                        <h4 class="text-dark">A propos</h4>
                    </span>
                    <p class="text-muted">Bienvenue sur notre site vous proposant toutes nos suites, vous y trouverez tous nos hotels!</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('contact-form') }}" class="text-dark text-decoration-none">Nous contacter</a></li>
                        <li>
                            <div class="col-4 d-flex align-items-center">
                                @include('partials.auth')
                            </div>
                        </li>
                        <li><a href="{{ route('cart.index') }}" class="navbar-brand d-flex align-items-center">
                                <i class="fa-solid fa-cart-shopping text-dark"></i><strong class="text-dark ml-3">{{ Cart::count() }}</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-white shadow-sm">
        <div class="container d-flex justify-content-between">
            <span>
            <a href="#" class="navbar-brand d-flex align-items-center">
                <a href="{{route('products.index')}}"><img src="{{asset('img/logo.png')}}" width="60" height="60" /></a>
            </a>
            </span>
            <button class="navbar-toggler  bg-secondary" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-danger"></span>
            </button>
        </div>
    </div>
</header>
<div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">HYPNOS</h1>
        <p class="font-italic mb-0">Des suites hors du commun dans toute la france</p>
    </div>
</div>
<div class="dropdown text-center mt-5">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Choisissez un établissement
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach(\App\Models\Category::all() as $category)
            <li>
            <a class="p-2 text-muted text-decoration-none" href="{{ route('products.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </div>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row mb-2">
    @yield('content')
</div>
<footer class="blog-footer">
    <p><a href="https://laravel.com/">ECF</a> - 🛒 Application Dream Hotel avec Laravel 9</p>
    <p>
        <a href="#"><i class="fas fa-arrow-circle-up text-success" style="font-size: 25px"></i></a>
    </p>
</footer>
@yield('extra-js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/jquery-slim.min.js')}}"><\/script>')</script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>

</body>
</html>
