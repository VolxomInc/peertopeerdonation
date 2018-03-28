<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>News-Donation</title>
    <!-- APP CSS -->
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- AniCollection.css library -->
</head>
<body>

<!-- Start Navbar -->
<header class="navbar-section">
    <div class="container px-0">
        <nav class="navbar navbar-toggleable-md navbar-light px-0">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 53 53" width="30px" height="30px" style="enable-background:new 0 0 53 53;" xml:space="preserve">
                  <g>
                      <g>
                          <path d="M2,13.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,13.5,2,13.5z" fill="#000000"/>
                          <path d="M2,28.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,28.5,2,28.5z" fill="#000000"/>
                          <path d="M2,43.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,43.5,2,43.5z" fill="#000000"/>
                      </g>
                  </g>
                </svg>
            </button>
            <a class="navbar-brand " href="/"><img src="/images/logo.png" class="img-fluid" alt="logo"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="/">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about_us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/how_it_work">How it works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/legality">Legality</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Ideology</a>
                    </li>
                    @if(!Auth::user())
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="/sign-in">Login</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link btn btn-danger" href="/signup">Join Now</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger" href="/logout">Logout</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- End Navbar -->
<!-- Start News section -->
<header class="news-section pb-4">
    <div class="container">
        <h2 class="news-title text-center py-3 mb-0">News</h2>
        <!-- Start blow-news-banner-text section -->
        <div class="row">
            <div class="col-lg-4 col-md-4 mb-2 ">
                <img src="images/goodnews.jpg" class="img-fluid" alt="news">
            </div>
            <div class="col-lg-8 col-md-8 mb-2">
                <p class="calndr-font mb-0"><i class="fa fa-calendar pr-2"></i>Feb 07, 2018</p>
                <h2 class="news-title py-2 mb-0">Good News</h2>
                <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, […]</p>
                <a href="newsdetail.html" class="read-more pb-2">Read more ›</a>
            </div>
            <div class="col-lg-4 col-md-4 mb-2">
                <img src="images/donationwithhand.jpg" class="img-fluid" alt="news">
            </div>
            <div class="col-md-8 mb-2">
                <p class="calndr-font mb-0"><i class="fa fa-calendar pr-2"></i>Feb 07, 2018</p>
                <h2 class="news-title py-2 mb-0">PROOF OF DONATION...</h2>
                <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, […]</p>
                <a href="newsdetail.html" class="read-more pb-2">Read more ›</a>
            </div>
            <div class="col-lg-4 col-md-4 mb-2">
                <img src="images/goodnews.jpg" class="img-fluid" alt="news">
            </div>
            <div class="col-md-8 mb-2">
                <p class="calndr-font mb-0"><i class="fa fa-calendar pr-2"></i>Feb 07, 2018</p>
                <h2 class="news-title py-2 mb-0">Good News</h2>
                <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, […]</p>
                <a href="newsdetail.html" class="read-more pb-2">Read more ›</a>
            </div>
            <div class="col-lg-4 col-md-4 mb-2">
                <img src="images/donationwithhand.jpg" class="img-fluid" alt="news">
            </div>
            <div class="col-lg-8 col-md-8  mb-2">
                <p class="calndr-font mb-0"><i class="fa fa-calendar pr-2"></i>Feb 07, 2018</p>
                <h2 class="news-title py-2 mb-0">PROOF OF DONATION...</h2>
                <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, […]</p>
                <a href="newsdetail.html" class="read-more pb-2">Read more ›</a>
            </div>
        </div>

    </div>
</header>
<!-- End News section -->
<!-- Start footer section -->
<header class="footer-section text-center py-5">
    <div class="container">
        <ul class="nav-sect">
            <li><a href="/">Home</a></li>
            <li><a href="/about_us">About Us</a></li>
            <li><a href="/how_it_work">How it Works</a></li>
            <li><a href="">Ideology</a></li>
            <li><a href="/legality">Legality</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
        <ul class="social-font m-0">
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
</header>
<!-- End footer section -->
<!-- Start copy rights section -->
<header class="copy-rights-section text-center py-3">
    <div class="container">
        <p class="mb-0">Copyrights 2018, All rights reserved.</p>
    </div>
</header>
<!-- End copy rights section -->


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Raleway:400,700', 'Montserrat:400,700']
        }
    });
</script>
<script>

    jQuery(document).ready(function(){});
</script>
</body>
</html>