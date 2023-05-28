<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 p-0">
                <img src="{{'/img/login-bg.png'}}" class="img-fluid">
            </div>
            <div class="col-md-4 p-5 pt-0">
                <div class="center-div">
                    <img src="{{'/img/kimaya-logo.png'}}" class="img-fluid">
                    <div class="text-title">InnSight Performance Pro</div>
                </div>

                <form class="mt-5" action="{{ route('login') }}" method="POST">
                    @csrf

                    @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error')}}
                    </div>
                    @endif

                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                    </div>
                    <div class="form-group mt-16">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="row justify-content-between mt-20">
                        <div class="col-6">
                            <div class="form-check form-switch ">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="forgot-pw normal-text">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 text-center">
                        <button type="submit" class="btn submit-btn">Sign In</button>
                        <div class="normal-text mt-20">Dont have an account? <a href="{{'register'}}">Sign up now</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>