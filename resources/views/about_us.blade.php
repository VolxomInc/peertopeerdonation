<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aboutus-Donation</title>
    <!-- APP CSS -->
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- AniCollection.css library -->
</head>
<body>

<!-- Start Navbar -->
<header class="navbar-section">
    <div class="container  px-0">
        <nav class="navbar navbar-toggleable-md navbar-light  px-0">
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

<!-- Start About us section -->
<header class="aboutus-section py-4">
    <div class="container">
        <h3 class="aboutus-title text-center pb-2">About Us</h3>
        <p class="para">Global Donation Community is not a bank, we do not collect your money and we are not an online business, HYIP, investment, Loan or MLM program. Global Donation Community is a community where people help each other (Donation Community). We provide you a technical basic program/avenue, which helps millions of participants worldwide to find those who NEED help, and those who are ready to PROVIDE help for FREE. All funds transferred to other participants are help given by your own good will to another one, absolutely gratis. If you are completely confident and certain in your actions and make your mind to participate, we kindly ask you to study carefully all warnings and instructions first.</p>
    </div>
</header>
<!-- End About us section -->
<!-- start three step text -->
<header class="three-step-text text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="three-step-title">Non-Profit Oriented Goals</div>
                <p class="para pt-4">Global Donation Community is a non-profit organization managed by a dedicated team of volunteers who are also Participants in the Community. We are a non-denominational group, supported by the team members, who are committed to provide financial & social opportunities and to promote wellbeing to everyone in world.</p>
            </div>
            <div class="col-lg-4">
                <div class="three-step-title">A Community of helpers</div>
                <p class="para pt-4">Global Donation Community is a community of people providing each other financial help on the principle of gratuitousness, reciprocity & benevolence. In Global Donation Community you don’t have to make contracts or pledge your property, there are no lenders & no debtors. Everything is very simple: one participant asks for help – another one helps. The only thing that Global Donation Community demands from its participants is to be honest and kind to each other. You ask for financial help when you need it, you give financial help when you are able to do it.</p>
            </div>
            <div class="col-lg-4">
                <div class="three-step-title">Fund Dissemination</div>
                <p class="para pt-5">Global Donation Community is committed to serve humanity by integrating resources for people in need. Recognize the innate worth of all people & the value of diversity, Work to ensure equal opportunity to everyone, irrespective of race, gender, color, class, ethnicity, disability & location. You can help one & will get help from others which will return you a 100% in Local Currency & in Bitcoin in 15 days maximum. If you are willing to do so join us now.</p>
            </div>
        </div>
    </div>
</header>
<!-- End three step text -->
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
    $(".navbar .nav-link").on("click", function(){
        $(".navbar").find(".active").removeClass("active");
        $(this).addClass("active");
    });
</script>
</body>
</html>