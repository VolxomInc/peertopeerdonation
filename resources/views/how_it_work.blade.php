<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>How It Work-Donation</title>
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
<!-- Start provide help routie section -->
<header class="provide-help-routine-section py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 pt-lg-5 pt-0  center-cls">
                <img src="/images/bigthumb.jpg" class="img-fluid mt-4 mb-5 mb-lg-0" alt="thumb">
            </div>
            <div class="col-lg-8">
                <h2 class="work-title mb-4">Provide Help Routine</h2>
                <p class="work-para">You declare willingness to Provide Help (PH) of your spare money through your Back Office. Click on the provide help (PH) button to enter an amount you which to provide as a donation, agree to the warning and click “Commit”. Reward starts to grow the very date and hour you pledged to provide help at the pace of 6.666% per day, which in total is 100% in 15 days. 20% of your PH amount is matched to be donated to a participant who needs your help immediately. After you must have completed the PH process, uploaded the proof Of Donation (POD) and it's confirmed, the remaining 80% PH will be matched later. Maximum number of hours given to complete a donation order is 48hrs. Therefore make sure money is available before clicking the Provide Help button.</p>
            </div>
        </div>
    </div>
</header>
<!-- End provide help routie section -->
<!-- Start Get help routine section -->
<header class="get-help-routine-section py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="work-title mb-4">Get Help Routine</h2>
                <p class="work-para">The maturity/release date is 7 days after a successful PH, you're free to Get Help (GH) from other participants if you wish, you can allow your rewards to grow to 100% in 15 days before getting help. Click on the Get Help button. All your rewards will be listed for you to choose, you're entitled to include your matured bonuses. Measure puts in place in the system warrants you to recommit a 25% of your total GH amount. This rules are created to curtail excessive GH of bonuses, creation of multiple accounts to illegally acquiring bonuses and to discourage “hit and run participants” and also, more importantly, to maintain equilibrium in the system and to ensure that at all times, PH is available in the community. <strong>OUR AIM IS SUSTAINABILITY.</strong> The 25% recommitment Donation is still yours, and will continue to grow immediately and you can GH it when it is matured/released normally 7 days</p>
            </div>
            <div class="col-lg-4 pt-5 center-cls">
                <img src="/images/laptop.jpg" class="img-fluid pt-lg-4 pt-0 mt-lg-5 mt-0" alt="laptop">
            </div>
        </div>
    </div>
</header>
<!-- End Get help routine section -->
<!-- Start referral bonus section -->
<header class="referral-bouns-section py-5">
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-4 pt-lg-3 pt-0  center-cls">
                <img src="/images/userlaptop.jpg" class="img-fluid mb-lg-0 mb-5" alt="userlaptop">
            </div>
            <div class="col-lg-8">
                <h2 class="work-title mb-4">Referral Bonus</h2>
                <p class="work-para">10% Referral Bonus Guaranteed<br>
                    You will get 10% from all donations of the Member(s) you invited. Inviting new members into the Platform is your additional contribution to its development.<br>
                    Although Nobody forces a member of the Platform to invite new Members. But at the same time, understanding that GDC can’t excel without development and member’s encouragement in the form of referral bonuses motivates many people to take an active position.</p>
            </div>
        </div>
    </div>
</header>
<!-- End referral bonus section -->
<!-- Start manager bonuses section -->
<header class="manager-bonuses-section py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="work-title mb-4">Manager Bonuses</h2>
                <p class="work-para mb-4">These uncommon bonuses aren't easily found but a promise in GDC. Its pays to be a responsible leader. Managers of this Community can create their own multi-level structures and get a bonus from each donation of every participant in their structures. This is a multi-level bonus, thus a Manager can have his own leader whose rank is higher. Manager’s bonus depends on his level in the Community: Managers get to enjoy bonuses to the 4th generation..</p>
                <ul type="1">
                    <li class="work-para">5% bonuses on 1st level Down lines</li>
                    <li class="work-para">3% bonuses on 2st level Down lines</li>
                    <li class="work-para">2% bonuses on 3st level Down lines</li>
                    <li class="work-para">1% bonuses on 4st level Down lines</li>
                </ul>
            </div>
            <div class="col-lg-4 pt-5 center-cls">
                <img src="/images/searchlaptop.jpg" class="img-fluid mt-lg-5 mt-0" alt="searchlaptop">
            </div>
        </div>
    </div>
</header>
<!-- End manager bonuses section -->
<!-- Start letter of happiness section -->
<header class="letterof-happiness-section py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 center-cls">
                <img src="/images/whiteuserlaptop.jpg" class="img-fluid" alt="whiteuserlaptop">
            </div>
            <div class="col-lg-8 pt-4">
                <h2 class="work-title mb-4">Letter of Happiness</h2>
                <p class="work-para">3% Letter of Happiness Bonus<br>You will get 3% Whenever you write a letter of Happiness about getting help and upload it to your facebook wall, copy the link of your facebook letter of happiness and paste in the space provided.</p>
            </div>
        </div>
    </div>
</header>
<!-- End letter of happiness section -->
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