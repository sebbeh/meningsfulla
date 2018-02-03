@extends('framework.barebone');
@section('content')
<div class="container h-100 w-100" style="position: absolute; top: 0px; padding-top: 58px;">
    <div class="row h-100 no-gutters align-items-center">
        <div class="col text-center">
            <h3>Väntar på betalning från Swish...</h3>
            @if(!$agent->isPhone())
            <small>Starta Swish-appen på din telefon.</small>
            @endif
        </div>
    </div>
</div>
@endsection

@push('js')
@if(session('token') != '' && session('callbackurl') != '')
@if($agent->browser() == 'Chrome' && $agent->version($agent->browser()) > 24) {
<script>
  var url = 'intent://view/#Intent;swish;<package_name>;{{ session('token') }};{{ $agent->browser() }};{{ session('callbackurl') }};' + navigator.userAgent + ';end';
  var iframe = document.createElement('iframe');
  iframe.style.display = "none";
  iframe.src = url;
  document.body.appendChild(iframe);
</script>
@else
<script>
  var iframe = document.createElement('iframe');
  iframe.style.display = "none";
  iframe.src = 'swish://paymentrequest?token={{ session('token') }}&callbackurl={{ session('callbackurl') }}';
  document.body.appendChild(iframe);
</script>
@endif
@endif
<script>
// The polling function
(function poll() {
  setTimeout(function() {
    $.ajax({
      url: '{{ url('/get-status/' . $id) }}',
      success: function(data) {
        if(data[0].status != 'CREATED') {
          window.location = "{{ url('/thank-you/' . $id) }}";
        } else {
          poll();
        }
      },
      dataType: "json",
      complete: poll
    });
  }, 1500);
})();
</script>
@endpush