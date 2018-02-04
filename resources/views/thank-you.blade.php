@extends('framework.barebone')
@section('content')
<div class="container" style="padding-top: 58px;">
    <div class="row" style="margin-top: 1rem;">
        <div class="col">
            @switch($order->status)
            @case("PAID")
            <h3>Tack för ditt bidrag!</h3>
            <p>Vi har tagit emot ditt bidrag och kommer skicka ut din meningsfulla gåva inom kort.</p>
            <p>En kopia på bekräftelsen har också skickats till: {{ $order->email }}.</p>
            <p>Ditt ordernummer är: {{ $order->ordernumber }}.</p>
            @break
            @case("DECLINED")
            <h3>Betalningen avbröts!</h3>
            <p>Betalningen avbröts. Om du fortfarande är intresserad av att bidra till kampen mot barncancer ber vi dig försöka igen.</p>
            <p><a href="/bidra" class="btn btn-light">Försök igen</a></p>
            @break
            @endswitch
        </div>
    </div>
</div>
@endsection
