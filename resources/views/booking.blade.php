@extends('layouts.alternate')

@section('title')
    Booking | Catch A Vibes
@endsection


@section('body')

    <div class="container">
        <h1 class="web-title1">Book Your Next Adventure</h1>
       <fieldset>

{{-- <!-- Form Name -->
<legend></legend> --}}

<!-- Text input-->
<form method="POST" action="/booking">
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="First name" class="form-control input-md" required="">

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
      <input type="checkbox" name="destinations" id="destinations-0" value="1">
      Kingston $180
    </label>
	</div>
  <div class="checkbox">
    <label for="destinations-1">
      <input type="checkbox" name="destinations" id="destinations-1" value="2">
      Portland $200
    </label>
	</div>
  <div class="checkbox">
    <label for="destinations-2">
      <input type="checkbox" name="destinations" id="destinations-2" value="3">
      Negril $280
    </label>
	</div>
  <div class="checkbox">
    <label for="destinations-3">
      <input type="checkbox" name="destinations" id="destinations-3" value="4">
      Ocho Rios $240
    </label>
	</div>
  <div class="checkbox">
    <label for="destinations-4">
      <input type="checkbox" name="destinations" id="destinations-4" value="5">
      Montego Bay $260
    </label>
	</div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tickets">Guests</label>

  <div class="col-md-2">
    <select id="tickets" name="tickets" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="">3</option>
      <option value="">4</option>
      <option value="">5</option>
      <option value="">6</option>
    </select>
  </div>
</div>

<div class="col-md-4">
<div class="form-group">
<span class="form-label">Tour Date</span>
<input class="form-control" type="date" name="date">
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cc_num">Credit/Debit Card number</label>
  <div class="col-md-5">
  <input id="cc_num" name="cc_num" type="text" placeholder="0000 0000 0000 0000" class="form-control input-md" required="">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="month">Exp month</label>
  <div class="col-md-2">
    <select id="month" name="month" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="">3</option>
      <option value="">4</option>
      <option value="">5</option>
      <option value="">6</option>
      <option value="">7</option>
      <option value="">8</option>
      <option value="">9</option>
      <option value="">10</option>
      <option value="">11</option>
      <option value="">12</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="year">Exp year</label>
  <div class="col-md-2">
    <select id="year" name="year" class="form-control">
      <option value="1">2021</option>
      <option value="2">2022</option>
      <option value="">2023</option>
      <option value="">2024</option>
      <option value="">2025</option>
      <option value="">2026</option>
      <option value="">2027</option>
      <option value="">2028</option>
      <option value="">2029</option>
      <option value="">2030</option>
      <option value="">2031</option>
    </select>
  </div>
</div>

{{-- <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">CVC (Three digit code on back)</label>
  <div class="col-md-5">
  <input id="cvc" name="cvc" type="text" placeholder="Last name" class="form-control input-md" required="">

  </div>
</div> --}}

<!-- Button -->
<input type="hidden" value="$180">
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">PROCEED WITH PAYMENT </button>
  </div>
</div>
 {{ csrf_field() }}
</fieldset>
</form>

    </div>
@endsection
