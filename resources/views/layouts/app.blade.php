<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel-comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>

        <div class="header_top container-fluid">
            <div class="row justify-content-end">
                <div class="col-2">
                    <p>dc powered visa</p>
                </div>
                <div class="col-2 me-5">
                    <p>additional dc sites</p>
                </div>
            </div>
        </div>
        <nav class="p-0 navbar navbar-expand-lg bg-body-white my_nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">characters</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">comics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">tv</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">collectibiles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">fans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">news</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">shop</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        <div class="footer_top">
            <div class="content">

                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <div class="row">
                                <div class="col-4 px-1 py-2">
                                    <div class="footer_nav">
                                        <h4 class="text-uppercase">dc comics</h4>
                                        <ul>
                                            <li>Characters</li>
                                            <li>Comics</li>
                                            <li>Movies</li>
                                            <li>TV</li>
                                            <li>Games</li>
                                            <li>Videos</li>
                                            <li>News</li>
                                        </ul>
                                    </div>
                                    <div class="footer_nav">
                                        <h4 class="text-uppercase">shop</h4>
                                        <ul>
                                            <li>Shop DC</li>
                                            <li>Shop DC Collectibles</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 px-1 py-2">
                                    <div class="footer_nav">
                                        <h4 class="text-uppercase">dc</h4>
                                        <ul>
                                            <li>Terms Of Use</li>
                                            <li>Privacy Policy (New)</li>
                                            <li>Ad Choices</li>
                                            <li>Advertising</li>
                                            <li>Jobs</li>
                                            <li>Subscription</li>
                                            <li>Talent Workshop</li>
                                            <li>CPSC Certificates</li>
                                            <li>Ratings</li>
                                            <li>Shop Help</li>
                                            <li>Contact Us</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 px-1 py-2">
                                    <div class="footer_nav">
                                        <h4 class="text-uppercase">sites</h4>
                                        <ul>
                                            <li>DC</li>
                                            <li>MAD Magazine</li>
                                            <li>DC Kids</li>
                                            <li>DC Universe</li>
                                            <li>DC Power Visa</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 position-relative d-flex align-items-center justify-content-center">
                            <img class="logo_abs position-absolute" src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="content">
                <div class="container d-flex justify-content-between align-items-center">

                    <div class="my_btn">
                        <a href="#">
                            <h5 class="text-uppercase">sign-up now!</h5>
                        </a>
                    </div>

                    <div class="social d-flex">
                        <h4 class="text-uppercase px-2">Follow Us</h4>
                        <div class="social_icons">
                            <img class="px-2" src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="Facebook">
                            <img class="px-2" src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="twitter">
                            <img class="px-2" src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="youtube">
                            <img class="px-2" src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="pinterest">
                            <img class="px-2" src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>