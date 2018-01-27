@extends('framework.barebone')
      @section('nav')
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/"><img src="img/mf-logo-m-color.svg" width="30" height="30"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="/samarbetspartners">Samarbetspartners</a>
                    </li>
                </ul>
            </div>
        </nav>
    @endsection
    @section('content')
            <div class="container" style="padding-top: 58px;">
                <div class="row" style="margin-top: 1em;">
                    <div class="cell"></div>
                    <div class="cell">
                        <h1>Samarbetspartners</h1>
                        <h4>Föreningar</h4>
                        <p><a href="http://www.malmoredhawks.com"><img src="img/collaborations/mif.jpg" width="100"></a></p>
                        <h4>Välgörenhetsorganisationer</h4>
                        <p><a href="http://www.barncancerfonden.se"><img src="img/collaborations/bcf.svg" width="100"></a></p>
                        <h4>Företag</h4>
                        <p><a href="https://www.wundersocks.com">MM socks</a></p>
                        <p><a href="http://www.fogma.nu"><img src="img/collaborations/fogma.png" width="100"></a></p>
                    </div>
                </div>
            </div>
    @endsection
