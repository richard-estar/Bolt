<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="insight-app-sec-validation" content="f1a18704-206f-4db6-abd6-0e6eb8df3711">
    <title>@yield('title')</title>

<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">


<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/animations.css">

</head>
<body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="/images/logo/logosm.png" alt="logo" width="250px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/booking">Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Faqs</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    @yield('body')
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
</body>
</html>
