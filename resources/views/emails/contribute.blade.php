<h1>Tack för ditt bidrag!</h1>
<p>Vi har tagit emot ditt bidrag och kommer att skicka dig din meningsfulla gåva inom kort.</p>
<p>Du har beställt:</p>
@if($request->count37 > 0)
<p>{{ $request->count37 }} paket á 2 par strumpor i storlek 37-40.</p>
@endif
@if($request->count40 > 0)
<p>{{ $request->count40 }} paket á 2 par strumpor i storlek 40-45.</p>
@endif
<p>Till adress:</p>
<p>{{ $request->firstname }} {{ $request->lastname }}<br>
   {{ $request->address }}<br>
   {{ $request->zipcode }} {{ $request->city }}</p>
<p>{{ $request->email }}</p>
