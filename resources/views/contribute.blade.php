@extends('framework.barebone')

@push('css')
.carousel-item {
    height: 233px;
    min-height: 233px;
    background: no-repeat center center scroll;
    -webkit-background-size: contain;
    -moz-background-size: contain;
    -o-background-size: contain;
    background-size: contain;
}
@endpush

@section('content')
<div class="container" style="padding-top: 58px;">
  <div class="row" style="margin-top: 1em;">
    <div class="col-sm-4"><img src="img/collaborations/bcf.svg" width="160"></div>
    <div class="col">
      <h1>Ge ditt bidrag</h1>
      <div class="row">
        <div class="col-sm-6">
          Här kan du ge ditt bidrag till Barncancerfonden och som tack skickar vi dig ett 2-pack meningsfulla strumpor som är elegant förpackade.
        </div>
        <div class="col-sm-6" style="height: 233px; margin-bottom: 1rem;">
          <div id="productIndicators" class="carousel slide" data-ride="carousel" style="height: 233px;">
            <ol class="carousel-indicators">
              <li data-target="#productIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#productIndicators" data-slide-to="1"></li>
              <li data-target="#productIndicators" data-slide-to="2"></li>
              <li data-target="#productIndicators" data-slide-to="3"></li>
              <li data-target="#productIndicators" data-slide-to="4"></li>
              <li data-target="#productIndicators" data-slide-to="5"></li>
              <li data-target="#productIndicators" data-slide-to="6"></li>
              <li data-target="#productIndicators" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner" style="height: 233px;">
              <div class="carousel-item active" style="background-image: url('img/productimages/1.jpg')">
              </div>
              <div class="carousel-item" style="background-image: url('img/productimages/2.jpg')">
              </div>
              <div class="carousel-item" style="background-image: url('img/productimages/3.jpg')">
              </div>
              <div class="carousel-item" style="background-image: url('img/productimages/4.jpg')">
              </div>
              <div class="carousel-item" style="background-image: url('img/productimages/5.jpg')">
              </div>
              <div class="carousel-item" style="background-image: url('img/productimages/6.jpg')">
              </div>
              <div class="carousel-item" style="background-image: url('img/productimages/7.jpg')">
              </div>
              <div class="carousel-item" style="background-image: url('img/productimages/8.jpg')">
              </div>
            </div>
            <a class="carousel-control-prev" href="#productIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
      <form action="/bidra" class="needs-validation" method="POST" novalidate>
        {{ csrf_field() }}
        <input type="hidden" name="isphone" value="{{ $agent->isPhone() ? 'true' : 'false' }}">
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-12">
            <label for="phone">Mobiltelefonnummer</label>
            <input type="text" name="phone" id="phone" placeholder="Mobiltelefonnummer" class="form-control" required>
            <div class="invalid-feedback">
              Du måste fylla i ditt mobiltelefonnummer.
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-6">
            <label for="firstname">Förnamn*</label>
            <input type="text" name="firstname" id="firstname" placeholder="Förnamn" class="form-control" required>
            <div class="invalid-feedback">
              Du måste fylla i ditt förnamn.
            </div>
          </div>
          <div class="form-group col-sm-12 col-md-6">
            <label for="lastname">Efternamn*</label>
            <input type="text" name="lastname" id="lastname" placeholder="Efternamn" class="form-control" required>
            <div class="invalid-feedback">
              Du måste fylla i ditt efternamn.
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-12">
            <label for="careof">C/O</label>
            <input type="text" name="careof" id="careof" placeholder="C/O" class="form-control">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-12">
            <label for="address">Adress*</label>
            <input type="text" name="address" id="address" placeholder="Adress" class="form-control" required>
            <div class="invalid-feedback">
              Du måste fylla i din adress.
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-4">
            <label for="zipcode">Postnummer*</label>
            <input type="text" name="zipcode" id="zipcode" placeholder="Postnr" class="form-control" required>
            <div class="invalid-feedback">
              Du måste fylla i ditt postnummmer.
            </div>
          </div>
          <div class="form-group col-sm-4">
            <label for="city">Ort*</label>
            <input type="text" name="city" id="city" placeholder="Ort" class="form-control" required>
            <div class="invalid-feedback">
              Du måste fylla i din ort.
            </div>
          </div>
          <div class="form-group col-sm-4">
            <label for="country">Land<sup>*</sup></label>
            <select id="country" name="country" class="custom-select" required>
              <option value="" selected>Välj land</option>
              <option value="Sverige">Sverige</option>
              <option value="Norge">Norge</option>
              <option value="Finland">Finland</option>
              <option value="Island">Island</option>
              <option value="Danmark">Danmark</option>
            </select>
            <div class="invalid-feedback">
              Du måste välja land.
            </div>
            <small>För tillfället levererar vi endast inom norden.</small>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-12">
            <label for="email">E-post*</label>
            <input type="email" name="email" id="email" placeholder="E-post" class="form-control" required>
            <div class="invalid-feedback">
              Du måste fylla i din e-postadress.
            </div>
          </div>
        </div>
        <div class="form-row align-items-center">
          <div class="col">
            <div class="form-row">
              <div class="col">Välj antal strumpor per storlek<sup>*</sup></div>
            </div>
            <div class="form-group form-row">
              <label for="count37" class="col-2 col-form-label">37-40</label>
              <div class="col-4">
                <input type="number" name="count37" id="count37" value="0" class="form-control" required>
              </div>
            </div>
            <div class="form-group form-row">
              <label for="count40" class="col-2 col-form-label">40-45</label>
              <div class="col-4">
                <input type="number" name="count40" id="count40" value="0" class="form-control" required>
                <div class="invalid-feedback">
                  Du måste välja något antal.
                </div>
              </div>
            </div>
          </div>
          <div class="col text-center">
            <h5><strong>Summa:</strong> <span id="sum">0</span>kr</h5>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col">
            <button type="submit" class="btn btn-light"><img src="img/Swish_Logo_Primary_RGB.png" height="25"> Ge din gåva med Swish</button>
          </div>
        </div>
      </form>
      <p></p>
    </div>
  </div>
</div>
@endsection

@push('js')
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }

        if($('#count37').val()+$('#count40') === 0) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

$('#count37, #count40').change(function() {
    var sum = $('#count37').val()*149+$('#count40').val()*149;
    $('#sum').text(sum);
});
</script>
@endpush
