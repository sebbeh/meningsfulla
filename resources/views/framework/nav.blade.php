<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/"><img src="/img/mfse-logo-color-dark.svg" height="30"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Ekko::isActiveUrl('/') }}">
                <a class="nav-link" href="/">Hem <span class="sr-only">(befintlig)</span></a>
            </li>
            <li class="nav-item {{ Ekko::isActiveUrl('om') }}">
                <a class="nav-link" href="/om">Om</a>
            </li>
            <li class="nav-item dropdown {{ Ekko::isActiveUrl('tjana-pengar') }}">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tjäna Pengar</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/tjana-pengar">Hur-var-när</a>
                </div>
            </li>
            <li class="nav-item {{ Ekko::isActiveUrl('hockeyns-dag') }}">
                <a class="nav-link" href="/hockeyns-dag">Hockeyns dag</a>
            </li>
            <li class="nav-item {{ Ekko::isActiveUrl('samarbetspartners') }}">
                <a class="nav-link" href="/samarbetspartners">Samarbetspartners</a>
            </li>
        </ul>
        <a href="https://www.instagram.com/meningsfulla.se/" class="text-light mr-2"><span class="fab fa-instagram fa-2x"></span></a> <a href="https://www.facebook.com/meningsfulla" class="text-light"><span class="fab fa-facebook fa-2x"></span></a>
    </div>
</nav>
