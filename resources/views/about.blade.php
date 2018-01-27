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
                    <li class="nav-item active">
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
                    <div class="cell"></div>
                    <div class="cell">
                        <h1>Om Meningsfulla AB</h1>
                        <p>Meningsfulla AB  har som affärsidé att vara ekonomisk katalysator för lag/klass kassor och välgörande ändamål.</p>
                        <p>Vi drivs av att bidra till en hållbar utveckling och välgörande ändamål.
                        Vi vill bedriva en meningsfull, hållbar och transparent verksamhet.</p>
                        <p>Genom meningsfulla samarbeten och partnerskap ger vi förutsättningar för
                        organisationer, föreningar och skolklasser att skapa egna ekonomiska
                        resurser, samtidigt som man bidrar till välgörande ändamål och hållbar utveckling.</p>
                        <p>Vi tillhandahåller hållbara och meningsfulla produkter med tydliga mervärden,
                        som företag kan att ge bort i gåva och är enkla för organisationer, föreningar och
                        skolklasser att sälja. Därigenom får de enkelt och snabbt en möjlighet att skapa egna
                        ekonomiska resurser på ett meningsfullt sätt.</p>
                        <h4>Syfte</h4>
                        <p>Att med hållbar utveckling i centrum ge förutsättningar för våra kunder att skapa egna ekonomiska resurser för att nå sina mål.</p>
                        <h4>Vision</h4>
                        <p>Den bästa*, mest välgörande samarbetspartnern i lag/skolklass försäljningsbranschen.<br>
                        <small>* Bäst i form av kundnöjdhet, medarbetarnöjdhet, hållbarhet och lönsamhet</small></p>
                        <h4>Löfte</h4>
                        <p>Tillsammans hjälper vi våra kunder att skapa ekonomiska resurser på ett hållbart sätt.</p>
                    </div>
                </div>
            </div>
    @endsection
