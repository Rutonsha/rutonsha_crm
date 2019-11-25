<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>crm</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Themesbrand" name="author" />

        <!-- App favicon -->

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/plugins/metro/MetroJs.min.css" rel="stylesheet" >

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="#" class="logo">
                    
                    <span>
                        <img src="#" alt="logo-large" class="logo-lg">
                    </span>
                </a>
            </div>

            <!-- Navbar -->
            <nav class="navbar-custom">

               
                <ul class="list-unstyled topbar-nav float-right mb-0">
                    
                  

                    
                   

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>

                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul>
    
                <ul class="list-unstyled topbar-nav mb-0">
                        
                  
                    <li class="hidden-sm">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                           Tools <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Users
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Leads
                            </a>

                        </div>
                    </li>
                  
                </ul>

            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Left Sidenav -->
                        <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                    
                    <div class="row">
                        
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <span class="float-right text-muted font-13">Last 3 month</span>
                                    <h5 class="mt-0 mb-3">Workloed</h5>                                    
                                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Budget Detail</h5>
                                    <div id="morris-bar-chart" class="morris-chart project-budget-detail-chart"></div>
                                    <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-primary mr-2"></i>Total Budget</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-success mr-2"></i>Amount Used</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-secondary mr-2"></i>Target Amount</li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                                                                                      
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-md-12 col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Project Budget</h5>
                                    <div class="row justify-content-end">                                        
                                        <div class="col-md-12 col-xl-12 align-self-center">
                                            <ul class="list-unstyled list-inline float-right">
                                                <li class="list-inline-item px-3">
                                                    <h5 class="mt-0">$ 42,000 </h5>
                                                    <small class="font-14 text-muted">Total Budget</small>
                                                </li>
                                                <li class="list-inline-item px-3">
                                                    <h5 class="mb-2">$ 7,200 </h5>
                                                    <small class="font-14 text-muted">Remaining</small>
                                                </li>
                                                <li class="list-inline-item px-3">
                                                    <h5 class="text-danger mb-2"><i class="mdi mdi-arrow-down-bold font-14 text-danger"></i> 7.9% </h5>                                                                                
                                                    <span class="font-14 text-danger">Over Target Currently</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="extra-area-chart" class="morris-chart project-budget-chart"></div>                                    
                                    <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-primary mr-2"></i>Total Budget</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-success mr-2"></i>Amount Used</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-secondary mr-2"></i>Target Amount</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-diamond text-warning"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-1 text-muted font-13">Projects</p>
                                                        <h4 class="mt-0 mb-1 font-20">35</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-warning" role="progressbar" style="max-width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-account-multiple text-purple"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-1 text-muted font-13">Member</p>
                                                        <h4 class="mt-0 mb-1 font-20">12</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-purple" role="progressbar" style="max-width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-playlist-check text-success"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-0 text-muted font-13">Tasks</p>
                                                        <span class="mt-0 font-20"><strong>40</strong></span>
                                                        <span class="badge badge-soft-success mt-1 shadow-none">Active</span>                                                                                                                                     
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-success" role="progressbar" style="max-width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4 col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-coin text-pink"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-sm-8 col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-1 text-muted font-13">Budget</p>
                                                        <h4 class="mt-0 mb-1 font-20">$18090</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-pink" role="progressbar" style="max-width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    

                    
                    
                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    © 2019 Rutonsha 
                </footer>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!--Plugins-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/metro/MetroJs.min.js"></script>
        <script src="assets/plugins/jquery-knob/excanvas.js"></script>
        <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>  
        <script src="assets/pages/jquery.dashboard.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type="text/javascript">
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: ""
                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00\"%\"",
                    indexLabel: "{label} {y}",
                    dataPoints: [
                        {y: 79.45, label: "Active"},
                        {y: 7.31, label: "Pending"},
                        {y: 7.06, label: "Remaining"},
                    ]
                }]
            });
            chart.render();
        </script>
    </body>
</html>