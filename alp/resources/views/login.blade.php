<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Log In | Queen of Thrift</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            margin: 0;
            background-image: url(../images/whatsapp1392930183.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 150%;
            max-width: 550px;
        }
        .login-container {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            width: 100%;
            max-width: 400px;
        }
        .signup-link {
            text-align: center;
            margin-top: 20px;
        }
        .signup-link a {
            color: #f26522;
            text-decoration: none;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
        /* Media Query for small screens */
        @media (max-width: 576px) {
            .login-container {
                margin: 10px;
                padding: 15px;
            }
        }
        .btn-custom {
            background-color: #f26522 !important;
            color: #ffffff !important; 
        }


    </style>
</head>
<body>
    <div class="logo">
        <a href="{{ route('login') }}">
            <img src="{{ asset('images/Untitled42_20240520114859.png') }}" alt="Logo">
        </a>
    </div>
    <div class="login-container">
        <h2 class="text-center">Log In</h2>
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-custom btn-block" formaction="{{ route('home') }}">Log In</button>
        </form>
        <div class="signup-link">
            <p>Don't have an account? <span><a href="{{ route('registration') }}"><u>Sign up</u></a></span></p>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
