@extends('layouts.app')

@section('header-content')
<header>

    <nav class="p-0 navbar navbar-expand-lg bg-body-white my_nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/dc-logo.png" alt="">
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

@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>
                ciao
            </h1>
        </div>
        <div class="col-6">
            <h1>
                ciao
            </h1>
        </div>
    </div>
</div>

@endsection

@section('footer-content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>test</h1>
            </div>
            <div class="col-4">
                <h1>test</h1>
            </div>
            <div class="col-4">
                <h1>test</h1>
            </div>
        </div>
    </div>
</footer>

@endsection