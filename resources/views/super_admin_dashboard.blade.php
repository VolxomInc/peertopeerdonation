<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard-Donation</title>
    <!-- APP CSS -->
    <link rel="stylesheet" href="css/app.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- AniCollection.css library -->
</head>
<body>

<!-- Start Navbar -->
<header class="dashboard-navbar container-fluid px-4 py-3">
    <ul class="mb-0">
        <li><img src="images/logo.png" class="img-fluid logo-img" alt="logo"></li>
        <li class="float-right"><p class="dashboard-navbar-text pt-3 pl-2">Nana KBDA<span><a href="signin.html"><i class="fa fa-power-off pl-2"></i></a></span></p></li>
        <li class="float-right"><img src="images/user-image.jpg" class="img-fluid user-img" alt="user-image"></li>
    </ul>
</header>
<!-- End Navbar -->
<!-- Start dashboard section -->
<header class="dashboard-section container-fluid mt-4 mt-md-0 mt-lg-0">
    <div class="row">
        <div class="col-lg-3 col-md-3 px-0">
            <ul class="adminsidebar">
                <li>
                    <a href="" class="dark-green-ancher">
                        <span><img src="images/dashboard.png" class="img-fluid" alt="dashboard"></span><span class="pl-2">Dashboard</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-cls dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><img src="images/admin/UserManagement.png" class="img-fluid" alt="UserManagement"></span> User Management
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><span><img src="images/admin/adduser.png" class="img-fluid" alt="add user"></span><span class="pl-2">Add User</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/activeusers.png" class="img-fluid" alt="Active user"></span><span class="pl-2">Active Users</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/blockedusers.png" class="img-fluid" alt="blocked user"></span><span class="pl-2">Blocked Users</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-cls dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><img src="images/admin/RoleManagement.png" class="img-fluid" alt="roleManagement"></span> Role Management
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><span><img src="images/admin/AssignNewRole.png" class="img-fluid" alt="Assign New Role"></span><span class="pl-2">Assign New Role</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/TeamMembers.png" class="img-fluid" alt="Team Members"></span><span class="pl-2">Team Members</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/blockedusers.png" class="img-fluid" alt="Blocked Members"></span><span class="pl-2">Blocked Members</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="" class="dark-green-ancher">
                        <span><img src="images/admin/PagesManager.png" class="img-fluid" alt="PagesManager"></span><span class="pl-2">Pages Manager</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-cls dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><img src="images/admin/ManageCommitments.png" class="img-fluid pr-2" alt="ManageCommitments"></span>Manage<br><span class="pl-5">Commitments</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><span><img src="images/admin/AllGHCommitments.png" class="img-fluid" alt="All GH Commitments"></span><span class="pl-2">All GH Commitments</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/AllPHCommitments.png" class="img-fluid" alt="All PH Commitments"></span><span class="pl-2">All PH Commitments</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/ExtendedCommitments.png" class="img-fluid" alt="Extended Commitments"></span><span class="pl-2">Extended Commitments</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/DeactiveCommitments.png" class="img-fluid" alt="De-active Commitments"></span><span class="pl-2">De-active Commitments</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-cls dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><img src="images/admin/ManagePHHistory.png" class="img-fluid pr-2" alt="Manage PH History"></span>Manage PH History
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><span><img src="images/admin/AllPHRequests.png" class="img-fluid" alt="All PH Requests"></span><span class="pl-2">All PH Requests</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/DectivePHRequests.png" class="img-fluid" alt="De-active PH Requests"></span><span class="pl-2">De-active PH Requests</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-cls dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><img src="images/admin/ManageGHHistory.png" class="img-fluid pr-2" alt="Manage GH History"></span>Manage GH History
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><span><img src="images/admin/AllGHRequests.png" class="img-fluid" alt="All GH Requests"></span><span class="pl-2">All GH Requests</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/DectiveGHRequests.png" class="img-fluid" alt="De-active GH Requests"></span><span class="pl-2">De-active GH Requests</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-cls dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><img src="images/admin/ManageNews.png" class="img-fluid pr-2" alt="Manage News"></span>Manage News
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><span><img src="images/admin/PostNews.png" class="img-fluid" alt="Post News"></span><span class="pl-2">Post News</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/AllNews.png" class="img-fluid" alt="All News"></span><span class="pl-2">All News</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/Archived.png" class="img-fluid" alt="Archived"></span><span class="pl-2">Archived</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-cls dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><img src="images/admin/SupportCenter.png" class="img-fluid pr-2" alt="Support Center"></span>Support Center
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><span><img src="images/admin/Active.png" class="img-fluid" alt="Active"></span><span class="pl-2">Active</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/Replied.png" class="img-fluid" alt="Replied"></span><span class="pl-2">Replied</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/Archived.png" class="img-fluid" alt="Archived"></span><span class="pl-2">Archived</span></a>
                            <a class="dropdown-item" href="#"><span><img src="images/admin/Bin.png" class="img-fluid" alt="Bin"></span><span class="pl-2">Bin</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="" class="dark-green-ancher">
                        <span><img src="images/admin/MySettings.png" class="img-fluid" alt="My Settings"></span><span class="pl-2">My Settings</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-lg-9 col-md-9 pb-5">
            <div class="row">
                <div class="col-lg-11">
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
                                        <p class="step-date mb-0">01-03-2018 | 12:25 PM</p>
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
                                        <p class="step-date mb-0">01-03-2018 | 12:25 PM</p>
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
                                        <p class="step-date mb-0">01-03-2018 | 12:25 PM</p>
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
                                        <p class="step-date mb-0">01-03-2018 | 12:25 PM</p>
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

                    <!-- Start Total user info section -->
                    <div class="row py-4">
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 info-border-cls pl-4">
                            <p class="mb-0"><span class="userinfo-font"><i class="fa fa-user pr-2"></i></span><span class="userinfo-text">Total Users</span></p>
                            <p class="total-number mb-0">1225</p>
                            <p class="userinfo-text">From last Month</p>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 info-border-cls pl-4">
                            <p class="mb-0"><span class="userinfo-font"><img src="images/user111.jpg" class="img-fluid pr-2" alt="user"></span><span class="userinfo-text">New User Requests</span></p>
                            <p class="total-number mb-0">369</p>
                            <p class="userinfo-text">From last Month</p>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 info-border-cls pl-4">
                            <p class="mb-0"><span class="userinfo-font"><img src="images/user1112.jpg" class="img-fluid pr-2" alt="user"></span><span class="userinfo-text">Total PH (Outgoing)</span></p>
                            <p class="total-number mb-0">2000<sub>gh¢</sub></p>
                            <p class="userinfo-text">From last Month</p>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 pl-4">
                            <p class="mb-0"><span class="userinfo-font"><img src="images/user1113.jpg" class="img-fluid pr-2" alt="user"></span><span class="userinfo-text">Total GH (Incoming)</span></p>
                            <p class="total-number mb-0">750<sub>gh¢</sub></p>
                            <p class="userinfo-text">From last Month</p>
                        </div>
                    </div>
                    <!-- End Total user info section -->
                    <h2 class="admindashboard-heading">PH (Outgoing)<span class="userinfo-text pl-3">Weekly progress</span></h2>
                    <div class="seprator mb-4" ></div>
                    <!-- Start Graph area -->
                    <div id="786968" style="height: 300px; width: 100%;"></div>
                    <!-- End Graph area -->
                    <h2 class="admindashboard-heading pt-4">GH (Incoming)<span class="userinfo-text pl-3">Weekly progress</span></h2>
                    <div class="seprator mb-4"></div>
                    <!-- Start Graph area -->
                    <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                    <!-- End Graph area -->
                    <h2 class="admindashboard-heading pt-4">Support Tickets</h2>
                    <!-- <p class="active-tickets pt-2">Active Tickets</p> -->
                    <div class="table-responsive">
                        <table class="superdasboard-table mt-3 table-sm">
                            <thead>
                            <tr>
                                <td>User</td>
                                <td class="pl-5">Description</td>
                                <td class="pl-5"> Due</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="width-cls">
                                    <div class="support-img">
                                        <img src="images/support1.jpg" class="img-fluid" alt="support-img">
                                    </div>
                                    <div class="supporter-info pl-3 pr-5">
                                        <p class="supporter-name mb-0">Joy Will</p>
                                        <p class="userinfo-text color-cls mb-0">Active</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="description-heading mb-0 px-5"><a href="">[#187] User widgets could not found.</a></p>
                                    <p class="userinfo-text px-5">User widget usage is not described. How can I use user widget?</p>
                                </td>
                                <td>
                                    <p class="due-number mb-0 pl-5 text-center">03</p>
                                    <p class="userinfo-text pl-5">Hours</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="width-cls">
                                    <div class="support-img">
                                        <img src="images/support2.jpg" class="img-fluid" alt="support-img">
                                    </div>
                                    <div class="supporter-info pl-3 pr-5">
                                        <p class="supporter-name mb-0">John Doe</p>
                                        <p class="userinfo-text color-cls mb-0">Active</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="description-heading mb-0 px-5"><a href="">[#185] How to deal with laravel multiauth?</a></p>
                                    <p class="userinfo-text px-5">Need assistance to deal with Laravel Multiauth.It will be great if you could suggest module manager for it as well.</p>
                                </td>
                                <td>
                                    <p class="due-number mb-0 pl-5 text-center">16</p>
                                    <p class="userinfo-text pl-5">Hours</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="width-cls">
                                    <div class="support-img">
                                        <img src="images/support3.jpg" class="img-fluid" alt="support-img">
                                    </div>
                                    <div class="supporter-info pl-3 pr-5">
                                        <p class="supporter-name mb-0">Asilda Dhembi</p>
                                        <p class="userinfo-text color-cls mb-0">Active</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="description-heading mb-0 px-5"><a href="">[#184] Gulp Compilation getting stucked!</a></p>
                                    <p class="userinfo-text px-5">Gulp command show an error: gulp does not exits.</p>
                                </td>
                                <td>
                                    <p class="due-number mb-0 pl-5 text-center">20</p>
                                    <p class="userinfo-text pl-5">Hours</p>
                                </td>
                            </tr>


                            <tr>
                                <td class="width-cls">
                                    <div class="support-img">
                                        <img src="images/support1.jpg" class="img-fluid" alt="support-img">
                                    </div>
                                    <div class="supporter-info pl-3 pr-5">
                                        <p class="supporter-name mb-0">Joy Will</p>
                                        <p class="userinfo-text mb-0">Resolved</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="description-heading mb-0 px-5"><a href="">[#187] User widgets could not found.</a></p>
                                    <p class="userinfo-text px-5">User widget usage is not described. How can I use user widget?</p>
                                </td>
                                <td>
                                    <p class="due-number mb-0 pl-5 text-center"><img src="images/greencheck.png" class="img-fluid" alt="check"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="width-cls">
                                    <div class="support-img">
                                        <img src="images/support2.jpg" class="img-fluid" alt="support-img">
                                    </div>
                                    <div class="supporter-info pl-3 pr-5">
                                        <p class="supporter-name mb-0">John Doe</p>
                                        <p class="userinfo-text mb-0">Resolved</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="description-heading mb-0 px-5"><a href="">[#185] How to deal with laravel multiauth?</a></p>
                                    <p class="userinfo-text px-5">Need assistance to deal with Laravel Multiauth.It will be great if you could suggest module manager for it as well.</p>
                                </td>
                                <td>
                                    <p class="due-number mb-0 pl-5 text-center"><img src="images/greencheck.png" class="img-fluid" alt="check"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="width-cls">
                                    <div class="support-img">
                                        <img src="images/support3.jpg" class="img-fluid" alt="support-img">
                                    </div>
                                    <div class="supporter-info pl-3 pr-5">
                                        <p class="supporter-name mb-0">Asilda Dhembi</p>
                                        <p class="userinfo-text mb-0">Resolved</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="description-heading mb-0 px-5"><a href="">[#184] Gulp Compilation getting stucked!</a></p>
                                    <p class="userinfo-text px-5">Gulp command show an error: gulp does not exits.</p>
                                </td>
                                <td>
                                    <p class="due-number mb-0 pl-5 text-center"><img src="images/greencheck.png" class="img-fluid" alt="check"></p>
                                </td>
                            </tr>


                            <tr>
                                <td class="width-cls">
                                    <div class="support-img">
                                        <img src="images/support1.jpg" class="img-fluid" alt="support-img">
                                    </div>
                                    <div class="supporter-info pl-3 pr-5">
                                        <p class="supporter-name mb-0">Joy Will</p>
                                        <p class="userinfo-text mb-0">Closed</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="description-heading mb-0 px-5"><a href="">[#187] User widgets could not found.</a></p>
                                    <p class="userinfo-text px-5">User widget usage is not described. How can I use user widget?</p>
                                </td>
                                <td>
                                    <p class="due-number mb-0 pl-5 text-center"><img src="images/cross.png" class="img-fluid" alt="cross"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="width-cls">
                                    <div class="support-img">
                                        <img src="images/support2.jpg" class="img-fluid" alt="support-img">
                                    </div>
                                    <div class="supporter-info pl-3 pr-5">
                                        <p class="supporter-name mb-0">John Doe</p>
                                        <p class="userinfo-text mb-0">Closed</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="description-heading mb-0 px-5"><a href="">[#185] How to deal with laravel multiauth?</a></p>
                                    <p class="userinfo-text px-5">Need assistance to deal with Laravel Multiauth.It will be great if you could suggest module manager for it as well.</p>
                                </td>
                                <td>
                                    <p class="due-number mb-0 pl-5 text-center"><img src="images/cross.png" class="img-fluid" alt="cross"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="width-cls">
                                    <div class="support-img">
                                        <img src="images/support3.jpg" class="img-fluid" alt="support-img">
                                    </div>
                                    <div class="supporter-info pl-3 pr-5">
                                        <p class="supporter-name mb-0">Asilda Dhembi</p>
                                        <p class="userinfo-text mb-0">Closed</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="description-heading mb-0 px-5"><a href="">[#184] Gulp Compilation getting stucked!</a></p>
                                    <p class="userinfo-text px-5">Gulp command show an error: gulp does not exits.</p>
                                </td>
                                <td>
                                    <p class="due-number mb-0 pl-5 text-center"><img src="images/cross.png" class="img-fluid" alt="cross"></p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


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
                    <li><a href="index.html">home</a></li>
                    <li><a href="signup.html">register</a></li>
                    <li><a href="signin.html">login</a></li>
                    <li><a href="legality.html">legality</a></li>
                    <li><a href="news.html">news</a></li>
                    <li><a href="how-it-work.html">how it works</a></li>
                    <li><a href="aboutus.html">about us</a></li>
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
            families: ['Raleway:400,700', 'Lato:400,900']
        }
    });
</script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script>

    window.onload = function () {

        var option = {

            animationEnabled: true,
            axisY:{
                interval: 20
            },
            axisX: {
                gridColor: "rgb(242, 249, 235)",
                interval: 2,
                intervalType: "week",
                valueFormatString: "DD-MM-YY",
            },

            data: [

                {
                    type: "splineArea",
                    color: 'rgb(242, 249, 235)',
                    lineColor: "#98cb5c",
                    markerColor: "transparent",
                    markerBorderColor: "#98cb5c",
                    markerBorderThickness: 3,
                    dataPoints: [
                        { y: 0},
                        { y: 6 },
                        { y: 14 },
                        { y: 12 },
                        { y: 19 },
                        { y: 14 },
                        { y: 26 },
                        { y: 10 },
                        { y: 22 }
                    ]
                }
            ]
        };
        $("#chartContainer2").CanvasJSChart(option);

    }


    var chart786968 = new CanvasJS.Chart("786968", {
        animationEnabled: true,
        axisY:{
            interval: 20
        },
        axisX: {
            gridColor: "rgb(242, 249, 235)",
            interval: 2,
            intervalType: "week",
            valueFormatString: "DD-MM-YY",
        },
        data: [{
            type: "splineArea",
            color: 'rgb(242, 249, 235)',
            lineColor: "#98cb5c",
            markerColor: "transparent",
            markerBorderColor: "#98cb5c",
            markerBorderThickness: 3,
            dataPoints: [
                { y: 0},
                { y: 6 },
                { y: 14 },
                { y: 12 },
                { y: 19 },
                { y: 14 },
                { y: 26 },
                { y: 10 },
                { y: 22 }
            ]
        }]
    });
    chart786968.render();
    chart786968 = {};

</script>
</body>
</html>