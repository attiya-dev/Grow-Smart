```blade
<!DOCTYPE html>
<html lang="{{ current_language() }}" dir="ltr" class="{{ is_urdu() ? 'urdu-mode' : '' }}">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ t('GrowSmart | Forgot Password', 'گرو اسمارٹ | پاس ورڈ بھول گئے؟') }}
    </title>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

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

        /* Main Card */

        .container {

            width: 500px;

            max-width: 100%;

            background: white;

            border-radius: 22px;

            overflow: hidden;

            position: relative;

            z-index: 2;

            box-shadow:
                0 25px 70px rgba(0,0,0,0.30),
                0 5px 20px rgba(0,0,0,0.12);

            animation: cardAppear 0.7s ease;
        }

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

        /* Forgot Password Box */

        .forgot-box {

            width: 100%;

            padding: 45px;
        }

        /* Brand */

        .brand {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 30px;
        }

        .brand-logo {

            width: 52px;

            height: 52px;

            display: flex;

            justify-content: center;

            align-items: center;

            border-radius: 13px;

            background: #e7f2eb;

            box-shadow:
                0 6px 18px rgba(46,139,87,0.15);

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

        /* Lock Icon */

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
                0 8px 25px rgba(46,139,87,0.12);
        }

        /* Heading */

        .forgot-box h2 {

            color: #183a35;

            font-size: 30px;

            font-weight: 700;

            margin-bottom: 9px;

            text-align: center;
        }

        /* Subtitle */

        .subtitle {

            color: #7a8881;

            font-size: 13px;

            line-height: 1.7;

            margin-bottom: 25px;

            text-align: center;
        }

        /* Messages */

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

        /* Form Label */

        .form-label {

            display: block;

            color: #183a35;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 8px;
        }

        /* Input */

        .input-wrapper {

            position: relative;

            width: 100%;

            margin-bottom: 18px;
        }

        .input-icon {

            position: absolute;

            left: 15px;

            top: 50%;

            transform: translateY(-50%);

            color: #7a8881;

            font-size: 15px;

            pointer-events: none;
        }

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
                0 0 0 4px rgba(46,139,87,0.10);
        }

        /* Reset Button */

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
                0 8px 20px rgba(46,139,87,0.22);

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
                0 12px 25px rgba(46,139,87,0.30);
        }

        /* Back To Login */

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

        /* Urdu Design */

        html.urdu-mode,
        html.urdu-mode body {
            direction: ltr;
        }

        html.urdu-mode body {
            text-align: right;
        }

        html.urdu-mode .container,
        html.urdu-mode .container-fluid,
        html.urdu-mode .row,
        html.urdu-mode .d-flex,
        html.urdu-mode .navbar,
        html.urdu-mode .navbar-nav,
        html.urdu-mode footer,
        html.urdu-mode header {
            direction: ltr;
        }

        html.urdu-mode .row > *,
        html.urdu-mode .card,
        html.urdu-mode section,
        html.urdu-mode article,
        html.urdu-mode form,
        html.urdu-mode p,
        html.urdu-mode h1,
        html.urdu-mode h2,
        html.urdu-mode h3,
        html.urdu-mode h4,
        html.urdu-mode h5,
        html.urdu-mode h6,
        html.urdu-mode label,
        html.urdu-mode input,
        html.urdu-mode textarea,
        html.urdu-mode select,
        html.urdu-mode table,
        html.urdu-mode td,
        html.urdu-mode th {
            direction: rtl;
            text-align: right;
        }

        html.urdu-mode input,
        html.urdu-mode textarea,
        html.urdu-mode select {
            direction: rtl;
            text-align: right;
        }

        html.urdu-mode .text-start {
            text-align: right !important;
        }

        html.urdu-mode .text-end {
            text-align: left !important;
        }

        html.urdu-mode .brand {
            justify-content: flex-end;
        }

        /* Mobile */

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

        /* Small Mobile */

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

    <div class="container">

        <div class="forgot-box">

            <!-- Brand -->

            <div class="brand">

                <div class="brand-logo">

                    <img
                        src="{{ asset('images/logo1.jpg') }}"
                        alt="GrowSmart Logo"
                    >

                </div>

                <div class="brand-text">

                    <span class="brand-name">
                        {{ t('GrowSmart', 'گرو اسمارٹ') }}
                    </span>

                    <span class="brand-tagline">
                        {{ t('Smart Agriculture', 'ذہین زراعت') }}
                    </span>

                </div>

            </div>

            <!-- Lock Icon -->

            <div class="lock-icon">

                <i class="fa-solid fa-lock"></i>

            </div>

            <!-- Heading -->

            <h2>
                {{ t('Forgot Password?', 'پاس ورڈ بھول گئے؟') }}
            </h2>

            <!-- Subtitle -->

            <p class="subtitle">

                {{ t("Don't worry. We'll help you reset your password and get back to your GrowSmart account.", 'فکر نہ کریں۔ ہم آپ کا پاس ورڈ دوبارہ ترتیب دینے اور آپ کو اپنے گرو اسمارٹ اکاؤنٹ میں واپس آنے میں مدد کریں گے۔') }}

            </p>

            <!-- Success Message -->

            @if(session('success'))

                <div class="message success">

                    <i class="fa-solid fa-circle-check"></i>

                    {{ auth_text(session('success')) }}

                </div>

            @endif

            <!-- Error Message -->

            @if($errors->any())

                <div class="message error">

                    <i class="fa-solid fa-circle-exclamation"></i>

                    {{ auth_text($errors->first()) }}

                </div>

            @endif

            <!-- Forgot Password Form -->

            <form
                method="POST"
                action="{{ route('password.email') }}"
            >

                @csrf

                <label
                    class="form-label"
                    for="email"
                >

                    {{ t('Email Address', 'ای میل پتہ') }}

                </label>

                <div class="input-wrapper">

                    <i class="fa-solid fa-envelope input-icon"></i>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        placeholder="{{ is_urdu() ? 'اپنا رجسٹرڈ ای میل پتہ درج کریں' : 'Enter your registered email' }}"
                        autocomplete="email"
                        required
                    >

                </div>

                <button
                    type="submit"
                    class="reset-btn"
                >

                    <i class="fa-solid fa-paper-plane"></i>

                    {{ t('Send Reset Link', 'پاس ورڈ دوبارہ ترتیب دینے کا لنک بھیجیں') }}

                </button>

            </form>

            <!-- Back To Login -->

            <a
                href="{{ route('login') }}"
                class="back-login"
            >

                <i class="fa-solid fa-arrow-left"></i>

                {{ t('Back to Login', 'لاگ اِن پر واپس جائیں') }}

            </a>

        </div>

    </div>

</body>

</html>

