<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	
	
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

<body class="bg-white">

        <!-- Log In page -->
        <div class="row">
            <div class="col-lg-12 p-0 h-100vh d-flex justify-content-center">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
    
                        <h3 class="text-center m-0">
                            <a href="index.html" class="logo logo-admin"><img src="{{ asset('images/logo.png') }}" height="60" alt="logo" class="my-3"></a>
                        </h3>
    
                        <div class="px-3">
                            
    
                            <form method="POST" action="{{ route('login') }}">
                        @csrf
    
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Username"><br>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            <br>
                                        @enderror
                                    </div>                                    
                                </div>
    
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                        <br>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            <br>
                                        @enderror
                                    </div>                                
                                </div>
    
                                <div class="form-group row mt-4">
                                    <div class="col-sm-6">
                                        <div class="custom-checkbox">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                              <label class="form-check-label" for="remember">
                                                  {{ __('Remember Me') }}
                                              </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="pages-recoverpw-2.html" class="text-muted font-13"><i class="mdi mdi-lock"></i> Forgot your password?</a>                                    
                                    </div>
                                    @if (Route::has('password.request'))
                                    
                                @endif
                                </div>
    
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>                            
                            </form>
                        </div>
                        <div class="m-3 text-center bg-light p-3 text-primary">
                            <h4 class="">Don't have an account ? </h4>
                            <p class="font-13">Join <span>Rutonsha</span> Now</p>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Create Account</a>                
                        </div>
                        <div class="mt-4 text-center">
                            <p class="mb-0">© 2019 rutonsha </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

</body>
</html>
