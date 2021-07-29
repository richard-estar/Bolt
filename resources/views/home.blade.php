@extends('layouts.main')

@section('title')
Home | Catch A Vibes
@endsection

@section('body')


<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image:linear-gradient(0deg, rgba(5, 5, 5, 0.2), rgba(46, 42, 44, 0.2)), url('/images/slide2/image2.jpg')">
        <div class="carousel-caption d-none d-md-block">
            {{-- <img src="/images/logo/logobg.png" alt="" width="400"> --}}
            <img class="text-focus-in" src="/images/logo/logobg.png" alt="" width="400">
             <h2 class="display-4 tracking-in-expand">Catch A Vibes Bolt Tours and Getaways</h2>
          <p class="lead tracking-in-expand">Breathtaking and Memorable Vacation Experiences </p>
        </div>
      </div>

      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: linear-gradient(0deg, rgba(5, 5, 5, 0.2), rgba(46, 42, 44, 0.2)), url('/images/slide2/image3.jpg')">
        <div class="carousel-caption d-none d-md-block">
            {{-- <img src="/images/logo/logobg.png" alt="" width="400"> --}}
            <h2 class=" slidetxt text-focus-in ">Accomodation available</h2>
            <p class="lead tracking-in-expand-fwd"><button type="button" class="btn btn-primary">Click to Learn More</button></p>
        </div>
      </div>

          <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: linear-gradient(0deg, rgba(5, 5, 5, 0.2), rgba(46, 42, 44, 0.2)), url('/images/slide2/image4.jpg')">
        <div class="carousel-caption d-none d-md-block">
            {{-- <img src="/images/logo/logobg.png" alt="" width="400"> --}}
            <h2 class=" slidetxt text-focus-in ">Get  50% off your next tour</h2>
            <p class="lead tracking-in-expand-fwd"><button type="button" class="btn btn-primary">Click to Learn More</button></p>
        </div>
      </div>

         <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image:linear-gradient(0deg, rgba(5, 5, 5, 0.2), rgba(46, 42, 44, 0.2)), url('/images/slide2/image1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class=" slidetxt text-focus-in">Tours in jamaica's north coast</h2>
            <p class="lead tracking-in-expand-fwd"><button type="button" class="btn btn-primary">Click to Learn More</button></p>
        </div>
      </div>
    </div>



    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
{{-- ----------------------------------------------- BOOKING SECTION ---------------------------------------- --}}
<div class="booking ">
    <div class="booking-form container">
<form>
<div class="row no-margin">
<div class="col-md-3">
<div class="form-header">
<h2>Book Now</h2>
</div>
</div>
<div class="col-md-7">
<div class="row no-margin">
<div class="col-md-4">
<div class="form-group">
<span class="form-label">Check In</span>
<input class="form-control" type="date">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<span class="form-label">Check out</span>
<input class="form-control" type="date">
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<span class="form-label">Guests</span>
<select class="form-control">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
<span class="select-arrow"></span>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<span class="form-label">Kids</span>
<select class="form-control">
<option>0</option>
<option>1</option>
<option>2</option>
</select>
<span class="select-arrow"></span>
</div>
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-btn">
<button class="submit-btn">Check availability</button>
</div>
</div>
</div>
</form>
    </div>

</div>
{{-- -------------------------------------------end  BOOKING SECTION ---------------------------------------- --}}
<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="web-title1">Professional and friendly tour experiences</h1>
    <p class="lead">
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
    </p>
  </div>
</section>

<div class="container-fluid promobg d-flex justify-content-center align-items-center"  style="background-image: linear-gradient(0deg, rgba(5, 5, 5, 0.5), rgba(46, 42, 44, 0.5)),url('images/general/offergbg2.jpg')">
    <div class="deals-section">
        <p class="web-title2">SUMMER TOUR DEAL</p>
        <p class="web-title3">Ocho Rios - Montego Bay</p>
        <p class="web-text1">July 25 - September 10</p>
        <p class="web-text2">$3500 Per person</p>
    </div>
</div>


<div class="container">

    <div class="row">

    </div>

</div>


<div class="services-section">
    <div class="container ">
    <p class="service-title-text">SERVICES OFFERED</p>
    <div class="row">
        <div class="col">
            <ul class="list-display list-checkmarks">
                <li>Shuttle From Hotel to Tour Meetup</li>
                <li>Shuttle From Hotel to Tour Meetup</li>
                <li>Shuttle From Hotel to Tour Meetup</li>
                <li>Shuttle From Hotel to Tour Meetup</li>

            </ul>
        </div>

        <div class="col">
            <ul class="list-display list-checkmarks">
                <li>Shuttle From Hotel to Tour Meetup</li>
                <li>Shuttle From Hotel to Tour Meetup</li>
                <li>Shuttle From Hotel to Tour Meetup</li>
                <li>Shuttle From Hotel to Tour Meetup</li>

            </ul>
        </div>
    </div>

    </div>
</div>

<footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="index.html">
                            <img src="images/logo/logobg.png" alt="Logo Image" width="50%"/>
                        </a>
                        <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>

                        <a href="#" class="footerlink fa fa-facebook icons"></a>
                        <a href="#" class="footerlink fa fa-twitter icons" ></a>
                        <a href="#" class="footerlink fa fa-google icons" ></a>
                        <a href="#" class="footerlink fa fa-linkedin icons" ></a>
                        <a href="#" class="footerlink fa fa-youtube icons" ></a>
                        <a href="#" class="footerlink fa fa-instagram icons" ></a>
                        <a href="#" class="footerlink fa fa-pinterest icons" ></a>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*We Never Send Spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer ">
                            <li><a href="#" class="footerlink">About US</a>
                            </li>
                            <li><a href="#" class="footerlink">Press Centre</a>
                            </li>
                            <li><a href="#" class="footerlink">Best Price Guarantee</a>
                            </li>
                            <li><a href="#" class="footerlink">Travel News</a>
                            </li>
                            <li><a href="#" class="footerlink">Jobs</a>
                            </li>
                            <li><a href="#" class="footerlink">Privacy Policy</a>
                            </li>
                            <li><a href="#" class="footerlink">Terms of Use</a>
                            </li>
                            <li><a href="#" class="footerlink">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+1-202-555-0173</h4>
                        <h4><a href="#" class="text-color footerlink">support@traveler.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>
@endsection
