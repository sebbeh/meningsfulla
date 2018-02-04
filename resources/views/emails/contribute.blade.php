<h1>Tack för ditt bidrag!</h1>
<p>Vi har tagit emot ditt bidrag och kommer att skicka dig din meningsfulla gåva inom kort.</p>
<p>Du har beställt:</p>
@if($order->contents["count37"] > 0)
<p>{{ $order->contents["count37"] }} paket á 2 par strumpor i storlek 37-40.</p>
@endif
@if($order->contents["count40"] > 0)
<p>{{ $order->contents["count40"] }} paket á 2 par strumpor i storlek 40-45.</p>
@endif
<p>Till adress:</p>
<p>{{ $order->firstname }} {{ $order->lastname }}<br>
   {{ $order->address }}<br>
   {{ $order->zipcode }} {{ $order->city }}</p>
<p>{{ $order->email }}</p>
