<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Signup-Donation</title>
  <!-- APP CSS -->
  <link rel="stylesheet" href="/css/app.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- AniCollection.css library -->
</head>
<body>

<!-- Start Navbar -->
<header class="navbar-section">
  <div class="container  px-0">
    <nav class="navbar navbar-toggleable-md navbar-light  px-0 ">
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
      <a class="navbar-brand " href=""><img src="/images/logo.png" class="img-fluid" alt="logo"></a>

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
          <li class="nav-item">
            <a class="nav-link btn btn-primary" href="/login">Login</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link btn btn-danger" href="/signup">Join Now</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<!-- End Navbar -->
<!-- Start Signup form section -->
<header class="form-section signup-bg">
  <div class="form-overlay">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 offset-lg-4 offset-md-3 pt-5">
          <form method="post" action="{{ route('signup-user') }}">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" class="form-control px-4" required name="user_name" id="user_name" placeholder="Username*">
              @if ($errors->has('user_name')) <p class="help-block" style="color: Red">{{ $errors->first('user_name') }}</p> @endif
            </div>
            <div class="form-group">
              <input type="email" class="form-control px-4"  name="email" id="email" required placeholder="Email*">
              @if ($errors->has('email')) <p class="help-block" style="color: Red">{{ $errors->first('email') }}</p> @endif
            </div>
            <div class="form-group">
              <input type="tel" class="form-control px-4" name="phone_number" id="phone_number" required placeholder="Phone Number*">
              @if ($errors->has('phone_number')) <p class="help-block" style="color: Red">{{ $errors->first('phone_number') }}</p> @endif
            </div>
            <div class="form-group">
              <input type="password" class="form-control px-4" name="password" id="password" required placeholder="Password*"><span id="result" class="pt-2"></span>
              @if ($errors->has('password')) <p class="help-block" style="color: Red">{{ $errors->first('password') }}</p> @endif
            </div>
            <div class="form-group">
              <input type="Password" class="form-control px-4" name="password_confirmation" id="password_confirmation" required  placeholder="Confirm Password*">
              @if ($errors->has('password_confirmation')) <p class="help-block" style="color: Red">{{ $errors->first('password_confirmation') }}</p> @endif
            </div>
            <div class="form-group">
              <select  required  name ="currency" class="form-control px-4" id="currency" placeholder="Select Currency to Use*">
                <option>Select Currency to Use*</option>
                <option>Cedi</option>
              </select>
              <img src="/images/down.png" class="img-fluid" alt="downarrow">
              @if ($errors->has('currency')) <p class="help-block" style="color: Red">{{ $errors->first('currency') }}</p> @endif
            </div>
            <div class="form-group">
              <select id="tigo_cash" required name="tigo_cash" class="form-control px-4" placeholder="Tigo Cash*">
                <option>Tigo Cash*</option>
                <option>MTN</option>
                <option>Vodafone</option>
              </select>
              <img src="/images/down.png" class="img-fluid" alt="downarrow">
              @if ($errors->has('tigo_cash')) <p class="help-block" style="color: Red">{{ $errors->first('tigo_cash') }}</p> @endif
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-4" name="mobile_money_name" id="mobile_money_name" required placeholder="Mobile Money Name*">
              @if ($errors->has('mobile_money_name')) <p class="help-block" style="color: Red">{{ $errors->first('mobile_money_name') }}</p> @endif
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-4" name="mobile_money_number" id="mobile_money_number" required placeholder="Mobile Money Number*">
              @if ($errors->has('mobile_money_number')) <p class="help-block" style="color: Red">{{ $errors->first('mobile_money_number') }}</p> @endif
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-4" name="bitcoin_address" id="bitcoin_address"  placeholder="Bitcoin Address (Optional)">
              @if ($errors->has('bitcoin_address')) <p class="help-block" style="color: Red">{{ $errors->first('bitcoin_address') }}</p> @endif
            </div>
            <div class="form-group">
              <input type="email" class="form-control px-4" name="referrer_email" id="referrer_email" required placeholder="Referrer Email*">
              @if ($errors->has('referrer_email')) <p class="help-block" style="color: Red">{{ $errors->first('referrer_email') }}</p> @endif
            </div>
            <div class="form-group">
              <input type="email" class="form-control px-4" name="manager_email" id="manager_email" required placeholder="Manager Email*">
              @if ($errors->has('manager_email')) <p class="help-block" style="color: Red">{{ $errors->first('manager_email') }}</p> @endif
            </div>
            <div class="form-check ml-2 py-2">
              <label class="form-check-label color-cls">
                <input type="checkbox" class="form-check-input" id="name" name="agree">
                I agree with the Terms & Conditions
              </label>
              @if ($errors->has('agree')) <p class="help-block" style="color: Red">{{ $errors->first('agree') }}</p> @endif
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
          </form>
          <p class="aleady-member text-center pt-2"><a href="/login">Already have an account <span>Login here</span>.</a></p>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Signup form section -->
<!-- Start footer nav section -->
<header class="footer-nav-section py-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <ul class="my-2">
          <li><a href="/">home</a></li>
          <li><a href="/signup">register</a></li>
          <li><a href="/login">login</a></li>
          <li><a href="/legality">legality</a></li>
          <li><a href="/news">news</a></li>
          <li><a href="/how_it_work">how it works</a></li>
          <li><a href="/about_us">about us</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <p class="copy-rights  mb-0"> &copy; 2018 All rights reserved. DonaTiOn</p>
      </div>
    </div>
  </div>
</header>
<!-- End footer bar section -->
<!-- Start green footer section -->
<header class="green-footer-section py-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4 class="green-footer-title mb-0 pb-2">Company information</h4>
        <p class="para-cls pt-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here</p>
        <ul class="font-ul pl-0 mb-0">
          <li><a href=""><i class="fa fa-facebook"></i></a></li>
          <li><a href=""><i class="fa fa-twitter"></i></a></li>
          <li><a href=""><i class="fa fa-youtube"></i></a></li>
          <li><a href=""><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-6 mt-5 mt-lg-0">
        <h4 class="green-footer-title mb-0 pb-2">Contacts</h4>
        <ul class="contact-ul pt-2">
          <li class="para-cls"><i class="fa fa-phone pr-2"></i>987 654 3210</li>
          <li class="para-cls"><i class="fa fa-paper-plane pr-2"></i>21st est, Wall st. 25/1, New York, NY 10001, USA</li>
          <li class="para-cls"><i class="fa fa-envelope pr-2"></i>info@email.com</li>
          <li class="para-cls"><i class="fa fa-globe pr-2"></i>www.website.com</li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!-- End green footer section -->

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Raleway:400,700']
    }
  });
</script>
<script src="/js/passwordcheck.js"></script>
</body>
</html>
