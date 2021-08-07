@extends('layouts.main')

@section('title')
Home | Catch A Vibes
@endsection

@section('body')

{{-- ----------------------------------- slider ------------------------------------------------------------------------------- --}}
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
      <div class="carousel-item carousel-item-mod active" style="background-image:linear-gradient(0deg, rgba(5, 5, 5, 0.2), rgba(46, 42, 44, 0.2)), url('/images/slide2/image2.jpg')">
        <div class="carousel-caption d-none d-md-block">
            {{-- <img src="/images/logo/logobg.png" alt="" width="400"> --}}
            <img class="text-focus-in" src="/images/logo/logobg.png" alt="" width="400">
             <h2 class="display-4 tracking-in-expand">Catch A Vibes Bolt Tours and Getaways</h2>
          <p class="lead tracking-in-expand">Breathtaking and Memorable Vacation Experiences </p>
        </div>
      </div>

      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item carousel-item-mod" style="background-image: linear-gradient(0deg, rgba(5, 5, 5, 0.2), rgba(46, 42, 44, 0.2)), url('/images/slide2/image3.jpg')">
        <div class="carousel-caption d-none d-md-block">
            {{-- <img src="/images/logo/logobg.png" alt="" width="400"> --}}
            <h2 class=" slidetxt text-focus-in ">Accomodation available</h2>
            <p class="lead tracking-in-expand-fwd"><button type="button" class="btn btn-primary">Click to Learn More</button></p>
        </div>
      </div>

          <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item carousel-item-mod" style="background-image: linear-gradient(0deg, rgba(5, 5, 5, 0.2), rgba(46, 42, 44, 0.2)), url('/images/slide2/image4.jpg')">
        <div class="carousel-caption d-none d-md-block">
            {{-- <img src="/images/logo/logobg.png" alt="" width="400"> --}}
            <h2 class=" slidetxt text-focus-in ">Packages Starting At $180 USD</h2>
            <p class="lead tracking-in-expand-fwd"><button type="button" class="btn btn-primary">Click to Learn More</button></p>
        </div>
      </div>

         <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item carousel-item-mod" style="background-image:linear-gradient(0deg, rgba(5, 5, 5, 0.2), rgba(46, 42, 44, 0.2)), url('/images/slide2/image1.jpg')">
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


{{-- ----------------------------------- End slider ------------------------------------------------------------------------------- --}}



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
<span class="form-label">Destination</span>
<select class="form-control">
<option>Kingston</option>
<option>Portland</option>
<option>Montego Bay</option>
<option>Ocho Rios</option>
<option>Negril</option>
<option>All Destinations</option>
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<span class="form-label">Tour Date</span>
<input class="form-control" type="date">
</div>
</div>

<div class="col-md-4">
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

</div>
</div>
<div class="col-md-2">
<div class="form-btn">
<button class="submit-btn">Book Tour</button>
</div>
</div>
</div>
</form>
    </div>

</div>
{{-- -------------------------------------------end  BOOKING SECTION ---------------------------------------- --}}
<!-- Page Content -->




{{-- -------------------------------- Company Introduction -------------------------------------------------------------- --}}
<section class="py-5">
  <div class="container">
    <h1 class="web-title1">Company Introduction</h1>
    <p class="lead">
        We offer a variety of tour experiences to major destinations including Kingston, Montego Bay, Negril, Ocho Rios, and Portland. Licensed and certified tour operators and tour guides through The Tourist Product Developemnt Company will make your experiences memorable and safe. We pride ourselves through differentiation from our competitors.
    </p>
  </div>
</section>
{{-- -------------------------------- End Company Introduction -------------------------------------------------------------- --}}

{{-- --------------------------------------------- Locations-------------------------------------------------------- --}}



<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item services-section" data-ride="carousel">
<h1 class="service-title-text container">Places that we Visit</h1>
  <!--Controls-->
  <div class="controls-top container">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><</i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next">></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>

  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col-md-3" style="float:left">
       <div class="card mb-2">
          <img class="card-img-top"
            src="images/general/bobmarleymuseum.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Bob Marley Museum</h4>
            <p class="card-text">Located in St Andrew</p>
            <a class="btn btn-primary">Book Tour Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="images/general/dunnsriver.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Dunns River Falls</h4>
            <p class="card-text">Located in Ocho Rios</p>
            <a class="btn btn-primary">Book Tour Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="images/general/bostonjerkcenter.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Boston Jerk Center</h4>
            <p class="card-text">Portland</p>
            <a class="btn btn-primary">Book Tour Now</a>
          </div>
        </div>
      </div>

       <div class="col-md-3" style="float:left">
       <div class="card mb-2">
          <img class="card-img-top"
            src="images/general/puertoseco.jpg" height="232" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Puerto Seco Beach</h4>
            <p class="card-text">Located in Ocho Rios</p>
            <a class="btn btn-primary">Book Tour Now</a>
          </div>
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="images/general/portroyal.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Port Royal</h4>
            <p class="card-text">Located in Kingston</p>
            <a class="btn btn-primary">Book Tour Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="images/general/hopegarden.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Hope Botanical Garden</h4>
            <p class="card-text">Located in Kingston</p>
            <a class="btn btn-primary">Book Tour Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="images/general/devonhouse.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Devon House</h4>
            <p class="card-text">Located in Kingston</p>
            <a class="btn btn-primary">Book Tour Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="images/general/bluelagoon.jpg" height="232" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Blue Lagoon</h4>
            <p class="card-text">Located in Portland</p>
            <a class="btn btn-primary">Book Tour Now</a>
          </div>
        </div>
      </div>

    </div>
    <!--/.Second slide-->



  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
{{-- ----------------------------------------------End Locations ------------------------------------------------ --}}

{{-- -------------------------------- Destinations -------------------------------------------------------------- --}}


<div class="container-fluid promobg d-flex justify-content-center align-items-center"  style="background-image: linear-gradient(0deg, rgba(5, 5, 5, 0.5), rgba(46, 42, 44, 0.5)),url('images/general/offergbg2.jpg')">
    <div class="deals-section">
        <p class="web-title2">Our Tour Destinations</p>
        <p class="web-title3">Kingston - Ocho Rios - Montego Bay - Negril - Portland</p>
        <p class="web-text1">Tours packages starting at </p>
        <p class="web-text2">$180 USD Per person</p>
    </div>
</div>
{{-- -------------------------------- End Destinations -------------------------------------------------------------- --}}


{{-- -----------------------------------------services offered ---------------------------------------------------------- --}}
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

{{-- -----------------------------------------services offered ---------------------------------------------------------- --}}

{{-- -----------------------------------------Photo Gallery  ---------------------------------------------------------- --}}
<div class="container">

<p class="web-title1">Bolt Tour Image Gallery</p>
    <!-- Gallery -->
<!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="images/gallery/img1.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="images/gallery/img13.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="images/gallery/img9.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="images/gallery/img3.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="images/gallery/img4.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="images/gallery/img5.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
</div>
<!-- Gallery -->
<!-- Gallery -->

</div>
{{-- ----------------------------------------- End Photo Gallery  ---------------------------------------------------------- --}}


{{-- -----------------------------------------footer ---------------------------------------------------------- --}}
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
                        <h4 class="text-color">Local : <br> 876-669-6449 <br> 876-497-2186</h4>
                        <h4 class="text-color">International : <br> +1-585-309-1745</h4>
                        <h4><a href="#" class="text-color footerlink">bolttourscs@gmail.com</a></h4>
                        <p>Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>
        {{-- ----------------------------------------- end footer ---------------------------------------------------------- --}}
@endsection
