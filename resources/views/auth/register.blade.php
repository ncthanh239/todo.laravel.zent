<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ncthanh.com | Blog</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('../images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{ route('register') }}" method="post">
                    @csrf
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Sign in
                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Enter name">
                        <input class="input100" type="text" name="name" placeholder="Name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('name') }}" required autofocus >
                        
                        <span class="focus-input100" data-placeholder="&#xf2be;">
                            @if ($errors->has('name'))
                            <span>{{ $errors->first('name') }}</span>
                            @endif
                        </span>

                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
                        <input class="input100" type="email"  placeholder="Email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        
                        <span class="focus-input100" data-placeholder="&#xf207;">
                            @if ($errors->has('email'))
                            <span>{{ $errors->first('email') }}</span>
                            @endif
                        </span>

                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter address">
                        <input class="input100" type="text"  placeholder="Address" id="address
                        " class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required  >
                        
                        <span class="focus-input100" data-placeholder="&#xf2c2;">
                            @if ($errors->has('address'))
                            <span>{{ $errors->first('address') }}</span>
                            @endif
                        </span>

                    </div>
                     <div class="wrap-input100 validate-input" data-validate = "Enter phone">
                        <input class="input100" type="text"  placeholder="Phone" id="phone
                        " class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required  >
                        
                        <span class="focus-input100" data-placeholder="&#xf2c2;">
                            @if ($errors->has('phone'))
                            <span>{{ $errors->first('phone') }}</span>
                            @endif
                        </span>

                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required >
                        
                        <span class="focus-input100"  data-placeholder="&#xf191;">
                            @if ($errors->has('password'))
                            <span>{{ $errors->first('password') }}</span>
                            @endif
                        </span>
                        
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Retype password" >
                        <span class="focus-input100"  data-placeholder="&#xf2d5;"></span>
                        
                        
                        
                    </div>


                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" >
                        <label class="label-checkbox100" for="ckb1">
                            I agree to the terms
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Register
                        </button>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
    <!--===============================================================================================-->
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('js/mainlogin.js')}}"></script>

</body>
</html>