@extends('framework.barebone')

@push('css')
.carousel-item {
    height: 100vh;
    min-height: 300px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
@endpush

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
            <div class="row no-gutters align-items-center h-100">
                <div class="col text-center">
                  <p><a href="/om"><img src="img/logo.svg" width="80%"></a></p>
                  <p><a href="/bidra" class="btn btn-light">Vi stödjer Barncancerfonden - ge ditt bidrag här</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
