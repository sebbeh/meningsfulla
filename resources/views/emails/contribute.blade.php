<h1>Tack för din gåva</h1>
<p>Vi har tagit emot din gåva och kommer att skicka ut den så fort som möjlig.</p>
<p>Du har beställt:</p>
@if($request->count37 > 0)
<p>{{ $request->count37 }} paket á 2 par strumpor i storlek 37-40.</p>
@endif
@if($request->count40 > 0)
<p>{{ $request->count40 }} paket á 2 par strumpor i storlek 40-45.</p>
@endif
<p>Adress:</p>
<p>{{ $request->firstname }} {{ $request->lastname }}<br>
   {{ $request->address }}<br>
   {{ $request->zipcode }} {{ $request->city }}</p>
<p>{{ $request->email }}</p>
