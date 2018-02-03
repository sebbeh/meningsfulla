@extends('framework.barebone')
@section('content')
<div class="container" style="padding-top: 58px;">
    <div class="row" style="margin-top: 1rem;">
        <div class="col">
            @if($order[0]->status == 'PAYED')
            <h3>Tack för din gåva!</h3>
            <p>{{ $order[0]->firstname . ' ' . $order[0]->lastname }}, vi har mottagit din gåva och kommer skicka ut din beställning så snart som möjligt.</p>
            <p>En kopia på bekräftelsen har också skickats till: {{ $order[0]->email }}.</p>
            <p>Ditt ordernummer är: {{ $order[0]->ordernumber }}.</p>
            @elseif($order[0]->status != 'PAYED')
            <h3>Något gick snett!</h3>
            <p>Något gick snett med din betalning. Vi ber dig försöka igen.</p>
            <p><a href="/bidra" class="btn btn-light">Försök igen</a></p>
            @endif
        </div>
    </div>
</div>
@endsection
