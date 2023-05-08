<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" action="{{ route('login') }}" class="register-form" id="register-form">
                            @csrf

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-email"></i></label>
                                <input type="password" name="password" id="password" placeholder="Your password"/>
                            </div>
                            
                            
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="login" class="form-submit" value="Login"/>
                            </div>
                        </form>
                        <p>If you are not registered, please <a href="{{ route('register') }}">Sign Up</a></p>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('assets/frontend/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>