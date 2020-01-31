<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Applicator - Admin Dashboard Template</title>
    <link rel="apple-touch-icon" href="{{ asset('/bower_components/assets-admin-ecom/images/logo/apple-touch-icon.html') }}">
    <link rel="shortcut icon" href="{{ asset('/bower_components/assets-admin-ecom/images/logo/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('/bower_components/assets-admin-ecom/vendor/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/bower_components/assets-admin-ecom/vendor/PACE/themes/blue/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ asset('/bower_components/assets-admin-ecom/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout bg-gradient-info">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-7 d-none d-md-block">
                        <img class="img-fluid" src="{{ asset('/bower_components/assets-admin-ecom/images/logo/logo-white.png') }}" alt="">
                        <div class="m-t-15 m-l-20">
                            <h1 class="font-weight-light font-size-35 text-white">Exploring The World</h1>
                            <p class="text-white width-70 text-opacity m-t-25 font-size-16">Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up.</p>
                            <div class="m-t-60">
                                <a href="#" class="text-white text-link m-r-15">Term &amp; Conditions</a>
                                <a href="#" class="text-white text-link">Privacy &amp; Policy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <div class="p-h-15 p-v-40">
                                    <h2>Login</h2>
                                    <p class="m-b-15 font-size-13">Please enter your user name and password to login</p>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group" style="margin-left: 20px">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-lg btn-gradient-success">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/bower_components/assets-admin-ecom/js/vendor.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/js/app.min.js') }}"></script>
</body>
</html>