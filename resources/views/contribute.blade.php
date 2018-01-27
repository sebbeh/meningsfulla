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
                    <li class="nav-item">
                        <a class="nav-link" href="/samarbetspartners">Samarbetspartners</a>
                    </li>
                </ul>
            </div>
        </nav>
    @endsection
    @section('content')
            <div class="container" style="padding-top: 58px;">
                <div class="row" style="margin-top: 1em;">
                    <div class="col-2"><img src="img/collaborations/bcf.svg" width="160"></div>
                    <div class="col-7">
                        <h1>Ge ditt bidrag</h1>
                        <p>Här kan du bidra till kampen mot barncancer genom att swisha 149 kr till <strong>1234965679</strong>. Givetvis går hela beloppet till Barncancerfonden.</p>
                        <p>Som tack för varje bidrag på 149kr skickar vi dig ett 2 pack eleganta och meningsfulla strumpor, som alltid kommer kännas extra viktiga att bära.</p>
                        <p><strong>För att vi ska kunna leverera strumporna till dig</strong> är det viktigt att du fyller i namn och adress i meddelandefältet på betalningen samt att du specificerar vilken storlek du vill ha.</p>
                        <p>Möjliga storlekar är: 37-40 och 40-45.</p>
                    </div>
                    <div class="col-3"><img src="img/swish.png" width="200"></div>
                </div>
            </div>
    @endsection
