<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CRM - @yield('title')</title>

    <!-- Scripts -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    
       <link href="{{ asset('plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('plugins/metro/MetroJs.min.css')}}" rel="stylesheet" type="text/css" />

       <link href="{{ asset('plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('plugins/tagsinput/jquery.tagsinput.css') }}" rel="stylesheet" />
       <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
       <link href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
       <link href="{{ asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
       <!-- App css -->
       
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <style type="text/css">
      .my_class {
            font-size: 12px;
            font-weight: 500;
            color: #6c757d;
      }
    </style>
</head>
<body>

<!-- Top Bar Start -->
<div class="topbar"> 
  
  <!-- LOGO -->
  <div class="topbar-left">
    <h1 style="color: #fff;"> CRM </h1>
  </div>
  
  <!-- Navbar -->
<nav class="navbar-custom"> 

    <!-- Search input -->
    <div class="search-wrap" id="search-wrap">
    <div class="search-bar">
    <input class="search-input" type="search" placeholder="Search here.." />
    <a href="javascript:void(0);" class="close-search search-btn" data-target="#search-wrap"> <i class="mdi mdi-close-circle"></i> </a> </div>
    </div>
        <ul class="list-unstyled topbar-nav float-right mb-0">

            <li class="dropdown"> 
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> <img src="{{ asset('images/users/user-1.jpg') }}" alt="profile-user" class="rounded-circle" /> <span class="ml-1 nav-user-name hidden-sm">Admin <i class="mdi mdi-chevron-down"></i> </span> </a>
                <div class="dropdown-menu dropdown-menu-right"> <!-- <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="{{ route('logout') }}"><i class="dripicons-exit text-muted mr-2"></i> Logout</a> </div>
            </li>
        </ul>
        <ul class="list-unstyled topbar-nav mb-0">
            <li class="hidden-sm">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                   Menu <i class="mdi mdi-chevron-down"></i> 
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <?php if(session('role')==1 || session('role')==2){ ?>
                     <a href="{{ route('userlist') }}" class="dropdown-item">
                        Users
                    <?php } ?>
                    </a>
                    <!-- item-->
                    <?php if(session('role')==1 || session('role')==2){ ?>
                    <a href="{{ route('leadlist') }}" class="dropdown-item">
                        Leads
                    </a>
                  <?php } if(session('role')==3){ ?>
                    <a href="{{ route('leadadd') }}" class="dropdown-item">
                        Leads
                    </a>
                  <?php } ?>
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
      <!-- end page title end breadcrumb -->
      @yield('content')
      </div>
    <!-- container -->
    <footer class="footer text-center text-sm-left"> © 2019-2020 </footer>
  </div>
  <!-- end page content --> 
</div>
<!-- jQuery  -->       
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/metisMenu.min.js') }}"></script>
<script src="{{ asset('js/waves.min.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>


<script src="{{ asset('plugins/moment/moment.js') }}"></script>
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('plugins/tagsinput/jquery.tagsinput.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}"></script>
<script src="{{ asset('pages/jquery.form-advanced.init.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
<!-- <script src="{{ asset('plugins/datatables/buttons.colVis.min.') }}"></script> -->
<!-- Responsive examples -->
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('pages/jquery.table-datatable.js') }}"></script>  

<!-- App js -->
<script src="{{ asset('js/canvasjs.min.js') }}"></script>
<script src="{{ asset('plugins/tippy/tippy.all.min.js') }}"></script> 
<script src="{{ asset('pages/jquery.tooltipster.js') }}"></script>
<script src="{{ asset('js/notify.min.js') }}"></script>

<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('plugins/metro/MetroJs.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-knob/excanvas.js') }}"></script>
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('pages/jquery.dashboard.init.js') }}"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

@yield('footer_script')
<!-- end page-wrapper --> 
   <?php /* <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> */ ?>
</body>
</html>
