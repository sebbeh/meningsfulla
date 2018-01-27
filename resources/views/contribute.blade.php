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
                        <p>Här kan du bidra till kampen mot barncancer genom att swisha 149kr till <strong>1234965679</strong>. Givetvis går hela beloppet till Barncancerfonden.</p>
                        <p>Som tack för varje bidrag på 149kr skickar vi dig ett 2 pack eleganta och meningsfulla strumpor, som alltid kommer kännas extra viktiga att bära.</p>
                        <p><strong>För att vi ska kunna leverera strumporna till dig</strong> är det viktigt att du fyller i namn och adress i meddelandefältet på betalningen samt att du fyller i och skickar in formuläret nedan.</p>
                        <p><strong>Om du beställer mer än ett paket strumpor måste du swisha 149kr för varje paket du beställer.</strong></p>
                        <p>Möjliga storlekar är: 37-40 och 40-45.</p>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="/bidra" method="POST">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="firstname">Förnamn</label>
                                    <input type="text" name="firstname" id="firstname" placeholder="Förnamn" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="lastname">Efternamn</label>
                                    <input type="text" name="lastname" id="lastname" placeholder="Efternamn" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="address">Adress</label>
                                    <input type="text" name="address" id="address" placeholder="Adress" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <label for="zipcode">Postnummer</label>
                                    <input type="text" name="zipcode" id="zipcode" placeholder="Postnr" class="form-control">
                                </div>
                                <div class="form-group col">
                                    <label for="city">Ort</label>
                                    <input type="text" name="city" id="city" placeholder="Ort" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="email">E-post</label>
                                    <input type="email" name="email" id="email" placeholder="E-post" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">Välj antal per storlek:</div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-5">
                                  <label for="count37">Antal (storlek 37-40):</label>
                                </div>
                                <div class="form-group col-3">
                                  <select name="count37" class="form-control" id="count37">
                                      <option value="0" selected>0</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-5">
                                  <label for="count40">Antal (storlek 40-45):</label>
                                </div>
                                <div class="form-group col-3">
                                  <select name="count40" class="form-control" id="count40">
                                      <option value="0" selected>0</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <button type="submit" class="btn btn-light">Skicka beställning</button>
                                </div>
                            </div>
                          </form>
                    </div>
                    <div class="col-3"><img src="img/swish.png" width="200"></div>
                </div>
            </div>
    @endsection
