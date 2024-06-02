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
        <title>Sign Up | Queen of Thrift</title>
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
             .Logo{
                /* bottom: 200px; */
                left: 370px;
            }

            img{
                width: 500px;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
                background-image: url(../images/whatsapp1392930183.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            .container {
                max-width: 500px;
                /* margin: 50px auto; */
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #f26522;
            color: #fff;
            cursor: pointer;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .signup-link a:hover {
            text-decoration: underline;
            
        }
        @media only screen and (min-width: 768px) {
             .Logo {
                 left: 0;
                 text-align: center;
                 width: 100%;
             }

             .container {
                 width: 90%;
                 padding: 10px;
             }

             .login {
                 position: static;
                 top: auto;
                 right: auto;
                 margin-top: 20px;
             }
         }

       
        </style>

</head>
<body>
    <div class="row bg">
        <div class="Logo col-sm-12">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('images/Untitled42_20240520114859.png') }}" alt="Logo">
                </a>
        </div>
    </div>
    <div class="container">
        <h2>Sign Up</h2>
        <form >
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full-name" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-block" formaction="{{ route('home') }}">Sign Up</button>
            </div>
        </form>
        <div class="form-group login-link">
            <p>Already have account? <span><a href="{{ route('login') }}"><u>Login</u></a></span></p>
        </div>
    </div>
</body>
</html>