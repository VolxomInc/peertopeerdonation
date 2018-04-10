<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UserDashboard-Donation</title>
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
            <!-- <div class="tab-content">
              <div class="tab-pane active" id="dashboard" role="tabpanel"> -->
            <p class="outgoing-donation-text pt-5">PH (Outgoing Donation)</p>
            <div class="table-responsive">
                <table class="table table-striped dashboard-table table-sm">
                    <tbody>
                    @foreach($commitments as $commitment)
                        <tr>
                            <td>{{$commitment->commitment_id}}</td>
                            <td>{{$commitment->amount}}gh¢</td>
                            <td>-</td>
                            <td class="text-center py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="20px" height="20px" class=""><g><g>
                                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30   S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                            <path d="M31,26.021V15.879c0-0.553-0.448-1-1-1s-1,0.447-1,1v10.142c-1.399,0.364-2.494,1.459-2.858,2.858H19c-0.552,0-1,0.447-1,1   s0.448,1,1,1h7.142c0.447,1.72,2,3,3.858,3c2.206,0,4-1.794,4-4C34,28.02,32.72,26.468,31,26.021z M30,31.879c-1.103,0-2-0.897-2-2   s0.897-2,2-2s2,0.897,2,2S31.103,31.879,30,31.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                            <path d="M30,9.879c0.552,0,1-0.447,1-1v-1c0-0.553-0.448-1-1-1s-1,0.447-1,1v1C29,9.432,29.448,9.879,30,9.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                            <path d="M30,49.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1C31,50.326,30.552,49.879,30,49.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                            <path d="M52,28.879h-1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S52.552,28.879,52,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                            <path d="M9,28.879H8c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S9.552,28.879,9,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                            <path d="M44.849,13.615l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S45.24,13.225,44.849,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                            <path d="M14.444,44.021l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S14.834,43.631,14.444,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                            <path d="M45.556,44.021c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L45.556,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                            <path d="M15.151,13.615c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L15.151,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        </g></g> </svg>
                                <?php
                                    $startTime = new DateTime(Carbon\Carbon::now());
                                    $finishTime = new DateTime($commitment->finish_time);
                                    $totalDuration = $finishTime->diff($startTime)->format('%H:%I:%S');
                                ?>
                                <p class="times sr-only">{{$totalDuration}}</p>
                                <p class="table-text mb-0 timer"><span>0</span> : <span>0</span> : <span>0
                          </span></p></td>
                            <td class="text-center py-1">-</td>
                            <td class="text-center py-1">-</td>
                        </tr>
                    @endforeach
                    @foreach($phHelps as $ph)
                    <tr>
                        <td>{{$ph->provider_new_id}}</td>
                        <td>{{$ph->amount}}gh¢</td>
                        <td>{{$users[$ph->assigned_member_id]}}</td>
                        <td class="text-center py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="20px" height="20px" class=""><g><g>
                                        <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30   S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M31,26.021V15.879c0-0.553-0.448-1-1-1s-1,0.447-1,1v10.142c-1.399,0.364-2.494,1.459-2.858,2.858H19c-0.552,0-1,0.447-1,1   s0.448,1,1,1h7.142c0.447,1.72,2,3,3.858,3c2.206,0,4-1.794,4-4C34,28.02,32.72,26.468,31,26.021z M30,31.879c-1.103,0-2-0.897-2-2   s0.897-2,2-2s2,0.897,2,2S31.103,31.879,30,31.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M30,9.879c0.552,0,1-0.447,1-1v-1c0-0.553-0.448-1-1-1s-1,0.447-1,1v1C29,9.432,29.448,9.879,30,9.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M30,49.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1C31,50.326,30.552,49.879,30,49.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M52,28.879h-1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S52.552,28.879,52,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M9,28.879H8c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S9.552,28.879,9,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M44.849,13.615l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S45.24,13.225,44.849,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M14.444,44.021l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S14.834,43.631,14.444,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M45.556,44.021c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L45.556,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M15.151,13.615c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L15.151,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                    </g></g> </svg>
                            <?php
                                $startTime = new DateTime(Carbon\Carbon::now());
                                $finishTime = new DateTime($ph->finish_time);
                                $totalDuration = $finishTime->diff($startTime)->format('%H:%I:%S');
                            ?>
                            <p class="times sr-only">{{$totalDuration}}</p>
                            <p class="table-text mb-0 timer"><span>0</span> : <span>0</span> : <span>0
                          </span></p></td>
                        <td class="text-center py-1"><a href="" class="text-color-cls" data-toggle="modal" data-target="#Message-{{$ph->provider_new_id}}"><i class="fa fa-envelope"></i><p class="table-text mb-0">0</p></a></td>

                        <!-- Start Message model -->
                        <div class="modal fade btn-position" id="Message-{{$ph->provider_new_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">MESSAGES</h2>

                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Nana KDAB0</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Paid</p>
                                        <a href="" class="mb-5 proofdonation">Proof of Donation</a>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Payment made for GHS 24.00 to Damiel Boateng (233242144646) Current Balance: GHS 49.60 . Available Balance: GHS 49.60. Reference: GDCkofikonadu. Transaction ID: 3092208781. Fee charged: GHS0.50.</p>
                                        <a href="" class="mb-4 proofdonation">Proof of Donation</a>
                                        <form method="post" action="{{ route('payment.proof') }}">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <input type="text" class="messagefieldarea px-2" name="messagefield" id="messagefield" placeholder="Type your message" required>
                                                    <div class="form-group">
                                                        <input type="file" name="choosefile" class="choosefilearea"  id="choosefile" >
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Send<span class="pl-2"><i class="fa fa-paper-plane"></i></span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Message model -->

                        <td class="text-center py-1">
                            <a href="" class="text-color-cls" data-toggle="modal" data-target="#detail-{{$ph->provider_new_id}}" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 29.535 29.535" style="enable-background:new 0 0 29.535 29.535;" xml:space="preserve" width="18px" height="18px" class=""><g><g>
                                            <path d="M14.768,0C6.611,0,0,6.609,0,14.768c0,8.155,6.611,14.767,14.768,14.767c8.154,0,14.766-6.612,14.766-14.767   C29.534,6.609,22.923,0,14.768,0z M14.768,27.126c-6.83,0-12.361-5.532-12.361-12.359c0-6.828,5.531-12.362,12.361-12.362   c6.824,0,12.359,5.535,12.359,12.362C27.128,21.594,21.592,27.126,14.768,27.126z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <polygon points="16.83,11.143 12.679,11.143 12.679,11.15 11.134,11.15 11.134,13.563 12.679,13.563 12.679,22.181 11.039,22.181    11.039,24.487 12.679,24.487 12.679,24.503 16.83,24.503 16.83,24.487 18.188,24.487 18.188,22.181 16.83,22.181  " data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <path d="M14.726,9.504c1.395,0,2.24-0.928,2.24-2.077c-0.027-1.172-0.846-2.072-2.184-2.072c-1.336,0-2.211,0.899-2.211,2.072   C12.57,8.576,13.417,9.504,14.726,9.504z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                        </g>
                                    </g>
                    </svg>
                                <p class="table-text mb-0">Details</p></a></td>

                        <!-- Start detail model -->
                        <div class="modal fade btn-position" id="detail-{{$ph->provider_new_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">DETAILS</h2>
                                        @foreach($transactionDetails as $transaction)
                                            @if($transaction->user_id == $ph->assigned_member_id)
                                                <p class="small-title ">Dear participant please Donate {{$ph->amount}} GHC</p>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="infoname">
                                                            <li><span class="small-title">Bank Name:  </span></li>
                                                            <li><span class="small-title">Account Name: </span></li>
                                                            <li><span class="small-title">Account Number:</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <ul class="deailarea">
                                                            <li><span class=" para pb-2">{{$transaction->bank_name}}</span></li>
                                                            <li><span class=" para">{{$transaction->account_name}}</span></li>
                                                            <li><span class=" para">{{$transaction->account_number}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <p class="incomming-donation-text pt-4">GH (Incoming Donation)</p>
            <div class="table-responsive">
                <table class="table table-striped dashboard-table table-sm">
                    <tbody>
                    <tr>
                        <td>PG0012</td>
                        <td>2000gh¢</td>
                        <td>Daniel 0242144646</td>
                        <td class="text-center py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="20px" height="20px" class=""><g><g>
                                        <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30   S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M31,26.021V15.879c0-0.553-0.448-1-1-1s-1,0.447-1,1v10.142c-1.399,0.364-2.494,1.459-2.858,2.858H19c-0.552,0-1,0.447-1,1   s0.448,1,1,1h7.142c0.447,1.72,2,3,3.858,3c2.206,0,4-1.794,4-4C34,28.02,32.72,26.468,31,26.021z M30,31.879c-1.103,0-2-0.897-2-2   s0.897-2,2-2s2,0.897,2,2S31.103,31.879,30,31.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M30,9.879c0.552,0,1-0.447,1-1v-1c0-0.553-0.448-1-1-1s-1,0.447-1,1v1C29,9.432,29.448,9.879,30,9.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M30,49.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1C31,50.326,30.552,49.879,30,49.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M52,28.879h-1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S52.552,28.879,52,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M9,28.879H8c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S9.552,28.879,9,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M44.849,13.615l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S45.24,13.225,44.849,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M14.444,44.021l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S14.834,43.631,14.444,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M45.556,44.021c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L45.556,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M15.151,13.615c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L15.151,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                    </g></g> </svg>
                            <p class="times sr-only">23:59:59</p>
                            <p class="table-text mb-0 timer"><span>0</span> : <span>0</span> : <span>0
                          </span></p></td>
                        <td class="text-center py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="20px" height="20px" class=""><g><g>
                                        <g>
                                            <path d="M487.359,146.279c-1.777-3.742-6.254-5.334-9.992-3.556c-3.742,1.777-5.334,6.251-3.557,9.993    C489.198,185.107,497,219.857,497,256c0,64.374-25.068,124.894-70.587,170.413C380.895,471.932,320.374,497,256,497    c-38.177,0-74.687-8.664-108.513-25.751c-28.185-14.238-53.648-34.227-74.324-58.247l29.591,9.864    c3.929,1.31,8.177-0.814,9.487-4.744s-0.814-8.177-4.744-9.487l-53.25-17.75c-2.466-0.821-5.182-0.309-7.177,1.357    c-1.995,1.666-2.986,4.246-2.619,6.819l8.875,62.125c0.535,3.741,3.743,6.44,7.416,6.44c0.353,0,0.71-0.025,1.07-0.076    c4.101-0.586,6.95-4.385,6.364-8.485l-4.952-34.663c21.699,24.78,48.207,45.438,77.501,60.236    C176.667,502.794,215.451,512,256,512c68.38,0,132.668-26.629,181.02-74.98C485.371,388.667,512,324.38,512,256    C512,217.613,503.71,180.698,487.359,146.279z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M467.55,112.94l-8.875-62.125c-0.586-4.101-4.394-6.948-8.485-6.364c-4.101,0.586-6.95,4.385-6.364,8.485l4.947,34.628    C400.068,31.76,330.538,0,256,0C187.62,0,123.333,26.629,74.98,74.98C26.629,123.333,0,187.62,0,256    c0,38.388,8.291,75.304,24.641,109.721c1.284,2.703,3.974,4.284,6.78,4.284c1.078,0,2.174-0.234,3.213-0.728    c3.741-1.777,5.333-6.251,3.556-9.993C22.802,326.895,15,292.145,15,256c0-64.374,25.068-124.894,70.587-170.413    C131.106,40.068,191.626,15,256,15c70.856,0,136.903,30.494,182.816,83.991l-29.569-9.856c-3.932-1.312-8.178,0.814-9.487,4.744    c-1.309,3.93,0.813,8.177,4.743,9.487l53.25,17.75c0.776,0.258,1.576,0.385,2.371,0.385c1.732,0,3.438-0.6,4.807-1.742    C466.926,118.093,467.917,115.513,467.55,112.94z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M235.158,336.678h-75.444c3.013-26.25,21.666-43.862,41.316-62.416c20.466-19.324,41.628-39.306,41.628-69.312    c0-24.607-22.064-44.627-49.184-44.627s-49.184,20.02-49.184,44.627c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5    c0-16.336,15.334-29.627,34.184-29.627s34.184,13.291,34.184,29.627c0,23.54-17.937,40.476-36.926,58.406    c-21.769,20.554-46.442,43.851-46.442,80.822c0,4.142,3.358,7.5,7.5,7.5h83.368c4.142,0,7.5-3.358,7.5-7.5    C242.658,340.036,239.3,336.678,235.158,336.678z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M360.21,288.58h-8.532V167.823c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v120.758h-63.624l22.382-119.375    c0.764-4.071-1.918-7.991-5.989-8.754c-4.067-0.759-7.989,1.918-8.753,5.989l-24.048,128.258c-0.411,2.193,0.175,4.455,1.6,6.172    c1.425,1.717,3.54,2.71,5.771,2.71h72.661v40.597c0,4.141,3.357,7.499,7.5,7.499s7.5-3.358,7.5-7.5V303.58h8.532    c4.143,0,7.5-3.358,7.5-7.5C367.71,291.938,364.353,288.58,360.21,288.58z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M256,40.081c-4.142,0-7.5,3.358-7.5,7.5v32.064c0,4.142,3.358,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5V47.581    C263.5,43.439,260.143,40.081,256,40.081z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M256,424.855c-4.142,0-7.5,3.358-7.5,7.5v32.064c0,4.142,3.358,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5v-32.064    C263.5,428.213,260.143,424.855,256,424.855z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M464.418,248.5h-32.064c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h32.064c4.143,0,7.5-3.358,7.5-7.5    C471.918,251.858,468.561,248.5,464.418,248.5z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M79.645,248.5H47.581c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h32.064c4.142,0,7.5-3.358,7.5-7.5    C87.145,251.858,83.787,248.5,79.645,248.5z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g></g> </svg>
                            <p class="table-text mb-0">Ext to 24h</p></td>
                        <td class="text-center py-1"><a href="" class="text-color-cls" data-toggle="modal" data-target="#Message7"><i class="fa fa-envelope"></i><p class="table-text mb-0">0</p></a></td>

                        <!-- Start Message model -->
                        <div class="modal fade btn-position" id="Message7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">MESSAGES</h2>

                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Nana KDAB6</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Paid</p>
                                        <a href="" class="mb-5 proofdonation">Proof of Donation</a>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Payment made for GHS 24.00 to Damiel Boateng (233242144646) Current Balance: GHS 49.60 . Available Balance: GHS 49.60. Reference: GDCkofikonadu. Transaction ID: 3092208781. Fee charged: GHS0.50.</p>
                                        <a href="" class="mb-4 proofdonation">Proof of Donation</a>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <input type="text" class="messagefieldarea px-2" name="Message" id="Messagefield" placeholder="Type your message">
                                                    <div class="form-group">
                                                        <input type="file" name="choosefilearea" class="choosefilearea"  id="choosefile" >
                                                    </div>
                                                    <button class="btn btn-primary">Send<span class="pl-2"><i class="fa fa-paper-plane"></i></span></button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Message model -->


                        <td class="text-center py-1">
                            <a href="" class="text-color-cls" data-toggle="modal" data-target="#detail6" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 29.535 29.535" style="enable-background:new 0 0 29.535 29.535;" xml:space="preserve" width="18px" height="18px" class=""><g><g>
                                            <path d="M14.768,0C6.611,0,0,6.609,0,14.768c0,8.155,6.611,14.767,14.768,14.767c8.154,0,14.766-6.612,14.766-14.767   C29.534,6.609,22.923,0,14.768,0z M14.768,27.126c-6.83,0-12.361-5.532-12.361-12.359c0-6.828,5.531-12.362,12.361-12.362   c6.824,0,12.359,5.535,12.359,12.362C27.128,21.594,21.592,27.126,14.768,27.126z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <polygon points="16.83,11.143 12.679,11.143 12.679,11.15 11.134,11.15 11.134,13.563 12.679,13.563 12.679,22.181 11.039,22.181    11.039,24.487 12.679,24.487 12.679,24.503 16.83,24.503 16.83,24.487 18.188,24.487 18.188,22.181 16.83,22.181  " data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <path d="M14.726,9.504c1.395,0,2.24-0.928,2.24-2.077c-0.027-1.172-0.846-2.072-2.184-2.072c-1.336,0-2.211,0.899-2.211,2.072   C12.57,8.576,13.417,9.504,14.726,9.504z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                        </g>
                                    </g>
                    </svg>
                                <p class="table-text mb-0">Details</p></a></td>

                        <!-- Start detail model -->
                        <div class="modal fade btn-position" id="detail6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">DETAILS</h2>
                                        <p class="small-title ">Dear participant please Donate 20 GHC</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="infoname">
                                                    <li><span class="small-title">Bank Name:  </span></li>
                                                    <li><span class="small-title">Account Name: </span></li>
                                                    <li><span class="small-title">Account Number:</span></li>
                                                    <li><span class="small-title">Receiver:  </span></li>
                                                    <li><span class="small-title">Guider: </span></li>
                                                    <li><span class="small-title"> Donor:   </span></li>
                                                    <li><span class="small-title">Guider:    </span></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="deailarea">
                                                    <li><span class=" para pb-2">TIGO</span></li>
                                                    <li><span class=" para">Daniel Boateng</span></li>
                                                    <li><span class=" para">0575332441</span></li>
                                                    <li><span class=" para">Nana KDAB 0575332441</span></li>
                                                    <li><span class=" para">Agyenim Boateng 0242144646</span></li>
                                                    <li><span class=" para">Mensah 0241510064</span></li>
                                                    <li><span class=" para">Elikem 0547151174</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Detail model -->

                    </tr>
                    </tr>
                    <tr>
                        <td>PG0013</td>
                        <td>2000gh¢</td>
                        <td>Daniel 0242144646</td>
                        <td class="text-center py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="20px" height="20px" class=""><g><g>
                                        <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30   S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M31,26.021V15.879c0-0.553-0.448-1-1-1s-1,0.447-1,1v10.142c-1.399,0.364-2.494,1.459-2.858,2.858H19c-0.552,0-1,0.447-1,1   s0.448,1,1,1h7.142c0.447,1.72,2,3,3.858,3c2.206,0,4-1.794,4-4C34,28.02,32.72,26.468,31,26.021z M30,31.879c-1.103,0-2-0.897-2-2   s0.897-2,2-2s2,0.897,2,2S31.103,31.879,30,31.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M30,9.879c0.552,0,1-0.447,1-1v-1c0-0.553-0.448-1-1-1s-1,0.447-1,1v1C29,9.432,29.448,9.879,30,9.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M30,49.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1C31,50.326,30.552,49.879,30,49.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M52,28.879h-1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S52.552,28.879,52,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M9,28.879H8c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S9.552,28.879,9,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M44.849,13.615l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S45.24,13.225,44.849,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M14.444,44.021l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S14.834,43.631,14.444,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M45.556,44.021c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L45.556,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M15.151,13.615c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L15.151,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                    </g></g> </svg>
                            <p class="times sr-only">23:59:59</p>
                            <p class="table-text mb-0 timer"><span>0</span> : <span>0</span> : <span>0
                          </span></p></td>
                        <td class="text-center py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="20px" height="20px" class=""><g><g>
                                        <g>
                                            <path d="M487.359,146.279c-1.777-3.742-6.254-5.334-9.992-3.556c-3.742,1.777-5.334,6.251-3.557,9.993    C489.198,185.107,497,219.857,497,256c0,64.374-25.068,124.894-70.587,170.413C380.895,471.932,320.374,497,256,497    c-38.177,0-74.687-8.664-108.513-25.751c-28.185-14.238-53.648-34.227-74.324-58.247l29.591,9.864    c3.929,1.31,8.177-0.814,9.487-4.744s-0.814-8.177-4.744-9.487l-53.25-17.75c-2.466-0.821-5.182-0.309-7.177,1.357    c-1.995,1.666-2.986,4.246-2.619,6.819l8.875,62.125c0.535,3.741,3.743,6.44,7.416,6.44c0.353,0,0.71-0.025,1.07-0.076    c4.101-0.586,6.95-4.385,6.364-8.485l-4.952-34.663c21.699,24.78,48.207,45.438,77.501,60.236    C176.667,502.794,215.451,512,256,512c68.38,0,132.668-26.629,181.02-74.98C485.371,388.667,512,324.38,512,256    C512,217.613,503.71,180.698,487.359,146.279z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M467.55,112.94l-8.875-62.125c-0.586-4.101-4.394-6.948-8.485-6.364c-4.101,0.586-6.95,4.385-6.364,8.485l4.947,34.628    C400.068,31.76,330.538,0,256,0C187.62,0,123.333,26.629,74.98,74.98C26.629,123.333,0,187.62,0,256    c0,38.388,8.291,75.304,24.641,109.721c1.284,2.703,3.974,4.284,6.78,4.284c1.078,0,2.174-0.234,3.213-0.728    c3.741-1.777,5.333-6.251,3.556-9.993C22.802,326.895,15,292.145,15,256c0-64.374,25.068-124.894,70.587-170.413    C131.106,40.068,191.626,15,256,15c70.856,0,136.903,30.494,182.816,83.991l-29.569-9.856c-3.932-1.312-8.178,0.814-9.487,4.744    c-1.309,3.93,0.813,8.177,4.743,9.487l53.25,17.75c0.776,0.258,1.576,0.385,2.371,0.385c1.732,0,3.438-0.6,4.807-1.742    C466.926,118.093,467.917,115.513,467.55,112.94z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M235.158,336.678h-75.444c3.013-26.25,21.666-43.862,41.316-62.416c20.466-19.324,41.628-39.306,41.628-69.312    c0-24.607-22.064-44.627-49.184-44.627s-49.184,20.02-49.184,44.627c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5    c0-16.336,15.334-29.627,34.184-29.627s34.184,13.291,34.184,29.627c0,23.54-17.937,40.476-36.926,58.406    c-21.769,20.554-46.442,43.851-46.442,80.822c0,4.142,3.358,7.5,7.5,7.5h83.368c4.142,0,7.5-3.358,7.5-7.5    C242.658,340.036,239.3,336.678,235.158,336.678z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M360.21,288.58h-8.532V167.823c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v120.758h-63.624l22.382-119.375    c0.764-4.071-1.918-7.991-5.989-8.754c-4.067-0.759-7.989,1.918-8.753,5.989l-24.048,128.258c-0.411,2.193,0.175,4.455,1.6,6.172    c1.425,1.717,3.54,2.71,5.771,2.71h72.661v40.597c0,4.141,3.357,7.499,7.5,7.499s7.5-3.358,7.5-7.5V303.58h8.532    c4.143,0,7.5-3.358,7.5-7.5C367.71,291.938,364.353,288.58,360.21,288.58z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M256,40.081c-4.142,0-7.5,3.358-7.5,7.5v32.064c0,4.142,3.358,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5V47.581    C263.5,43.439,260.143,40.081,256,40.081z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M256,424.855c-4.142,0-7.5,3.358-7.5,7.5v32.064c0,4.142,3.358,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5v-32.064    C263.5,428.213,260.143,424.855,256,424.855z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M464.418,248.5h-32.064c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h32.064c4.143,0,7.5-3.358,7.5-7.5    C471.918,251.858,468.561,248.5,464.418,248.5z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M79.645,248.5H47.581c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h32.064c4.142,0,7.5-3.358,7.5-7.5    C87.145,251.858,83.787,248.5,79.645,248.5z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g></g> </svg>
                            <p class="table-text mb-0">Ext to 24h</p></td>
                        <td class="text-center py-1"><a href="" class="text-color-cls" data-toggle="modal" data-target="#Message8"><i class="fa fa-envelope"></i><p class="table-text mb-0">0</p></a></td>

                        <!-- Start Message model -->
                        <div class="modal fade btn-position" id="Message8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">MESSAGES</h2>

                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Nana KDAB7</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Paid</p>
                                        <a href="" class="mb-5 proofdonation">Proof of Donation</a>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Payment made for GHS 24.00 to Damiel Boateng (233242144646) Current Balance: GHS 49.60 . Available Balance: GHS 49.60. Reference: GDCkofikonadu. Transaction ID: 3092208781. Fee charged: GHS0.50.</p>
                                        <a href="" class="mb-4 proofdonation">Proof of Donation</a>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <input type="text" class="messagefieldarea px-2" name="Message" id="Messagefield" placeholder="Type your message">
                                                    <div class="form-group">
                                                        <input type="file" name="choosefilearea" class="choosefilearea"  id="choosefile" >
                                                    </div>
                                                    <button class="btn btn-primary">Send<span class="pl-2"><i class="fa fa-paper-plane"></i></span></button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Message model -->


                        <td class="text-center py-1">
                            <a href="" data-toggle="modal" class="text-color-cls" data-target="#detail7" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 29.535 29.535" style="enable-background:new 0 0 29.535 29.535;" xml:space="preserve" width="18px" height="18px" class=""><g><g>
                                            <path d="M14.768,0C6.611,0,0,6.609,0,14.768c0,8.155,6.611,14.767,14.768,14.767c8.154,0,14.766-6.612,14.766-14.767   C29.534,6.609,22.923,0,14.768,0z M14.768,27.126c-6.83,0-12.361-5.532-12.361-12.359c0-6.828,5.531-12.362,12.361-12.362   c6.824,0,12.359,5.535,12.359,12.362C27.128,21.594,21.592,27.126,14.768,27.126z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <polygon points="16.83,11.143 12.679,11.143 12.679,11.15 11.134,11.15 11.134,13.563 12.679,13.563 12.679,22.181 11.039,22.181    11.039,24.487 12.679,24.487 12.679,24.503 16.83,24.503 16.83,24.487 18.188,24.487 18.188,22.181 16.83,22.181  " data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <path d="M14.726,9.504c1.395,0,2.24-0.928,2.24-2.077c-0.027-1.172-0.846-2.072-2.184-2.072c-1.336,0-2.211,0.899-2.211,2.072   C12.57,8.576,13.417,9.504,14.726,9.504z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                        </g>
                                    </g>
                    </svg>
                                <p class="table-text mb-0">Details</p></a></td>


                        <!-- Start detail model -->
                        <div class="modal fade btn-position" id="detail7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">DETAILS</h2>
                                        <p class="small-title ">Dear participant please Donate 20 GHC</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="infoname">
                                                    <li><span class="small-title">Bank Name:  </span></li>
                                                    <li><span class="small-title">Account Name: </span></li>
                                                    <li><span class="small-title">Account Number:</span></li>
                                                    <li><span class="small-title">Receiver:  </span></li>
                                                    <li><span class="small-title">Guider: </span></li>
                                                    <li><span class="small-title"> Donor:   </span></li>
                                                    <li><span class="small-title">Guider:    </span></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="deailarea">
                                                    <li><span class=" para pb-2">TIGO</span></li>
                                                    <li><span class=" para">Daniel Boateng</span></li>
                                                    <li><span class=" para">0575332441</span></li>
                                                    <li><span class=" para">Nana KDAB 0575332441</span></li>
                                                    <li><span class=" para">Agyenim Boateng 0242144646</span></li>
                                                    <li><span class=" para">Mensah 0241510064</span></li>
                                                    <li><span class=" para">Elikem 0547151174</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Detail model -->
                    </tr>
                    </tr>
                    <tr>
                        <td>PG0014</td>
                        <td>2000gh¢</td>
                        <td>Daniel 0242144646</td>
                        <td class="text-center py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="20px" height="20px" class=""><g><g>
                                        <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30   S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M31,26.021V15.879c0-0.553-0.448-1-1-1s-1,0.447-1,1v10.142c-1.399,0.364-2.494,1.459-2.858,2.858H19c-0.552,0-1,0.447-1,1   s0.448,1,1,1h7.142c0.447,1.72,2,3,3.858,3c2.206,0,4-1.794,4-4C34,28.02,32.72,26.468,31,26.021z M30,31.879c-1.103,0-2-0.897-2-2   s0.897-2,2-2s2,0.897,2,2S31.103,31.879,30,31.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M30,9.879c0.552,0,1-0.447,1-1v-1c0-0.553-0.448-1-1-1s-1,0.447-1,1v1C29,9.432,29.448,9.879,30,9.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M30,49.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1C31,50.326,30.552,49.879,30,49.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M52,28.879h-1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S52.552,28.879,52,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M9,28.879H8c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S9.552,28.879,9,28.879z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M44.849,13.615l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S45.24,13.225,44.849,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M14.444,44.021l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S14.834,43.631,14.444,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M45.556,44.021c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L45.556,44.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                        <path d="M15.151,13.615c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L15.151,13.615z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#747474"/>
                                    </g></g> </svg>

                            <p class="times sr-only">23:59:59</p>
                            <p class="table-text mb-0 timer"><span>0</span> : <span>0</span> : <span>0
                          </span></p></td>
                        <td class="text-center py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="20px" height="20px" class=""><g><g>
                                        <g>
                                            <path d="M487.359,146.279c-1.777-3.742-6.254-5.334-9.992-3.556c-3.742,1.777-5.334,6.251-3.557,9.993    C489.198,185.107,497,219.857,497,256c0,64.374-25.068,124.894-70.587,170.413C380.895,471.932,320.374,497,256,497    c-38.177,0-74.687-8.664-108.513-25.751c-28.185-14.238-53.648-34.227-74.324-58.247l29.591,9.864    c3.929,1.31,8.177-0.814,9.487-4.744s-0.814-8.177-4.744-9.487l-53.25-17.75c-2.466-0.821-5.182-0.309-7.177,1.357    c-1.995,1.666-2.986,4.246-2.619,6.819l8.875,62.125c0.535,3.741,3.743,6.44,7.416,6.44c0.353,0,0.71-0.025,1.07-0.076    c4.101-0.586,6.95-4.385,6.364-8.485l-4.952-34.663c21.699,24.78,48.207,45.438,77.501,60.236    C176.667,502.794,215.451,512,256,512c68.38,0,132.668-26.629,181.02-74.98C485.371,388.667,512,324.38,512,256    C512,217.613,503.71,180.698,487.359,146.279z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M467.55,112.94l-8.875-62.125c-0.586-4.101-4.394-6.948-8.485-6.364c-4.101,0.586-6.95,4.385-6.364,8.485l4.947,34.628    C400.068,31.76,330.538,0,256,0C187.62,0,123.333,26.629,74.98,74.98C26.629,123.333,0,187.62,0,256    c0,38.388,8.291,75.304,24.641,109.721c1.284,2.703,3.974,4.284,6.78,4.284c1.078,0,2.174-0.234,3.213-0.728    c3.741-1.777,5.333-6.251,3.556-9.993C22.802,326.895,15,292.145,15,256c0-64.374,25.068-124.894,70.587-170.413    C131.106,40.068,191.626,15,256,15c70.856,0,136.903,30.494,182.816,83.991l-29.569-9.856c-3.932-1.312-8.178,0.814-9.487,4.744    c-1.309,3.93,0.813,8.177,4.743,9.487l53.25,17.75c0.776,0.258,1.576,0.385,2.371,0.385c1.732,0,3.438-0.6,4.807-1.742    C466.926,118.093,467.917,115.513,467.55,112.94z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M235.158,336.678h-75.444c3.013-26.25,21.666-43.862,41.316-62.416c20.466-19.324,41.628-39.306,41.628-69.312    c0-24.607-22.064-44.627-49.184-44.627s-49.184,20.02-49.184,44.627c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5    c0-16.336,15.334-29.627,34.184-29.627s34.184,13.291,34.184,29.627c0,23.54-17.937,40.476-36.926,58.406    c-21.769,20.554-46.442,43.851-46.442,80.822c0,4.142,3.358,7.5,7.5,7.5h83.368c4.142,0,7.5-3.358,7.5-7.5    C242.658,340.036,239.3,336.678,235.158,336.678z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M360.21,288.58h-8.532V167.823c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v120.758h-63.624l22.382-119.375    c0.764-4.071-1.918-7.991-5.989-8.754c-4.067-0.759-7.989,1.918-8.753,5.989l-24.048,128.258c-0.411,2.193,0.175,4.455,1.6,6.172    c1.425,1.717,3.54,2.71,5.771,2.71h72.661v40.597c0,4.141,3.357,7.499,7.5,7.499s7.5-3.358,7.5-7.5V303.58h8.532    c4.143,0,7.5-3.358,7.5-7.5C367.71,291.938,364.353,288.58,360.21,288.58z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M256,40.081c-4.142,0-7.5,3.358-7.5,7.5v32.064c0,4.142,3.358,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5V47.581    C263.5,43.439,260.143,40.081,256,40.081z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M256,424.855c-4.142,0-7.5,3.358-7.5,7.5v32.064c0,4.142,3.358,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5v-32.064    C263.5,428.213,260.143,424.855,256,424.855z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M464.418,248.5h-32.064c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h32.064c4.143,0,7.5-3.358,7.5-7.5    C471.918,251.858,468.561,248.5,464.418,248.5z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g><g>
                                        <g>
                                            <path d="M79.645,248.5H47.581c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h32.064c4.142,0,7.5-3.358,7.5-7.5    C87.145,251.858,83.787,248.5,79.645,248.5z" data-original="#000000" class="active-path" data-old_color="#7a7a7a" fill="#7a7a7a"/>
                                        </g>
                                    </g></g> </svg>
                            <p class="table-text mb-0">Ext to 24h</p></td>
                        <td class="text-center py-1"><a href="" class="text-color-cls" data-toggle="modal" data-target="#Message9"><i class="fa fa-envelope"></i><p class="table-text mb-0">0</p></a></td>

                        <!-- Start Message model -->
                        <div class="modal fade btn-position" id="Message9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">MESSAGES</h2>

                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Nana KDAB8</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Paid</p>
                                        <a href="" class="mb-5 proofdonation">Proof of Donation</a>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Payment made for GHS 24.00 to Damiel Boateng (233242144646) Current Balance: GHS 49.60 . Available Balance: GHS 49.60. Reference: GDCkofikonadu. Transaction ID: 3092208781. Fee charged: GHS0.50.</p>
                                        <a href="" class="mb-4 proofdonation">Proof of Donation</a>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <input type="text" class="messagefieldarea px-2" name="Message" id="Messagefield" placeholder="Type your message">
                                                    <div class="form-group">
                                                        <input type="file" name="choosefilearea" class="choosefilearea"  id="choosefile" >
                                                    </div>
                                                    <button class="btn btn-primary">Send<span class="pl-2"><i class="fa fa-paper-plane"></i></span></button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Message model -->
                        <td class="text-center py-1">
                            <a href="" data-toggle="modal" class="text-color-cls" data-target="#detail8" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 29.535 29.535" style="enable-background:new 0 0 29.535 29.535;" xml:space="preserve" width="18px" height="18px" class=""><g><g>
                                            <path d="M14.768,0C6.611,0,0,6.609,0,14.768c0,8.155,6.611,14.767,14.768,14.767c8.154,0,14.766-6.612,14.766-14.767   C29.534,6.609,22.923,0,14.768,0z M14.768,27.126c-6.83,0-12.361-5.532-12.361-12.359c0-6.828,5.531-12.362,12.361-12.362   c6.824,0,12.359,5.535,12.359,12.362C27.128,21.594,21.592,27.126,14.768,27.126z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <polygon points="16.83,11.143 12.679,11.143 12.679,11.15 11.134,11.15 11.134,13.563 12.679,13.563 12.679,22.181 11.039,22.181    11.039,24.487 12.679,24.487 12.679,24.503 16.83,24.503 16.83,24.487 18.188,24.487 18.188,22.181 16.83,22.181  " data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <path d="M14.726,9.504c1.395,0,2.24-0.928,2.24-2.077c-0.027-1.172-0.846-2.072-2.184-2.072c-1.336,0-2.211,0.899-2.211,2.072   C12.57,8.576,13.417,9.504,14.726,9.504z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                        </g>
                                    </g>
                    </svg>
                                <p class="table-text mb-0">Details</p></a></td>


                        <!-- Start detail model -->
                        <div class="modal fade btn-position" id="detail8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">DETAILS</h2>
                                        <p class="small-title ">Dear participant please Donate 20 GHC</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="infoname">
                                                    <li><span class="small-title">Bank Name:  </span></li>
                                                    <li><span class="small-title">Account Name: </span></li>
                                                    <li><span class="small-title">Account Number:</span></li>
                                                    <li><span class="small-title">Receiver:  </span></li>
                                                    <li><span class="small-title">Guider: </span></li>
                                                    <li><span class="small-title"> Donor:   </span></li>
                                                    <li><span class="small-title">Guider:    </span></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="deailarea">
                                                    <li><span class=" para pb-2">TIGO</span></li>
                                                    <li><span class=" para">Daniel Boateng</span></li>
                                                    <li><span class=" para">0575332441</span></li>
                                                    <li><span class=" para">Nana KDAB 0575332441</span></li>
                                                    <li><span class=" para">Agyenim Boateng 0242144646</span></li>
                                                    <li><span class=" para">Mensah 0241510064</span></li>
                                                    <li><span class=" para">Elikem 0547151174</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Detail model -->


                    </tr>
                    </tr>
                    <tr>
                        <td>PG0015</td>
                        <td>2000gh¢</td>
                        <td>Daniel 0242144646</td>
                        <td class="text-center py-1"><img src="images/like.png" class="img-fluid" alt="confirm"><p class="table-text mb-0">Confirm</p></td>
                        <td class="text-center py-1"><a href="" class="text-color-cls"><img src="images/file.png" class="img-fluid" alt="file"><p class="table-text mb-0">View</p></a></td>
                        <td class="text-center py-1"><a href="" class="text-color-cls" data-toggle="modal" data-target="#Message10"><i class="fa fa-envelope"></i><p class="table-text mb-0">0</p></a></td>


                        <!-- Start Message model -->
                        <div class="modal fade btn-position" id="Message10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">MESSAGES</h2>

                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Nana KDAB9</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Paid</p>
                                        <a href="" class="mb-5 proofdonation">Proof of Donation</a>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Payment made for GHS 24.00 to Damiel Boateng (233242144646) Current Balance: GHS 49.60 . Available Balance: GHS 49.60. Reference: GDCkofikonadu. Transaction ID: 3092208781. Fee charged: GHS0.50.</p>
                                        <a href="" class="mb-4 proofdonation">Proof of Donation</a>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <input type="text" class="messagefieldarea px-2" name="Message" id="Messagefield" placeholder="Type your message">
                                                    <div class="form-group">
                                                        <input type="file" name="choosefilearea" class="choosefilearea"  id="choosefile" >
                                                    </div>
                                                    <button class="btn btn-primary">Send<span class="pl-2"><i class="fa fa-paper-plane"></i></span></button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Message model -->


                        <td class="text-center py-1">
                            <a href="" class="text-color-cls" data-toggle="modal" data-target="#detail9" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 29.535 29.535" style="enable-background:new 0 0 29.535 29.535;" xml:space="preserve" width="18px" height="18px" class=""><g><g>
                                            <path d="M14.768,0C6.611,0,0,6.609,0,14.768c0,8.155,6.611,14.767,14.768,14.767c8.154,0,14.766-6.612,14.766-14.767   C29.534,6.609,22.923,0,14.768,0z M14.768,27.126c-6.83,0-12.361-5.532-12.361-12.359c0-6.828,5.531-12.362,12.361-12.362   c6.824,0,12.359,5.535,12.359,12.362C27.128,21.594,21.592,27.126,14.768,27.126z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <polygon points="16.83,11.143 12.679,11.143 12.679,11.15 11.134,11.15 11.134,13.563 12.679,13.563 12.679,22.181 11.039,22.181    11.039,24.487 12.679,24.487 12.679,24.503 16.83,24.503 16.83,24.487 18.188,24.487 18.188,22.181 16.83,22.181  " data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <path d="M14.726,9.504c1.395,0,2.24-0.928,2.24-2.077c-0.027-1.172-0.846-2.072-2.184-2.072c-1.336,0-2.211,0.899-2.211,2.072   C12.57,8.576,13.417,9.504,14.726,9.504z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                        </g>
                                    </g>
                    </svg>
                                <p class="table-text mb-0">Details</p></a></td>


                        <!-- Start detail model -->
                        <div class="modal fade btn-position" id="detail9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">DETAILS</h2>
                                        <p class="small-title ">Dear participant please Donate 20 GHC</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="infoname">
                                                    <li><span class="small-title">Bank Name:  </span></li>
                                                    <li><span class="small-title">Account Name: </span></li>
                                                    <li><span class="small-title">Account Number:</span></li>
                                                    <li><span class="small-title">Receiver:  </span></li>
                                                    <li><span class="small-title">Guider: </span></li>
                                                    <li><span class="small-title"> Donor:   </span></li>
                                                    <li><span class="small-title">Guider:    </span></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="deailarea">
                                                    <li><span class=" para pb-2">TIGO</span></li>
                                                    <li><span class=" para">Daniel Boateng</span></li>
                                                    <li><span class=" para">0575332441</span></li>
                                                    <li><span class=" para">Nana KDAB 0575332441</span></li>
                                                    <li><span class=" para">Agyenim Boateng 0242144646</span></li>
                                                    <li><span class=" para">Mensah 0241510064</span></li>
                                                    <li><span class=" para">Elikem 0547151174</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Detail model -->


                    </tr>
                    </tr>
                    <tr>
                        <td>PG0016</td>
                        <td>2000gh¢</td>
                        <td>Daniel 0242144646</td>
                        <td class="text-center py-1"><img src="images/like.png" class="img-fluid" alt="confirm"><p class="table-text mb-0">Confirm</p></td>
                        <td class="text-center py-1"><a href="" class="text-color-cls"><img src="images/file.png" class="img-fluid" alt="file"><p class="table-text mb-0">View</p></a></td>
                        <td class="text-center py-1"><a href="" class="text-color-cls" data-toggle="modal" data-target="#Message11"><i class="fa fa-envelope"></i><p class="table-text mb-0">0</p></a></td>

                        <!-- Start Message model -->
                        <div class="modal fade btn-position" id="Message11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">MESSAGES</h2>

                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Nana KDAB10</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Paid</p>
                                        <a href="" class="mb-5 proofdonation">Proof of Donation</a>
                                        <p class=" mb-0 para popupgray-color">2018-03-10 14:31:19</p>
                                        <p class="small-title mb-0">Kofikonadu</p>
                                        <p class="mb-0 para">Payment made for GHS 24.00 to Damiel Boateng (233242144646) Current Balance: GHS 49.60 . Available Balance: GHS 49.60. Reference: GDCkofikonadu. Transaction ID: 3092208781. Fee charged: GHS0.50.</p>
                                        <a href="" class="mb-4 proofdonation">Proof of Donation</a>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <input type="text" class="messagefieldarea px-2" name="Message" id="Messagefield" placeholder="Type your message">
                                                    <div class="form-group">
                                                        <input type="file" name="choosefilearea" class="choosefilearea"  id="choosefile" >
                                                    </div>
                                                    <button class="btn btn-primary">Send<span class="pl-2"><i class="fa fa-paper-plane"></i></span></button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Message model -->



                        <td class="text-center py-1">
                            <a href="" class="text-color-cls" data-toggle="modal" data-target="#detail10" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 29.535 29.535" style="enable-background:new 0 0 29.535 29.535;" xml:space="preserve" width="18px" height="18px" class=""><g><g>
                                            <path d="M14.768,0C6.611,0,0,6.609,0,14.768c0,8.155,6.611,14.767,14.768,14.767c8.154,0,14.766-6.612,14.766-14.767   C29.534,6.609,22.923,0,14.768,0z M14.768,27.126c-6.83,0-12.361-5.532-12.361-12.359c0-6.828,5.531-12.362,12.361-12.362   c6.824,0,12.359,5.535,12.359,12.362C27.128,21.594,21.592,27.126,14.768,27.126z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <polygon points="16.83,11.143 12.679,11.143 12.679,11.15 11.134,11.15 11.134,13.563 12.679,13.563 12.679,22.181 11.039,22.181    11.039,24.487 12.679,24.487 12.679,24.503 16.83,24.503 16.83,24.487 18.188,24.487 18.188,22.181 16.83,22.181  " data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                            <path d="M14.726,9.504c1.395,0,2.24-0.928,2.24-2.077c-0.027-1.172-0.846-2.072-2.184-2.072c-1.336,0-2.211,0.899-2.211,2.072   C12.57,8.576,13.417,9.504,14.726,9.504z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#646464"/>
                                        </g>
                                    </g>
                    </svg>
                                <p class="table-text mb-0">Details</p></a></td>

                        <!-- Start detail model -->
                        <div class="modal fade btn-position" id="detail10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body modalpopuparea">
                                        <h2 class="text-center title-popup">DETAILS</h2>
                                        <p class="small-title ">Dear participant please Donate 20 GHC</p>
                                        <p class="pb-4 para">You can pay it mtn 0242144646 Daniel Boateng.</p>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="infoname">
                                                    <li><span class="small-title">Bank Name:  </span></li>
                                                    <li><span class="small-title">Account Name: </span></li>
                                                    <li><span class="small-title">Account Number:</span></li>
                                                    <li><span class="small-title">Receiver:  </span></li>
                                                    <li><span class="small-title">Guider: </span></li>
                                                    <li><span class="small-title"> Donor:   </span></li>
                                                    <li><span class="small-title">Guider:    </span></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="deailarea">
                                                    <li><span class=" para pb-2">TIGO</span></li>
                                                    <li><span class=" para">Daniel Boateng</span></li>
                                                    <li><span class=" para">0575332441</span></li>
                                                    <li><span class=" para">Nana KDAB 0575332441</span></li>
                                                    <li><span class=" para">Agyenim Boateng 0242144646</span></li>
                                                    <li><span class=" para">Mensah 0241510064</span></li>
                                                    <li><span class=" para">Elikem 0547151174</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<script src="/js/jquery.js"></script>
<script src="/js/timer.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $("#submit-help").attr("disabled", "disabled");
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('%D days %H:%M:%S'))}).on('finish.countdown', function() {
                alert("Finish");
            });
        });

        $('#amount-input,#check-warning').change(function() {
            if($('#amount-input').val() != '0.00' && $('#amount-input').val() != '0') {
                if($('#check-warning').is(':checked')) {
                    $("#submit-help").prop("disabled", false);
                } else {
                    $("#submit-help").attr("disabled", "disabled");
                }
            }
        });
    });

</script>
</body>
</html>