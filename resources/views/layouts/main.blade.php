<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>A very simple laravel & livewire e-shop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    @livewireStyles
</head>
<body  class="d-flex flex-column min-vh-100">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">{{__('content.Main_page')}}</a>
        <a class="navbar-brand" href="{{route('product.index')}}">{{__('content.Edit_items')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

            </ul>
            <form class="d-flex">
                @livewire('cart-button')
            </form>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-dark py-1">
    <div class="container px-2 px-lg-5 my-2">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Simple e-commerce</h1>
            <p class="lead fw-normal text-white-50 mb-0">Simple adding to cart buttons in SPA with livewire</p>
        </div>
    </div>
</header>
<!-- Section-->

            @yield('content')


<div class="wrapper flex-grow-1"></div>
<!-- Footer-->

<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; </p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->

@livewireScripts
</body>
</html>
