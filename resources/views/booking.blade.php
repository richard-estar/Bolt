@extends('layouts.alternate')

@section('title')
    Booking | Catch A Vibes
@endsection


@section('body')
    <div class="container">
        <h1 class="booking_title">Book Your Next Adventure</h1>
       <fieldset>

<!-- Text input-->
<form method="POST">
    @csrf
    <div class="row">
        {{-- This is the booking section of the form  --}}
        <div class="col">
                <h1 class="formheader">Booking Information</h1>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>
  <div class="col-md-10">
  <input id="textinput" name="fname" type="text" placeholder="First name" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">Last name</label>
  <div class="col-md-10">
  <input id="lname" name="lname" type="text" placeholder="Last name" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone</label>
  <div class="col-md-10">
  <input id="phone" name="phone" type="phone" placeholder="000-000-0000" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-10">
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

<div class="row">
    <!-- Select Basic -->
<div class="form-group col">
  <label class="col-md-4 control-label" for="tickets">Adult </label>

  <div class="col-md-10">
    <select id="adult_tickets" name="adults" class="form-control">
      <option value="1"  @if(isset($adults) && $adults == "1")selected @endif>1</option>
      <option value="2" @if(isset($adults) && $adults == "2")selected @endif>2</option>
      <option value="3" @if(isset($adults) && $adults == "3")selected @endif>3</option>
      <option value="4" @if(isset($adults) && $adults == "4")selected @endif>4</option>
      <option value="5" @if(isset($adults) && $adults == "5")selected @endif>5</option>
      <option value="6" @if(isset($adults) && $adults == "6")selected @endif>6</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group col">
  <label class="col-md-4 control-label" for="tickets">Children</label>

  <div class="col-md-10">
    <select id="children_tickets" name="children" class="form-control">
      <option value="1"  @if(isset($children) && $children == "1")selected @endif>1</option>
      <option value="2" @if(isset($children) && $children == "2")selected @endif>2</option>
      <option value="3" @if(isset($children) && $children == "3")selected @endif>3</option>
      <option value="4" @if(isset($children) && $children == "4")selected @endif>4</option>
      <option value="5" @if(isset($children) && $children == "5")selected @endif>5</option>
      <option value="6" @if(isset($children) && $children == "6")selected @endif>6</option>
    </select>
  </div>
</div>

<!--- Date ---------->
<div class="col-md-4">
<div class="form-group">
<span class="form-label control-label">Tour Date</span>
<input class="form-control" type="date" name="date" min="{{date("Y-m-d")}}" @if (isset($date))
  value="{{$date}}"
@endif>
</div>
</div>
</div>

</div>{{--   !!!!! this is the closing div for the booking section --}}

        {{-- This is the payment section of the form  --}}
        <div class="col paycol">
            <h1 class="formheader">Payment Information</h1>
<div id="payment">

    <div class="totals">
        <div class="row">
            <div class="col" id="adult_text">

            </div>
            <div class="col" id="adult_total"></div>
        </div>

        <div class="row">
            <div class="col" id="child"></div>
            <div class="col" id="child_total"></div>
        </div>

        <div class="row">
            <div class="col" id="total_label"><b>Total</b></div>
            <div class="col" id="total"></div>
        </div>
    </div>


<!-- Text input-->
<div class="form-group ccnum">
  <label class="col-md-10 control-label" for="cc_num">Credit/Debit Card number</label>
  <div class="col-md-12">
  <input id="cc_num" name="cc_num" type="text" placeholder="0000 0000 0000 0000" class="form-control input-md" required="" maxlength="16" required>

  </div>
</div>

<div class="row ccexp">
 <!-- Select Basic -->
<div class="form-group col">
  <label class="col-md-10 control-label" for="month">Exp month</label>
  <div class="col-md-10">
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
  <label class="col-md-10 control-label" for="year">Exp year</label>
  <div class="col-md-10">
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


<!-- Text input-->
<div class="form-group col">
  <label class="col-md-10 control-label" for="cvc">CVC</label>
  <div class="col-md-10">
  <input id="cvc" name="cvc" type="text" placeholder="" class="form-control input-md" required="" maxlength="3">

  </div>
</div>
</div>
</div>

{{-- <div id="result"></div> --}}

<!-- Conditional Requirement -->
<div class="checkbox pcheck">
    <label for="destinations-1">
      <input type="checkbox" id="cash" onclick="toggle()">
     <b>Pay with with cash</b>  <br><br>
      <h3>By paying with cash I agree to advise my tour guide 30 minutes ahead of time that I need to complete payment</h3>
    </label>
	</div>
<!-- Button -->
<input type="hidden" value="180" name="amount">
<div class="form-group">
  {{-- <label class="col-md-4 control-label" for="submit"></label> --}}
  <div class="col-md-4">
    <button id="submit_card" formaction="/booking" name="submit" class="btn btn-primary paybtn">CONTINUE WITH PAYMENT </button>
  </div>

  <div class="col-md-4">
    <button id="submit_cash" formaction="/booking_cash" name="submit" class="btn btn-primary paybtn" style="display:none" >CONTINUE WITH BOOKING </button>
  </div>
</div>
        </div> {{--   !!!!! this is the closing div for the payment section --}}

    </div>
 {{ csrf_field() }}
</fieldset>
</form>

    </div>
@endsection
