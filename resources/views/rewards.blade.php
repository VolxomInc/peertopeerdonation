<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reward-Donation</title>
    <!-- APP CSS -->
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- AniCollection.css library -->
</head>
<body>

<!-- Start Navbar -->
<header class="dashboard-navbar container-fluid px-4 py-3">
    <ul class="mb-0">
        <li><img src="/images/logo.png" class="img-fluid logo-img" alt="logo"></li>
        <li class="float-right"><p class="dashboard-navbar-text pt-3 pl-2">{{Auth::user()->user_name}}<span><a href="/logout"><i class="fa fa-power-off pl-2"></i></a></span></p></li>
        <li class="float-right"><img src="/images/user-image.jpg" class="img-fluid user-img" alt="user-image"></li>
    </ul>
</header>
<!-- End Navbar -->
<!-- Start dashboard section -->
<header class="dashboard-section container-fluid mt-4 mt-md-0 mt-lg-0">
    <div class="row">
        <div class="col-lg-3 col-md-3 px-0">
            <ul class="sidebar-tabs-area mb-0">
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="/user-dashboard" class="sidebar-ancher active py-4 px-2">
                        <img src="/images/dashboard.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">Dashboard</p>
                    </a>
                </li>
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="/rewards" class="sidebar-ancher  py-4 px-2" >
                        <img src="/images/Rewards.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">Rewards</p>
                    </a>
                </li>
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="" class="sidebar-ancher  py-4 px-2" >
                        <img src="/images/Bonus.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">Bonus</p>
                    </a>
                </li>
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="/commitments" class="sidebar-ancher  py-4 px-2" >
                        <img src="/images/Comittment.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">Comittment</p>
                    </a>
                </li>
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="/provide_help_history" class="sidebar-ancher  py-4 px-2" >
                        <img src="/images/PHHistory.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">PH History</p>
                    </a>
                </li>
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="/get_help_history" class="sidebar-ancher  py-4 px-2" >
                        <img src="/images/GHHistory.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">GH History</p>
                    </a>
                </li>
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="/my_team" class="sidebar-ancher  py-4 px-2">
                        <img src="/images/MyTeam.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">My Team</p>
                    </a>
                </li>
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="/profile_settings" class="sidebar-ancher  py-4 px-2" >
                        <img src="/images/ProfileSettings.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">Profile Settings</p>
                    </a>
                </li>
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="/dashboard_news" class="sidebar-ancher  py-4 px-2">
                        <img src="/images/News.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">News</p>
                    </a>
                </li>
                <li class="sidebar-tab mb-lg-0 mb-md-0 mb-2">
                    <a href="/support_donation" class="sidebar-ancher  py-4 px-2">
                        <img src="/images/Support.png" class="img-fluid" alt="user-dashboard">
                        <p class="sidebar-para mb-0 pt-1">Support</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="row">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-3 mb-lg-0">
                            <div class="step py-3">
                                <div class="row">
                                    <div class="col-lg-3 pl-4">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 350 350" style="enable-background:new 0 0 350 350;" xml:space="preserve" width="15px" height="15px" class="">
                              <g>
                                  <g>
                                      <path d="M175,171.173c38.914,0,70.463-38.318,70.463-85.586C245.463,38.318,235.105,0,175,0s-70.465,38.318-70.465,85.587   C104.535,132.855,136.084,171.173,175,171.173z" data-original="#000000" class="active-path" data-old_color="#57a690" fill="#57a690"/>
                                      <path d="M41.909,301.853C41.897,298.971,41.885,301.041,41.909,301.853L41.909,301.853z" data-original="#000000" class="active-path" data-old_color="#57a690" fill="#57a690"/>
                                      <path d="M308.085,304.104C308.123,303.315,308.098,298.63,308.085,304.104L308.085,304.104z" data-original="#000000" class="active-path" data-old_color="#57a690" fill="#57a690"/>
                                      <path d="M307.935,298.397c-1.305-82.342-12.059-105.805-94.352-120.657c0,0-11.584,14.761-38.584,14.761   s-38.586-14.761-38.586-14.761c-81.395,14.69-92.803,37.805-94.303,117.982c-0.123,6.547-0.18,6.891-0.202,6.131   c0.005,1.424,0.011,4.058,0.011,8.651c0,0,19.592,39.496,133.08,39.496c113.486,0,133.08-39.496,133.08-39.496   c0-2.951,0.002-5.003,0.005-6.399C308.062,304.575,308.018,303.664,307.935,298.397z" data-original="#000000" class="active-path" data-old_color="#57a690" fill="#57a690"/>
                                  </g>
                              </g>
                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 px-4 pt-1">
                                        <p class="step-heading mb-0">Registration data</p>
                                        <?php $created_at = explode(' ',Auth::user()->created_at);?>
                                        <p class="step-date mb-0">{{$created_at[0]}} | {{$created_at[1]}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-3 mb-lg-0">
                            <div class="step py-3">
                                <div class="row">
                                    <div class="col-lg-3 pl-4">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 516.375 516.375" style="enable-background:new 0 0 516.375 516.375;" xml:space="preserve" class="">
                              <g>
                                  <g>
                                      <path d="M353.812,0C263.925,0,191.25,72.675,191.25,162.562c0,19.125,3.825,38.25,9.562,57.375L0,420.75v95.625h95.625V459H153   v-57.375h57.375l86.062-86.062c17.213,5.737,36.338,9.562,57.375,9.562c89.888,0,162.562-72.675,162.562-162.562S443.7,0,353.812,0   z M401.625,172.125c-32.513,0-57.375-24.862-57.375-57.375s24.862-57.375,57.375-57.375S459,82.237,459,114.75   S434.138,172.125,401.625,172.125z" data-original="#000000" class="active-path" data-old_color="#57a690" fill="#57a690"/>
                                  </g>
                              </g>
                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 px-4 pt-1">
                                        <p class="step-heading mb-0">Last Access</p>
                                        <?php $last_login = explode(' ',Auth::user()->last_login_at);?>
                                        <p class="step-date mb-0">{{$last_login[0]}} | {{$last_login[1]}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-3 mb-lg-0">
                            <div class="step py-3">
                                <div class="row">
                                    <div class="col-lg-3 pl-4">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 430.114 430.114" style="enable-background:new 0 0 430.114 430.114;" xml:space="preserve" class="">
                              <g>
                                  <g>
                                      <path id="Facebook_Places" d="M356.208,107.051c-1.531-5.738-4.64-11.852-6.94-17.205C321.746,23.704,261.611,0,213.055,0   C148.054,0,76.463,43.586,66.905,133.427v18.355c0,0.766,0.264,7.647,0.639,11.089c5.358,42.816,39.143,88.32,64.375,131.136   c27.146,45.873,55.314,90.999,83.221,136.106c17.208-29.436,34.354-59.259,51.17-87.933c4.583-8.415,9.903-16.825,14.491-24.857   c3.058-5.348,8.9-10.696,11.569-15.672c27.145-49.699,70.838-99.782,70.838-149.104v-20.262   C363.209,126.938,356.581,108.204,356.208,107.051z M214.245,199.193c-19.107,0-40.021-9.554-50.344-35.939   c-1.538-4.2-1.414-12.617-1.414-13.388v-11.852c0-33.636,28.56-48.932,53.406-48.932c30.588,0,54.245,24.472,54.245,55.06   C270.138,174.729,244.833,199.193,214.245,199.193z" data-original="#000000" class="active-path" data-old_color="#57a690" fill="#57a690"/>
                                  </g>
                              </g>
                          </svg>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 px-4 pt-1">
                                        <p class="step-heading mb-0">IP Address</p>
                                        <p class="step-date mb-0">{{Auth::user()->last_login_ip}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-3 mb-lg-0">
                            <div class="step py-3">
                                <div class="row">
                                    <div class="col-lg-3 pl-4">
                                        <div class="icon">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 px-4 pt-1">
                                        <p class="step-heading mb-0">Referral Link</p>
                                        <p class="step-date mb-0">{{url('/').'/?ref='.Auth::user()->affiliate_id}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End steps -->
                    <!-- Start provide and get help -->
                    <div class="provide-and-get-help">
                        <div class="row mt-4">
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3 mb-lg-0">
                                <div class="provide-help-text ">
                                    <p class="provide-and-get-para mb-0 text-center"><a href="" class="provide-ancher py-2" data-toggle="modal" data-target="#providehelp">provide help</a></p>

                                    <!-- Start Provide Help model -->
                                    <div class="modal fade btn-position" id="providehelp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="modal-body">
                                                    <h2 class="text-center work-title">PROVIDE HELP</h2>
                                                    <p class="sidebar-para pb-4"><span><i class="fa fa-check"></i></span> GHC (gh¢)</p>
                                                    <p class="sidebar-para">GHC (gh¢)</p>
                                                    <form method="post" action="{{ route('commitment.pool') }}">
                                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" value="0.00" id="amount-input" name="amount-input">
                                                        </div>
                                                        <div class="form-check pt-2">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" id="check-warning">
                                                                I read the <a href="">‘The Warning’</a> and I fully understand all the risks. I make decision to participate in GDC, being of sound mind and memory.
                                                            </label>
                                                        </div>
                                                        <div class="text-center mt-5 mb-4">
                                                            <button class="btn btn-primary  py-2" type="submit" id="submit-help">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End provide Help model -->


                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3 mb-lg-0">
                                <div class="get-help-text">
                                    <p class="provide-and-get-para mb-0 text-center"><a href="" class="py-2 get-ancher" data-toggle="modal" data-target="#gethelp">get help</a></p>

                                    <!-- Start get Help model -->
                                    <div class="modal fade btn-position" id="gethelp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="modal-body">
                                                    <h2 class="text-center work-title">GET HELP</h2>
                                                    <p class="sidebar-para pb-4"><span><i class="fa fa-check"></i></span> GHC (gh¢)</p>
                                                    <p class="sidebar-para">GHC (gh¢)</p>
                                                    <form>
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" value="0.00" id="example-number-input">
                                                        </div>
                                                        <div class="form-check pt-2">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                                I read the <a href="">‘The Warning’</a> and I fully understand all the risks. I make decision to participate in GDC, being of sound mind and memory.
                                                            </label>
                                                        </div>
                                                        <div class="text-center mt-5 mb-4">
                                                            <button class="btn btn-primary  py-2" type="submit">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Get Help model -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Tabs content area -->
            <div class="table-responsive">
                <table class="table table-striped dashboard-table table-sm">
                    <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Created date</th>
                        <th>Release date</th>
                        <th>Amount</th>
                        <th>Reward</th>
                        <th>Current Balance</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>PG0012</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>250gh¢</td>
                        <td>500gh¢</td>
                        <td>2400gh¢</td>
                        <td><a href="" class="gh-ready-ancher" data-toggle="modal" data-target="#getready1">GH Ready</a></td>

                        <!-- Start GEt ready popup -->
                        <div class="modal fade btn-position" id="getready1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body">
                                        <h2 class="text-center title-popup">CREAT GET HELP</h2>
                                        <p class="para popupgray-color text-center">Your current reward balance is<span>2400gh¢</span></p>
                                        <form method="get">
                                            <select multiple="multiple" onchange="console.log('changed', this)" placeholder="Select your miture reward(s) " class="SlectBox" required>
                                                <option value="volvo">PH0012 reward amount is 500gh¢</option>
                                                <option value="saab">PH0013 reward amount is 300gh¢</option>
                                                <option value="mercedes">PH0014 reward amount is 1000gh¢</option>
                                                <option value="audi">PH0015 reward amount is 600gh¢</option>
                                            </select>
                                        </form>
                                        <div class="row pt-5">
                                            <div class="col-sm-6 px-4">
                                                <a href="" class="btn btn-primary float-right btn py-2 px-3 btn-area-cls" data-dismiss="modal" aria-label="Close">Cancel</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="btn btn-primary py-2 px-3 btn-area-cls " data-toggle="modal" data-target="#recommitment5" data-dismiss="modal">Confirm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Get ready popup -->

                        <!-- Start Approve recommitment popup -->
                        <div class="modal fade btn-position" id="recommitment1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body">
                                        <h2 class="text-center title-popup ">IRRELEVANT AMOUNT</h2>
                                        <p class="para popupgray-color text-center px-4">You can only GH against transactional reward. Please enter an amount equivalent to one, two or all matured PH requests.</p>
                                        <div class="text-center">
                                            <a href="" class="btn btn-primary py-2 px-5 btn-area-cls" data-dismiss="modal" aria-label="Close">Ok</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Approve recommitment popup -->
                    </tr>
                    <tr>
                        <td>PG0013</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>150gh¢</td>
                        <td>300gh¢</td>
                        <td>1900gh¢</td>
                        <td><a href="" class="gh-ready-ancher" data-toggle="modal" data-target="#getready2">GH Ready</a></td>

                        <!-- Start GEt ready popup -->
                        <div class="modal fade btn-position" id="getready2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body">
                                        <h2 class="text-center title-popup">CREAT GET HELP</h2>
                                        <p class="para popupgray-color text-center">Your current reward balance is<span>2400gh¢</span></p>
                                        <form method="get">
                                            <select multiple="multiple" onchange="console.log('changed', this)" placeholder="Select your miture reward(s) " class="SlectBox" required>
                                                <option value="volvo">PH0012 reward amount is 500gh¢</option>
                                                <option value="saab">PH0013 reward amount is 300gh¢</option>
                                                <option value="mercedes">PH0014 reward amount is 1000gh¢</option>
                                                <option value="audi">PH0015 reward amount is 600gh¢</option>
                                            </select>
                                        </form>
                                        <div class="row pt-5">
                                            <div class="col-sm-6 px-4">
                                                <a href="" class="btn btn-primary float-right btn py-2 px-3 btn-area-cls" data-dismiss="modal" aria-label="Close">Cancel</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="btn btn-primary py-2 px-3 btn-area-cls " data-toggle="modal" data-target="#recommitment5" data-dismiss="modal">Confirm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Get ready popup -->

                        <!-- Start Approve recommitment popup -->
                        <div class="modal fade btn-position" id="recommitment2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body">
                                        <h2 class="text-center title-popup ">IRRELEVANT AMOUNT</h2>
                                        <p class="para popupgray-color text-center px-4">You can only GH against transactional reward. Please enter an amount equivalent to one, two or all matured PH requests.</p>
                                        <div class="text-center">
                                            <a href="" class="btn btn-primary py-2 px-5 btn-area-cls" data-dismiss="modal" aria-label="Close">Ok</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Approve recommitment popup -->
                    </tr>
                    <tr>
                        <td>PG0014</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>500gh¢</td>
                        <td>1000gh¢</td>
                        <td>1600gh¢</td>
                        <td><a href="" class="gh-ready-ancher" data-toggle="modal" data-target="#getready3">GH Ready</a></td>

                        <!-- Start GEt ready popup -->
                        <div class="modal fade btn-position" id="getready3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body">
                                        <h2 class="text-center title-popup">CREAT GET HELP</h2>
                                        <p class="para popupgray-color text-center">Your current reward balance is<span>2400gh¢</span></p>
                                        <form method="get">
                                            <select multiple="multiple" onchange="console.log('changed', this)" placeholder="Select your miture reward(s) " class="SlectBox" required>
                                                <option value="volvo">PH0012 reward amount is 500gh¢</option>
                                                <option value="saab">PH0013 reward amount is 300gh¢</option>
                                                <option value="mercedes">PH0014 reward amount is 1000gh¢</option>
                                                <option value="audi">PH0015 reward amount is 600gh¢</option>
                                            </select>
                                        </form>
                                        <div class="row pt-5">
                                            <div class="col-sm-6 px-4">
                                                <a href="" class="btn btn-primary float-right btn py-2 px-3 btn-area-cls" data-dismiss="modal" aria-label="Close">Cancel</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="btn btn-primary py-2 px-3 btn-area-cls " data-toggle="modal" data-target="#recommitment5" data-dismiss="modal">Confirm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Get ready popup -->

                        <!-- Start Approve recommitment popup -->
                        <div class="modal fade btn-position" id="recommitment3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body">
                                        <h2 class="text-center title-popup ">IRRELEVANT AMOUNT</h2>
                                        <p class="para popupgray-color text-center px-4">You can only GH against transactional reward. Please enter an amount equivalent to one, two or all matured PH requests.</p>
                                        <div class="text-center">
                                            <a href="" class="btn btn-primary py-2 px-5 btn-area-cls" data-dismiss="modal" aria-label="Close">Ok</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Approve recommitment popup -->
                    </tr>
                    <tr>
                        <td>PG0015</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>300gh¢</td>
                        <td>600gh¢</td>
                        <td>600gh¢</td>
                        <td><a href="" class="gh-ready-ancher" data-toggle="modal" data-target="#getready5">GH Ready</a></td>

                        <!-- Start GEt ready popup -->
                        <div class="modal fade btn-position" id="getready5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body">
                                        <h2 class="text-center title-popup">CREAT GET HELP</h2>
                                        <p class="para popupgray-color text-center">Your current reward balance is <span>2400gh¢</span></p>
                                        <form method="get">
                                            <select multiple="multiple" onchange="console.log('changed', this)" placeholder="Select your mature reward(s)" class="SlectBox" required>
                                                <option value="volvo">PH0012 reward amount is 500gh¢</option>
                                                <option value="saab">PH0013 reward amount is 300gh¢</option>
                                                <option value="mercedes">PH0014 reward amount is 1000gh¢</option>
                                                <option value="audi">PH0015 reward amount is 600gh¢</option>
                                            </select>
                                        </form>
                                        <div class="row pt-5">
                                            <div class="col-sm-6 px-4">
                                                <a href="" class="btn btn-primary float-right btn py-2 px-3 btn-area-cls" data-dismiss="modal" aria-label="Close">Cancel</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="btn btn-primary py-2 px-3 btn-area-cls " data-toggle="modal" data-target="#recommitment5" data-dismiss="modal">Confirm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Get ready popup -->

                        <!-- Start Approve recommitment popup -->
                        <div class="modal fade btn-position" id="recommitment5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body">
                                        <h2 class="text-center title-popup ">IRRELEVANT AMOUNT</h2>
                                        <p class="para popupgray-color text-center px-4">You can only GH against transactional reward. Please enter an amount equivalent to one, two or all matured PH requests.</p>
                                        <div class="text-center">
                                            <a href="" class="btn btn-primary py-2 px-5 btn-area-cls" data-dismiss="modal" aria-label="Close">Ok</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Approve recommitment popup -->
                    </tr>
                    <tr>
                        <td>PG0016</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>2000gh¢</td>
                        <td>1100gh¢</td>
                        <td>3300gh¢</td>
                        <td>Released</td>
                    </tr>
                    <tr>
                        <td>PG0017</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>1100gh¢</td>
                        <td>950gh¢</td>
                        <td>2050gh¢</td>
                        <td>Released</td>
                    </tr>
                    <tr>
                        <td>PG0018</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>1500gh¢</td>
                        <td>11gh¢</td>
                        <td>1511gh¢</td>
                        <td>Released</td>
                    </tr>
                    <tr>
                        <td>PG0019</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>2000gh¢</td>
                        <td>1300gh¢</td>
                        <td>3300gh¢</td>
                        <td>Released</td>
                    </tr>
                    <tr>
                        <td>PG0020</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>2650gh¢</td>
                        <td>1250gh¢</td>
                        <td>3900gh¢</td>
                        <td>Released</td>


                    </tr>
                    <tr>
                        <td>PG0021</td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td><p class="mb-0 date">03/13/2018</p><p class="mb-0 time">17:45:03</p></td>
                        <td>3300gh¢</td>
                        <td>1100gh¢</td>
                        <td>4400gh¢</td>
                        <td>Released</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--  </div>
           </div> -->
        </div>
    </div>
</header>
<!-- End dashboard section -->
<!-- Start footer nav section -->
<header class="footer-nav-section py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <ul class="my-2">
                    <li><a href="/">home</a></li>
                    <li><a href="/signup">register</a></li>
                    <li><a href="/sign-in">login</a></li>
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
            families: ['Raleway:400,700', 'Montserrat:400,700']
        }
    });
</script>
<script src="/js/jquery.sumoselect.js"></script>
<script>

    jQuery(document).ready(function(){
        window.asd = $('.SlectBox').SumoSelect({ csvDispCount: 3, selectAll:true, captionFormatAllSelected: "All rewards are selected" });
        window.test = $('.testsel').SumoSelect({okCancelInMulti:true, captionFormatAllSelected: "Yeah, OK, so everything." });

        window.testSelAll = $('.testSelAll').SumoSelect({okCancelInMulti:true, selectAll:true });

        window.testSelAll2 = $('.testSelAll2').SumoSelect({selectAll:true});

        window.testSelAlld = $('.SlectBox-grp').SumoSelect({okCancelInMulti:true, selectAll:true, isClickAwayOk:true });

        window.Search = $('.search-box').SumoSelect({ csvDispCount: 3, search: true, searchText:'Enter here.' });
        window.sb = $('.SlectBox-grp-src').SumoSelect({ csvDispCount: 3, search: true, searchText:'Enter here.', selectAll:true });
        window.searchSelAll = $('.search-box-sel-all').SumoSelect({ csvDispCount: 3, selectAll:true, search: true, searchText:'Enter here.', okCancelInMulti:true });
        window.searchSelAll = $('.search-box-open-up').SumoSelect({ csvDispCount: 3, selectAll:true, search: false, searchText:'Enter here.', up:true });
        window.Search = $('.search-box-custom-fn').SumoSelect({ csvDispCount: 3, search: true, searchText:'Enter here.', searchFn: function(haystack, needle) {
            var re = RegExp('^' + needle.replace(/([^\w\d])/gi, '\\$1'), 'i');
            return !haystack.match(re);
        } });

        window.groups_eg_g = $('.groups_eg_g').SumoSelect({selectAll:true, search:true });


        $('.SlectBox').on('sumo:opened', function(o) {
            console.log("dropdown opened", o)
        });


    });
</script>
<script >
    $('.YourModalElement').modal('hide');
</script>
</body>
</html>