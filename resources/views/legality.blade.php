<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Legality-Donation</title>
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
<!-- Start global donation platform section -->
<header class="global-donation-platform-text-section py-3">
    <div class="container">
        <h2 class="global-donation-platform-title text-center pt-4 mb-0">Global Donation Platform</h2>
        <p class="small-title text-center">Overview of the Global Donation Platform Community</p>
        <p class="para pt-2">1. Global Donation Platform is a digital computer platform which connects participants requiring financial assistance with participants who are able and willing to provide such financial assistance. The financial assistance is so provided by the sender and accepted by the recipient as a donation and no asset nor is any liability created by the transaction.</p>
        <p class="para pt-2">2. Participants are clearly informed that the assistance they offer to provide is treated as a donation and that they will not be entitled to receive any assistance in return nor does their participation in the system entitle them to any rewards. Participants are furthermore also warned not to offer assistance from money which they may require to sustain themselves but to do so only from surplus funds which they may have available. There is a warning on the website and personal Office that members should partake with spare money only. Member is not allowed to provide help until he ticked the box that he is aware with the risks.</p>
        <p class="para pt-2">3. After a member of Community provides help, his account gets credited with Donation-Reward. Donation-Reward (D-R) is the unit of reward with which participants are rewarded for their participation in the scheme. From the moment that a participant offers assistance the Ghanaian Cedi (GHS) value of such assistance is converted into D-Rs. Currently the conversion rate of GHS to D-R is one on one but the system may adjust this rate upwards or downwards to maintain an equilibrium between the offered assistance and the requested assistance.</p>
        <p class="para pt-2">4. Whenever an existing member requires assistance and places his/her request on the system, the D-Rs available in his account is converted back into GHS at the then applicable conversion rate to determine the GHS amount such participant is entitled to request.</p>
        <p class="para pt-2">5. D-R usually keeps growing at the rate of 30% per month. It should be emphasized that 30% is not a growth of the invested money, but refers to the growth of D-R. D-R forms a part of the computer code in the programming languages (JavaScript, PHP, other) used in writing the system program. D-R consists of different parameters: amount, confirmation, freezing status, conversion rate et al. From the aforesaid it is clear that D-R cannot be substituted with money since money do not have any of these parameters which is present in D-R. For this reason D-R cannot be considered to be a currency. The main purpose of D-R is to balance the process of matching people who request assistance with people who is able and willing to provide assistance. Because D-R includes a lot of other parameters, besides amount (and its quantitative growth), the system is able to balance the matching process regardless of how many people are involved and regardless of whether new participants join the Community or not. In contrast, in a Ponzi schemes money invested by an investor is taken on the promise a return on that investment. Global Donation Platform does not PROMISE any return and clear warnings to this effect is included on the website. Instead, the Global Donation Platform deals with D-Rs, which is a programming code and differs significantly from currencies and/or financial assets as set out afore.</p>
        <p class="para pt-2">6. It should be emphasized that participants in Global Donation Platform donate money not to Global Donation Platform itself (Global Donation Platform is not a legal persona, is not involved in financial operations and does not operate a bank account), participants donate money to each other. This refutes the notion that the Global Donation Platform takes deposits or offers a return of investments since this is impossible in view of the aforesaid. Likewise, when one participant donates money to a fellow participant, no legal obligation is created nor does any relationship of whatsoever nature come into being between them. In actual fact, there exist a real probability that such participants may not even be acquainted. Aside from the moral obligation to reciprocate no legally binding relationship is called into being, the interaction between the parties being a DONATION and NOT an investment or deposit. Participants may have an expectation that when the need arise there will be a fellow participant who will donate to them too. This however remains just an expectation, the fulfilment of which is entirely dependent on other participants. The decision to donate remains exclusively with participants in the system and the computer program is merely the matching platform.</p>
        <p class="para pt-2">7. Expectation of a reciprocity is a part of donation/gift practices how they were historically described in cultural anthropology. The word “donation” is defined as “an act or instance of presenting something as a gift, grant, or contribution”. The French anthropologist, Marcel-Israel Mauss, considered to be the father of modern French anthropology, provides possibly the most important description of the elements that defines the concept of the exchange of donations as understood in ancient societies. These can be summarized as follows:</p>
        <ul type="i">
            <li class="para">The obligation to give gifts (showing oneself as being generous and thus worthy of respect)</li>
            <li class="para">The obligation to receive them (showing respect to the giver and concomitantly showing one’s own generosity),and</li>
            <li class="para">The obligation to return the gift (demonstrating that one’s honor is - at least – equivalent to that of the originalgiver).</li>
        </ul>
        <p class="para">These very same elements of a donation (gift) is confirmed in the more recent works of Jacques Derrida and David Graeber. So, a reciprocity is a vital element of the concept of a donation and therefore the nature of donation is consistent with the very concept of a peer to peer mutual matching platform.</p>
        <p class="para pt-2">8. According to the experience of Global Donation Platform, Community members understand the nature of donation exchange process. Members donate spare money (for instance, in Ghana, a member can donate as less as 40 cedi. And there are members who participated for several years, who understand all the risks, and who are satisfied with a model which Global Donation Platform offers.</p>
    </div>
</header>
<!-- End global donation platform section -->
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