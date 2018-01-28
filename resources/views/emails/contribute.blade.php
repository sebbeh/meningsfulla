<h1>Tack för din beställning</h1>
<p>Vi har tagit emot din beställning och kommer att skicka ut den så fort vi bekräftat att du swishat in {{ (149*$request->count37)+(149*$request->count40) }}kr till <b>1234965679</b>.</p>
<p>Du har beställt:</p>
<p>{{ $request->count37 }}st strumpor i storlek 37-40.</p>
<p>{{ $request->count40 }}st strumpor i storlek 40-45.</p>
<p>Adress:</p>
<p>{{ $request->firstname }} {{ $request->lastname }}<br>
   {{ $request->address }}<br>
   {{ $request->zipcode }} {{ $request->city }}</p>
<p>{{ $request->email }}</p>
