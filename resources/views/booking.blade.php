@extends('layouts.alternate')

@section('title')
    Booking | Catch A Vibes
@endsection


@section('body')
    <div class="container">
        <h1 class="web-title1">Book Your Next Adventure</h1>
       <fieldset>

<!-- Text input-->
<form method="POST">
    @csrf
    <div class="row">
        {{-- This is the booking section of the form  --}}
        <div class="col">
                <h1>Booking Information</h1>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>
  <div class="col-md-5">
  <input id="textinput" name="fname" type="text" placeholder="First name" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">Last name</label>
  <div class="col-md-5">
  <input id="lname" name="lname" type="text" placeholder="Last name" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone</label>
  <div class="col-md-5">
  <input id="phone" name="phone" type="phone" placeholder="000-000-0000" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="email@email.com" class="form-control input-md" required="">

  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="destinations">Destinations</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="destinations-0">
      <input type="checkbox" name="destinations[]" id="destinations-0" value="kingston" @if( isset($destination) && $destination == "Kingston")checked @endif>
      Kingston $180
    </label>
	</div>
  <div class="checkbox">
    <label for="destinations-1">
      <input type="checkbox" name="destinations[]" id="destinations-1" value="portland" @if( isset($destination) && $destination == "Portland")checked @endif>
      Portland $200
    </label>
	</div>
  <div class="checkbox">
    <label for="destinations-2">
      <input type="checkbox" name="destinations[]" id="destinations-2" value="negril" @if( isset($destination) && $destination == "Negril") checked @endif>
      Negril $280
    </label>
	</div>
  <div class="checkbox">
    <label for="destinations-3">
      <input type="checkbox" name="destinations[]" id="destinations-3" value="ocho rios"  @if(isset($destination) && $destination == "Ocho Rios")checked @endif>
      Ocho Rios $240
    </label>
	</div>
  <div class="checkbox">
    <label for="destinations-4">
      <input type="checkbox" name="destinations[]" id="destinations-4" value="montego bay" @if(isset($destination) && $destination == "Montego Bay")checked @endif>
      Montego Bay $260
    </label>
	</div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tickets">Adult </label>

  <div class="col-md-2">
    <select id="tickets" name="adults" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tickets">Children</label>

  <div class="col-md-2">
    <select id="tickets" name="children" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
  </div>
</div>

<!--- Date ---------->
<div class="col-md-4">
<div class="form-group">
<span class="form-label">Tour Date</span>
<input class="form-control" type="date" name="date">
</div>
</div>
</div>{{--   !!!!! this is the closing div for the booking section --}}

        {{-- This is the payment section of the form  --}}
        <div class="col">
            <h1>Payment Information</h1>
<div id="payment">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cc_num">Credit/Debit Card number</label>
  <div class="col-md-8">
  <input id="cc_num" name="cc_num" type="text" placeholder="0000 0000 0000 0000" class="form-control input-md" required="" maxlength="16" required>

  </div>
</div>

<div class="row">
 <!-- Select Basic -->
<div class="form-group col">
  <label class="col-md-6 control-label" for="month">Exp month</label>
  <div class="col-md-6">
    <select id="month" name="month" class="form-control" required>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group col">
  <label class="col-md-6 control-label" for="year">Exp year</label>
  <div class="col-md-6">
    <select id="year" name="year" class="form-control" required>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
      <option value="2026">2026</option>
      <option value="2027">2027</option>
      <option value="2028">2028</option>
      <option value="2029">2029</option>
      <option value="2030">2030</option>
      <option value="2031">2031</option>
    </select>
  </div>
</div>

</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="cvc">CVC (Three digit code on back)</label>
  <div class="col-md-4">
  <input id="cvc" name="cvc" type="text" placeholder="" class="form-control input-md" required="" maxlength="3">

  </div>
</div>
</div>

<!-- Conditional Requirement -->
<div class="checkbox">
    <label for="destinations-1">
      <input type="checkbox" id="cash" onclick="toggle()">
      Pay with with cash <br>
      <h6>By paying with cash I agree to advise my tour guide 30 minutes ahead of time that I need to complete payment</h6>
    </label>
	</div>
<!-- Button -->
<input type="hidden" value="180" name="amount">
<div class="form-group">
  {{-- <label class="col-md-4 control-label" for="submit"></label> --}}
  <div class="col-md-4">
    <button id="submit_card" formaction="/booking" name="submit" class="btn btn-primary">CONTINUE WITH PAYMENT </button>
  </div>

  <div class="col-md-4">
    <button id="submit_cash" formaction="/booking_cash" name="submit" class="btn btn-primary" style="display:none" >CONTINUE WITH BOOKING </button>
  </div>
</div>
        </div> {{--   !!!!! this is the closing div for the payment section --}}

    </div>
 {{ csrf_field() }}
</fieldset>
</form>

    </div>
     <script>
         //function that toggles visibilty of payment section and buttons
        function toggle() {

            //retrieve checkbox object
            var cash = document.getElementById("cash");

            //retreive payment section object
            var payment_section= document.getElementById('payment');

            //retrieve card button object
            var payment_card= document.getElementById('submit_card');

            //retrieve cash button object
            var payment_cash= document.getElementById('submit_cash');

            //retrive credit card input fields
            var cc_num = document.getElementById('cc_num');
            var month = document.getElementById('month');
            var year = document.getElementById('year');
            var cvc = document.getElementById('cvc');

        if (cash.checked == true) {
            payment.style.display = "none";
            payment_card.style.display = "none";
            payment_cash.style.display = "block";

            cc_num.required = false;
            month.required = false;
            year.required = false;
            cvc.required = false;

        } else {
             payment.style.display = "block";
             payment_card.style.display = "block";
            payment_cash.style.display = "none";
        }
        }
    </script>
@endsection
