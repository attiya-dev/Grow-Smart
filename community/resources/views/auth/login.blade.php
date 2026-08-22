<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>GrowSmart | Login</title>


    <!-- =========================================================
         FONT AWESOME
    ========================================================= -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


    <!-- =========================================================
         GOOGLE FONT
    ========================================================= -->

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >


    <style>

        /* =========================================================
           BASIC SETTINGS
        ========================================================= */

        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

            font-family: 'Poppins', sans-serif;

        }


        html,
        body {

            width: 100%;

            min-height: 100%;

        }


        /* =========================================================
           BODY BACKGROUND
        ========================================================= */

        body {

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 25px;

            overflow-x: hidden;

            background:

                linear-gradient(
                    rgba(10, 48, 37, 0.62),
                    rgba(10, 48, 37, 0.62)
                ),

                url("{{ asset('images/agriculture.jpg') }}")

                center center / cover no-repeat;

        }


        /* =========================================================
           BACKGROUND DECORATION
        ========================================================= */

        body::before {

            content: "";

            position: fixed;

            width: 500px;

            height: 500px;

            border-radius: 50%;

            background:
                rgba(255,255,255,0.05);

            top: -250px;

            left: -200px;

            pointer-events: none;

        }


        body::after {

            content: "";

            position: fixed;

            width: 400px;

            height: 400px;

            border-radius: 50%;

            background:
                rgba(255,255,255,0.05);

            right: -200px;

            bottom: -200px;

            pointer-events: none;

        }


        /* =========================================================
           MAIN CONTAINER
        ========================================================= */

        .container {

            width: 900px;

            max-width: 100%;

            min-height: 500px;

            background: white;

            border-radius: 22px;

            overflow: hidden;

            display: flex;

            position: relative;

            z-index: 2;

            box-shadow:

                0 25px 70px
                rgba(0,0,0,0.32),

                0 8px 25px
                rgba(0,0,0,0.15);

            animation:
                boxAppear 0.7s ease;

        }


        /* =========================================================
           BOX ANIMATION
        ========================================================= */

        @keyframes boxAppear {

            from {

                opacity: 0;

                transform:
                    translateY(25px)
                    scale(0.98);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);

            }

        }


        /* =========================================================
           LEFT SIDE
        ========================================================= */

        .left {

            width: 52%;

            padding: 45px 45px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            background: #ffffff;

        }


        /* =========================================================
           GROWSMART BRAND
        ========================================================= */

        .brand {

            display: flex;

            align-items: center;

            gap: 11px;

            margin-bottom: 25px;

            text-decoration: none;

        }


        .brand-logo {

            width: 45px;

            height: 45px;

            object-fit: cover;

            border-radius: 11px;

            border: 2px solid #e4eee8;

            box-shadow:
                0 4px 12px
                rgba(0,0,0,0.10);

        }


        .brand-name {

            color: #183a35;

            font-size: 20px;

            font-weight: 700;

            letter-spacing: 0.2px;

        }


        /* =========================================================
           HEADING
        ========================================================= */

        h2 {

            color: #183a35;

            font-size: 30px;

            font-weight: 700;

            margin-bottom: 7px;

        }


        .subtitle {

            color: #7a8881;

            font-size: 13px;

            margin-bottom: 25px;

            line-height: 1.6;

        }


        /* =========================================================
           INPUT GROUP
        ========================================================= */

        .input-group {

            position: relative;

            margin-bottom: 17px;

        }


        .input-group input {

            width: 100%;

            height: 50px;

            padding: 0 45px;

            border:

                1px solid
                #d9e0dc;

            border-radius: 10px;

            background: #f8faf9;

            color: #263832;

            font-size: 14px;

            outline: none;

            transition: 0.25s;

        }


        .input-group input::placeholder {

            color: #9ba6a1;

        }


        .input-group input:focus {

            background: #ffffff;

            border-color: #2e8b57;

            box-shadow:

                0 0 0 4px
                rgba(46,139,87,0.10);

        }


        /* =========================================================
           INPUT ICON
        ========================================================= */

        .input-group > i.fa-envelope,
        .input-group > i.fa-lock {

            position: absolute;

            left: 16px;

            top: 50%;

            transform:
                translateY(-50%);

            color: #7e8d86;

            font-size: 15px;

            z-index: 2;

        }


        /* =========================================================
           PASSWORD EYE
        ========================================================= */

        .eye {

            position: absolute;

            right: 15px;

            top: 50%;

            transform:
                translateY(-50%);

            color: #89958f;

            cursor: pointer;

            z-index: 3;

            transition: 0.2s;

        }


        .eye:hover {

            color: #2e8b57;

        }


        /* =========================================================
           REMOVE BROWSER PASSWORD EYE
        ========================================================= */

        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear {

            display: none;

        }


        input[type="password"]::-webkit-credentials-auto-fill-button,
        input[type="password"]::-webkit-contacts-auto-fill-button {

            display: none !important;

            visibility: hidden;

        }


        /* =========================================================
           FORGOT PASSWORD
        ========================================================= */

        .forgot-password {

            display: block;

            text-align: right;

            margin-top: -3px;

            margin-bottom: 20px;

            color: #2e6b57;

            font-size: 12px;

            font-weight: 500;

            text-decoration: none;

        }


        .forgot-password:hover {

            color: #183a35;

            text-decoration: underline;

        }


        /* =========================================================
           LOGIN BUTTON
        ========================================================= */

        button {

            width: 100%;

            height: 50px;

            border: none;

            border-radius: 10px;

            background:

                linear-gradient(
                    135deg,
                    #2e8b57,
                    #245f49
                );

            color: white;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            display: flex;

            justify-content: center;

            align-items: center;

            gap: 9px;

            box-shadow:

                0 8px 20px
                rgba(46,139,87,0.22);

            transition: 0.25s;

        }


        button:hover {

            transform:
                translateY(-2px);

            background:

                linear-gradient(
                    135deg,
                    #246f46,
                    #183a35
                );

            box-shadow:

                0 12px 25px
                rgba(46,139,87,0.30);

        }


        button i {

            font-size: 13px;

        }


        /* =========================================================
           REGISTER LINK
        ========================================================= */

        .register-text {

            margin-top: 20px;

            text-align: center;

            color: #7a8881;

            font-size: 12px;

        }


        .register-text a {

            color: #2e6b57;

            font-weight: 600;

            text-decoration: none;

            margin-left: 3px;

        }


        .register-text a:hover {

            text-decoration: underline;

        }


        /* =========================================================
           RIGHT IMAGE SIDE
        ========================================================= */

        .right {

            width: 48%;

            position: relative;

            overflow: hidden;

            display: flex;

            justify-content: center;

            align-items: center;

            background:

                url("{{ asset('images/forum.jpg') }}")

                center center / cover no-repeat;

        }


        /* =========================================================
           LIGHT IMAGE OVERLAY
           
           IMPORTANT:
           This is much lighter so the picture stays clear.
        ========================================================= */

        .right::before {

            content: "";

            position: absolute;

            inset: 0;

            background:

                linear-gradient(
                    180deg,
                    rgba(16,58,45,0.18),
                    rgba(9,35,29,0.38)
                );

            z-index: 1;

        }


        /* =========================================================
           DECORATIVE CIRCLE
        ========================================================= */

        .right::after {

            content: "";

            position: absolute;

            width: 350px;

            height: 350px;

            border-radius: 50%;

            border:
                1px solid
                rgba(255,255,255,0.22);

            right: -170px;

            top: -150px;

            z-index: 2;

        }


        /* =========================================================
           RIGHT CONTENT
        ========================================================= */

        .right-content {

            position: relative;

            z-index: 4;

            text-align: center;

            color: white;

            width: 80%;

            padding: 20px;

            text-shadow:
                0 2px 10px
                rgba(0,0,0,0.30);

        }


        /* =========================================================
           LEAF ICON
        ========================================================= */

        .leaf {

            width: 70px;

            height: 70px;

            margin: 0 auto 20px;

            display: flex;

            justify-content: center;

            align-items: center;

            border-radius: 50%;

            background:
                rgba(255,255,255,0.15);

            border:
                1px solid
                rgba(255,255,255,0.30);

            backdrop-filter:
                blur(5px);

            font-size: 30px;

            color: #ffffff;

        }


        /* =========================================================
           RIGHT HEADING
        ========================================================= */

        .right-content h3 {

            font-size: 28px;

            line-height: 1.25;

            font-weight: 600;

            margin-bottom: 12px;

        }


        /* =========================================================
           RIGHT DESCRIPTION
        ========================================================= */

        .right-content p {

            color: #ffffff;

            font-size: 12px;

            line-height: 1.8;

            max-width: 320px;

            margin: auto;

        }


        /* =========================================================
           ERROR MESSAGE
        ========================================================= */

        .error {

            background: #fff0f0;

            color: #b42318;

            border:
                1px solid
                #ffd0d0;

            padding: 10px 13px;

            border-radius: 9px;

            margin-bottom: 15px;

            font-size: 12px;

            line-height: 1.5;

        }


        /* =========================================================
           SUCCESS MESSAGE
        ========================================================= */

        .success {

            background: #edf9f0;

            color: #217a3a;

            border:
                1px solid
                #c9ead2;

            padding: 10px 13px;

            border-radius: 9px;

            margin-bottom: 15px;

            font-size: 12px;

            line-height: 1.5;

        }


        /* =========================================================
           TABLET
        ========================================================= */

        @media (max-width: 850px) {

            body {

                padding: 20px;

            }


            .container {

                width: 100%;

                max-width: 760px;

            }


            .left {

                padding: 40px 35px;

            }


            .right-content h3 {

                font-size: 24px;

            }

        }


        /* =========================================================
           MOBILE
        ========================================================= */

        @media (max-width: 650px) {

            body {

                min-height: 100svh;

                padding: 15px;

                background:

                    linear-gradient(
                        rgba(9,43,34,0.62),
                        rgba(9,43,34,0.62)
                    ),

                    url("{{ asset('images/agriculture.jpg') }}")

                    center center / cover no-repeat;

            }


            .container {

                width: 100%;

                max-width: 450px;

                min-height: auto;

                display: block;

                border-radius: 20px;

            }


            .left {

                width: 100%;

                padding: 35px 25px;

            }


            .right {

                display: none;

            }


            h2 {

                font-size: 27px;

            }


            .subtitle {

                font-size: 12px;

                margin-bottom: 24px;

            }


            .input-group input {

                height: 49px;

            }


            button {

                height: 49px;

            }

        }


        /* =========================================================
           SMALL MOBILE
        ========================================================= */

        @media (max-width: 400px) {

            body {

                padding: 10px;

            }


            .container {

                border-radius: 17px;

            }


            .left {

                padding: 28px 19px;

            }


            .brand-logo {

                width: 40px;

                height: 40px;

            }


            .brand-name {

                font-size: 18px;

            }


            h2 {

                font-size: 24px;

            }


            .input-group input {

                height: 47px;

                font-size: 13px;

                padding-left: 42px;

            }


            button {

                height: 47px;

                font-size: 13px;

            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     MAIN CONTAINER
========================================================= -->

<div class="container">


    <!-- =====================================================
         LEFT SIDE
    ====================================================== -->

    <div class="left">


        <!-- =================================================
             GROWSMART LOGO
        ================================================== -->

        <div class="brand">

            <img
                src="{{ asset('images/logo1.jpg') }}"
                alt="GrowSmart Logo"
                class="brand-logo"
            >

            <span class="brand-name">
                GrowSmart
            </span>

        </div>


        <!-- =================================================
             HEADING
        ================================================== -->

        <h2>
            Welcome Back
        </h2>


        <p class="subtitle">

            Login to continue your smart agriculture journey.

        </p>


        <!-- =================================================
             SESSION ERROR
        ================================================== -->

        @if(session('error'))

            <div class="error">

                <i class="fa-solid fa-circle-exclamation"></i>

                {{ session('error') }}

            </div>

        @endif


        <!-- =================================================
             VALIDATION ERROR
        ================================================== -->

        @if($errors->any())

            <div class="error">

                <i class="fa-solid fa-circle-exclamation"></i>

                {{ $errors->first() }}

            </div>

        @endif


        <!-- =================================================
             SUCCESS
        ================================================== -->

        @if(session('success'))

            <div class="success">

                <i class="fa-solid fa-circle-check"></i>

                {{ session('success') }}

            </div>

        @endif


        <!-- =================================================
             LOGIN FORM
        ================================================== -->

        <form
            method="POST"
            action="{{ route('login') }}"
        >

            @csrf


            <!-- EMAIL -->

            <div class="input-group">

                <i class="fa fa-envelope"></i>

                <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                >

            </div>


            <!-- PASSWORD -->

            <div class="input-group">

                <i class="fa fa-lock"></i>

                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                    required
                    autocomplete="current-password"
                >

                <i
                    class="fa fa-eye eye"
                    id="eye"
                ></i>

            </div>


            <!-- FORGOT PASSWORD -->

            <a
                href="{{ route('password.request') }}"
                class="forgot-password"
            >

                Forgot Password?

            </a>


            <!-- LOGIN BUTTON -->

            <button type="submit">

                Login

                <i class="fa-solid fa-arrow-right"></i>

            </button>


        </form>


        <!-- =================================================
             REGISTER
        ================================================== -->

        <p class="register-text">

            Don't have an account?

            <a href="{{ route('register') }}">

                Register

            </a>

        </p>


    </div>


    <!-- =====================================================
         RIGHT SIDE
    ====================================================== -->

    <div class="right">


        <div class="right-content">


            <div class="leaf">

                <i class="fa-solid fa-leaf"></i>

            </div>


            <h3>

                Grow Smarter.<br>

                Farm Better.

            </h3>


            <p>

                Discover smarter agricultural knowledge,
                better farming decisions and a connected
                farming community with GrowSmart.

            </p>


        </div>


    </div>


</div>


<!-- =========================================================
     PASSWORD SHOW / HIDE
========================================================= -->

<script>

    const password =
        document.getElementById("password");

    const eye =
        document.getElementById("eye");


    eye.addEventListener("click", function () {

        if (password.type === "password") {

            password.type = "text";

            eye.classList.remove("fa-eye");

            eye.classList.add("fa-eye-slash");

        }

        else {

            password.type = "password";

            eye.classList.remove("fa-eye-slash");

            eye.classList.add("fa-eye");

        }

    });

</script>


</body>

</html>
