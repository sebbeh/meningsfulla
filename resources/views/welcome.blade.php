@extends('framework.barebone')
    @section('css')
    .carousel-item {
        height: 100vh;
        min-height: 300px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    @endsection
      @section('nav')
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/"><img src="img/mf-logo-m-color.svg" width="30" height="30"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Hem <span class="sr-only">(befintlig)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/om">Om</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tjäna Pengar</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/tjana-pengar">Hur-var-när</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hockeyns-dag">Hockeyns dag</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/samarbetspartners">Samarbetspartners</a>
                    </li>
                </ul>
            </div>
        </nav>
    @endsection
    @section('content')
        <header>
            <div id="backgroundCarousel" class="carousel slide" data-ride="carousel" data-interval="7500" data-pause="false">
                <ol class="carousel-indicators">  
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('img/carousel/bg-1.jpg'); opacity: 0.5; filter: alpha(opacity=50)">
                    </div>
                    <div class="carousel-item" style="background-image: url('img/carousel/bg-2.jpg'); opacity: 0.5; filter: alpha(opacity=50)">
                    </div>
                    <div class="carousel-item" style="background-image: url('img/carousel/bg-3.jpg'); opacity: 0.5; filter: alpha(opacity=50)">
                    </div>
                    <div class="carousel-item" style="background-image: url('img/carousel/bg-4.jpg'); opacity: 0.5; filter: alpha(opacity=50)">
                    </div>
                </div>
            </div>
        </header>
        <section class="h-100 w-100" style="position: absolute; top: 0px; padding-top: 58px;">
            <div class="h-100">
                <div class="container h-100 w-100">
                    <div class="row justify-content-center align-items-center h-100 w-100">
                        <p><a href="/om"><img src="img/logo.svg" width="100%"><br />
                        Vi stödjer Barncancerfonden - läs mer här</a></p>
                    </div>
                </div>
            </div>
        </section>
    @endsection
