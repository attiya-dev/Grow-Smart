<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>GrowSmart | Forgot Password</title>


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
           BODY
        ========================================================= */

        body {

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 20px;

            overflow-x: hidden;

            position: relative;

            background:

                linear-gradient(
                    rgba(9, 43, 34, 0.68),
                    rgba(9, 43, 34, 0.68)
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

            background: rgba(255,255,255,0.05);

            top: -250px;

            left: -200px;

            pointer-events: none;
        }


        body::after {

            content: "";

            position: fixed;

            width: 450px;

            height: 450px;

            border-radius: 50%;

            background: rgba(255,255,255,0.05);

            right: -220px;

            bottom: -220px;

            pointer-events: none;
        }


        /* =========================================================
           MAIN CONTAINER
        ========================================================= */

        .container {

            width: 500px;

            max-width: 100%;

            background: white;

            border-radius: 22px;

            overflow: hidden;

            position: relative;

            z-index: 2;

            box-shadow:

                0 25px 70px
                rgba(0,0,0,0.30),

                0 5px 20px
                rgba(0,0,0,0.12);

            animation: cardAppear 0.7s ease;
        }


        /* =========================================================
           CARD ANIMATION
        ========================================================= */

        @keyframes cardAppear {

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
           MAIN CONTENT
        ========================================================= */

        .forgot-box {

            width: 100%;

            padding: 45px;
        }


        /* =========================================================
           GROWSMART BRAND
        ========================================================= */

        .brand {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 30px;
        }


        /* =========================================================
           GROWSMART LOGO
        ========================================================= */

        .brand-logo {

            width: 52px;

            height: 52px;

            display: flex;

            justify-content: center;

            align-items: center;

            border-radius: 13px;

            background: #e7f2eb;

            box-shadow:

                0 6px 18px
                rgba(46,139,87,0.15);

            overflow: hidden;

            flex-shrink: 0;
        }


        .brand-logo img {

            width: 100%;

            height: 100%;

            object-fit: contain;

            padding: 4px;

            display: block;
        }


        /* =========================================================
           BRAND TEXT
        ========================================================= */

        .brand-text {

            display: flex;

            flex-direction: column;

            justify-content: center;
        }


        .brand-name {

            color: #183a35;

            font-size: 21px;

            font-weight: 700;

            line-height: 1.2;
        }


        .brand-tagline {

            color: #7a8881;

            font-size: 9px;

            font-weight: 500;

            letter-spacing: 0.8px;

            text-transform: uppercase;

            margin-top: 3px;
        }


        /* =========================================================
           LOCK ICON
        ========================================================= */

        .lock-icon {

            width: 72px;

            height: 72px;

            display: flex;

            justify-content: center;

            align-items: center;

            margin: 0 auto 20px;

            border-radius: 50%;

            background:

                linear-gradient(
                    135deg,
                    #e8f4ec,
                    #dcefe2
                );

            color: #2e8b57;

            font-size: 28px;

            box-shadow:

                0 8px 25px
                rgba(46,139,87,0.12);
        }


        /* =========================================================
           HEADING
        ========================================================= */

        .forgot-box h2 {

            color: #183a35;

            font-size: 30px;

            font-weight: 700;

            margin-bottom: 9px;

            text-align: center;
        }


        /* =========================================================
           SUBTITLE
        ========================================================= */

        .subtitle {

            color: #7a8881;

            font-size: 13px;

            line-height: 1.7;

            margin-bottom: 25px;

            text-align: center;
        }


        /* =========================================================
           SUCCESS MESSAGE
        ========================================================= */

        .message.success {

            background: #edf9f0;

            color: #217a3a;

            border: 1px solid #c9ead2;

            padding: 11px 13px;

            border-radius: 9px;

            margin-bottom: 17px;

            font-size: 12px;

            line-height: 1.5;
        }


        /* =========================================================
           ERROR MESSAGE
        ========================================================= */

        .message.error {

            background: #fff0f0;

            color: #b42318;

            border: 1px solid #ffd0d0;

            padding: 11px 13px;

            border-radius: 9px;

            margin-bottom: 17px;

            font-size: 12px;

            line-height: 1.5;
        }


        /* =========================================================
           FORM LABEL
        ========================================================= */

        .form-label {

            display: block;

            color: #183a35;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 8px;
        }


        /* =========================================================
           INPUT WRAPPER
        ========================================================= */

        .input-wrapper {

            position: relative;

            width: 100%;

            margin-bottom: 18px;
        }


        /* =========================================================
           INPUT ICON
        ========================================================= */

        .input-icon {

            position: absolute;

            left: 15px;

            top: 50%;

            transform: translateY(-50%);

            color: #7a8881;

            font-size: 15px;

            pointer-events: none;
        }


        /* =========================================================
           EMAIL INPUT
        ========================================================= */

        .form-control {

            width: 100%;

            height: 52px;

            padding:

                0
                15px
                0
                45px;

            border: 1px solid #d9e0dc;

            border-radius: 11px;

            background: #f8faf9;

            color: #183a35;

            font-size: 13px;

            outline: none;

            transition: 0.25s;
        }


        .form-control::placeholder {

            color: #a3ada8;

            font-size: 12px;
        }


        .form-control:focus {

            background: white;

            border-color: #2e8b57;

            box-shadow:

                0 0 0 4px
                rgba(46,139,87,0.10);
        }


        /* =========================================================
           RESET BUTTON
        ========================================================= */

        .reset-btn {

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


        .reset-btn:hover {

            transform: translateY(-2px);

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


        /* =========================================================
           BACK TO LOGIN
        ========================================================= */

        .back-login {

            display: block;

            text-align: center;

            margin-top: 20px;

            color: #2e6b57;

            font-size: 12px;

            font-weight: 500;

            text-decoration: none;

            transition: 0.2s;
        }


        .back-login:hover {

            color: #183a35;

            text-decoration: underline;
        }


        /* =========================================================
           MOBILE
        ========================================================= */

        @media (max-width: 600px) {

            body {

                min-height: 100svh;

                padding: 15px;

                overflow-y: auto;
            }


            .container {

                width: 100%;

                max-width: 450px;

                border-radius: 20px;
            }


            .forgot-box {

                padding: 35px 25px;
            }


            .brand {

                margin-bottom: 25px;
            }


            .brand-logo {

                width: 46px;

                height: 46px;
            }


            .brand-name {

                font-size: 19px;
            }


            .brand-tagline {

                font-size: 8px;
            }


            .lock-icon {

                width: 65px;

                height: 65px;

                font-size: 25px;

                margin-bottom: 17px;
            }


            .forgot-box h2 {

                font-size: 27px;
            }


            .subtitle {

                font-size: 12px;

                margin-bottom: 22px;
            }


            .form-control {

                height: 51px;
            }


            .reset-btn {

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


            .forgot-box {

                padding: 28px 19px;
            }


            .brand-logo {

                width: 40px;

                height: 40px;
            }


            .brand-name {

                font-size: 17px;
            }


            .brand-tagline {

                font-size: 7px;

                letter-spacing: 0.5px;
            }


            .lock-icon {

                width: 60px;

                height: 60px;

                font-size: 23px;
            }


            .forgot-box h2 {

                font-size: 24px;
            }


            .subtitle {

                font-size: 12px;
            }


            .form-control {

                height: 49px;

                font-size: 12px;
            }


            .reset-btn {

                height: 47px;

                font-size: 13px;
            }


            .back-login {

                font-size: 11px;
            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     SINGLE WHITE BOX
========================================================= -->

<div class="container">


    <div class="forgot-box">


        <!-- =====================================================
             GROWSMART BRAND
        ====================================================== -->

        <div class="brand">


            <div class="brand-logo">

                <img
                    src="{{ asset('images/logo1.jpg') }}"
                    alt="GrowSmart Logo"
                >

            </div>


            <div class="brand-text">

                <span class="brand-name">
                    GrowSmart
                </span>


                <span class="brand-tagline">
                    Smart Agriculture
                </span>

            </div>

        </div>


        <!-- =====================================================
             LOCK ICON
        ====================================================== -->

        <div class="lock-icon">

            <i class="fa-solid fa-lock"></i>

        </div>


        <!-- =====================================================
             HEADING
        ====================================================== -->

        <h2>

            Forgot Password?

        </h2>


        <p class="subtitle">

            Don't worry. We'll help you reset your password
            and get back to your GrowSmart account.

        </p>


        <!-- =====================================================
             SUCCESS MESSAGE
        ====================================================== -->

        @if(session('success'))

            <div class="message success">

                <i class="fa-solid fa-circle-check"></i>

                {{ session('success') }}

            </div>

        @endif


        <!-- =====================================================
             ERROR MESSAGE
        ====================================================== -->

        @if($errors->any())

            <div class="message error">

                <i class="fa-solid fa-circle-exclamation"></i>

                {{ $errors->first() }}

            </div>

        @endif


        <!-- =====================================================
             FORGOT PASSWORD FORM
        ====================================================== -->

        <form
            method="POST"
            action="{{ route('password.email') }}"
        >

            @csrf


            <!-- EMAIL LABEL -->

            <label
                class="form-label"
                for="email"
            >

                Email Address

            </label>


            <!-- EMAIL INPUT -->

            <div class="input-wrapper">

                <i class="fa-solid fa-envelope input-icon"></i>


                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}"
                    placeholder="Enter your registered email"
                    autocomplete="email"
                    required
                >

            </div>


            <!-- SEND RESET LINK -->

            <button
                type="submit"
                class="reset-btn"
            >

                <i class="fa-solid fa-paper-plane"></i>

                Send Reset Link

            </button>

        </form>


        <!-- =====================================================
             BACK TO LOGIN
        ====================================================== -->

        <a
            href="{{ route('login') }}"
            class="back-login"
        >

            <i class="fa-solid fa-arrow-left"></i>

            Back to Login

        </a>


    </div>


</div>


</body>

</html>