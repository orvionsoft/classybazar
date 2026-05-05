<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta name="csrf-token" content="igEtQwGfz0hpKoVDnpDYhEg17PsP86VmBfjfpIDl">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" alt="{{$generalsetting->name}}" />
	<title>Admin Login | {{$generalsetting->name}}</title>

	<!-- google font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

	<!-- aiz core css -->
	<link rel="stylesheet" href="{{asset('public/backEnd/')}}/assets_login/css/vendors.css">
    	<link rel="stylesheet" href="{{asset('public/backEnd/')}}/assets_login/css/aiz-core.css">

    <style>
        body {
            font-size: 12px;
        }
        .card {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            border: none;
            padding: 20px;
        }
        .card-body {
            padding: 40px;
        }
    </style>

</head>
<body class="">

	<div class="aiz-main-wrapper d-flex">
        <div class="flex-grow-1">
            
<div class="h-100 bg-cover bg-center py-5 d-flex align-items-center" style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-4 mx-auto">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="mb-5 text-center">
                                                            <img src="{{asset($generalsetting->white_logo)}}" class="mw-100 mb-4" height="40">
                                                        <h1 class="h3 text-primary mb-0" style="color: #03a416 !important;">Welcome to {{$generalsetting->name}}</h1>
                            <p>Login to your account.</p>
                        </div>
                          <form method="POST" action="{{route('login')}}" >
                          @csrf
							<div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                                                                                                                @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
															
															</div>
                            <div class="form-group" style="position: relative;">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required placeholder="Password" style="padding-right: 45px;">
                                <button id="togglePassword" type="button" class="btn" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); border: none; background: transparent; color: #6c757d; font-size: 18px;" aria-label="Toggle password visibility">👁</button>
                                                                                                                                    @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
															
															</div>
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="remember" id="checkbox-signin" value="1" >
                                            <span>Remember Me</span>
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                </div>
                                                                    <div class="col-sm-6">
                                        <!-- <div class="text-right">
                                            <a href="#" class="text-reset fs-14">Forgot password ?</a>
                                        </div> -->
                                    </div>
                                                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #03a416; border: none; color: white; font-size: 16px; font-weight: 600;">
                                Login
                            </button>
                        </form>
                                            </div>
                </div>
            </div>
        </div>
    </div>
</div>


        </div>
    </div><!-- .aiz-main-wrapper -->

    

    <script src="{{asset('public/backEnd/')}}/assets_login/js/vendors.js" ></script>
    <script src="{{asset('public/backEnd/')}}/assets_login/js/aiz-core.js" ></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var togglePassword = document.getElementById('togglePassword');
            var passwordInput = document.getElementById('password');
            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function () {
                    var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    this.textContent = type === 'password' ? '👁' : '🙈';
                });
            }
        });
    </script>
</body>

</html>