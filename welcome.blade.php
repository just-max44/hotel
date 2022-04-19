@include('layouts/head')
<body>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="text-center">
                <a class="blog-header-logo text-dark" href="#">Hypnos</a>
            </div>
        </div>
    </header>
</div>
@yield('content')
<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Hypnos a maintenant son propre site !</h1>
            <p class="lead my-3">Venez découvrire toutes nos suites</p>
            <p class="lead mb-0"><a href="{{ route('products.index') }}" class="text-white fw-bold">Accédez à la liste des hotels</a></p>
        </div>
    </div>
</main>
<footer class="blog-footer">
    <p><a href="https://getbootstrap.com/">ECF</a> - 🛒 Application Hypnos avec Laravel 8</p>
    <p>
        <a href="#">Revenir en haut</a>
    </p>
</footer>

