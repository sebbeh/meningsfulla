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
                    <li class="nav-item active">
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
                        <h1>Hockeyns dag <small class="text-muted">27 januari 2018</small></h1>
                        <h3>meningsfulla.se på Hockeyns Dag 2018</h3>
                        <h5>Den 27 januari bjuder Malmö Redhawks med partners, regionens invånare på ishockey!</h5>
                        <p>För sjunde året i rad anordnar Malmö Redhawks Hockeyns Dag i Malmö Arena, när Redhawks lördagen den 27 januari kl 15:15 tar emot Mora IK på hemmais.
                        Tillsammans med näringslivet, som betalar 1 krona per åskådare, bjuder Malmö Redhawks regionens invånare på gratis hockey av högsta kvalitet.</p>
                        <h5>Malmö Redhawks spelar för Barncancerfonden</h5>
                        <p>Under <b>Hockeyns Dag spelar Malmö Redhawks för Barncancerfonden och skänker 20 % av intäkterna direkt till Barncancerfonden</b> via vårt samarbete med Team Rynkeby - God Morgon!</p>
                        <p>Förra säsongen samlade Malmö Redhawks in nästan 300 000 kr till Barncancerfonden och nu siktar vi på ännu mer! Barncancer är tyvärr något som drabbar många och det slår urskiljningslöst mot barn och deras familjer. Även vi i Malmö Redhawks är på nära håll drabbade vilket gör att frågan känns ännu viktigare för oss.</p>
                        <h5>Publiken och meningsfulla.se kan också hjälpa till</h5>
                        <p>På Hockeynsdag den 27 januari i Malmö Arena kan du också vara med att bidra i kampen mot att utrota barncancer.</p>
                        <p>Denna lördag lanserar vi varumärket Meningsfulla AB, ett företag som har som vision att bli den bästa och mest välgörande aktören inom lag och skolklass försäljning.</p>
                        <p>Gå in på www.meningsfulla.se och bidra med 149 kr och givetvis går alla 149kr till Barncancerfonden.</p>
                        <p>Som tack för ditt bidrag skickar vi dig ett 2 pack eleganta och meningsfulla strumpor, som alltid kommer kännas extra viktiga att bära. Givetvis kommer vi finnas på plats också, så du kan få dina meningsfulla strumpor direkt av oss.</p>
                        <p>Så låt oss kraftsamla tillsammans och bidra med en riktigt häftig summa för att stötta forskningen om barncancer och ge stöd till barn och anhöriga i deras kamp mot barncancer.</p>
                        <p>Tillsammans blir vi starka!</p>
                        <p><img src="img/collaborations/bcf.svg" width="150"></p>

                    </div>
                </div>
            </div>
    @endsection
