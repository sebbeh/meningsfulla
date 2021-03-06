@extends('framework.barebone')
@section('content')
<div class="container" style="padding-top: 58px;">
    <div class="row" style="margin-top: 1em;">
        <div class="cell"></div>
        <div class="cell">
            <h1>Tjäna pengar</h1>
            <ul>
              <li>Inom kort lanserar vi vår nya hemsida där ni som lag, skolklass eller förening enkelt kan tjäna pengar</li>
              <li>Med produkter från meningsfulla.se bygger ni snabbt upp en kassa till laget, skolklassen eller föreningen samtidigt som ni bidrar till välgörande ändamål som till exempel barncancerfonden.</li>
              <li>Tydliga mervärden, hållbarhet i fokus gör produkterna enkla att sälja.</li>
              <li>Vår digitala lösning gör administrationen och försäljningen enkel och ger er det försäljningsstöd ni behöver. </li>
              <li>Ni får en egen sida hos oss där ni och era kunder enkelt kan följa era framsteg och på ett transparent sätt visa kunderna hur pengarna fördelas mellan er, välgörenhet och Meningsfulla AB.</li>
              <li>När ni avslutat er försäljningsperiod får ni ett tackdiplom som visar hur mycket just ert lag har lyckats samla in till välgörande ändamål.</li>
              <li>Hur fungerar detta då?
                  <ul>
                      <li>Meningsfulla AB tillhandahåller 2-pack meningsfulla strumpor som är elegant förpackade. Strumporna kostar 149 kr/paket.</li>
                      <li>Laget, Skolklassen eller föreningen behåller 40 kr pr. paket strumpor</li>
                      <li>40 kr går till Barncancerfonden</li>
                      <li>39,20 kr går till Meningsfulla AB</li>
                      <li>29,80 kr är moms.</li>
                  </ul>
              </li>
            </ul>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <p>Lämna din intresseanmälan här så kontaktar vi er och berättar mer.<br>
                <form action="/apply" method="POST">
                    {{ csrf_field() }}
                    <div class="form-row">
                      <div class="col-5">
                        <input type="email" name="email" class="form-control" placeholder="E-postadress">
                      </div>
                      <div class="col">
                        <button type="submit" class="btn btn-light">Anmäl</button>
                      </div>
                    </div>
                </form>
            </p>
        </div>
    </div>
</div>
@endsection
