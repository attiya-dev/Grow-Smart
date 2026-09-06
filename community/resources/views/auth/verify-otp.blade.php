<!DOCTYPE html>
<html lang="{{ current_language() }}" dir="ltr" class="{{ is_urdu() ? 'urdu-mode' : '' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ t('GrowSmart | Email Verification', 'گرو اسمارٹ | ای میل کی تصدیق') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            padding: 15px;
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
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            top: -200px;
            left: -160px;
            pointer-events: none;
        }

        body::after {
            content: "";
            position: fixed;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            right: -170px;
            bottom: -170px;
            pointer-events: none;
        }

        .container {
            width: 820px;
            max-width: 100%;
            min-height: 440px;
            display: flex;
            background: white;
            border-radius: 19px;
            overflow: hidden;
            position: relative;
            z-index: 2;
            box-shadow:
                0 20px 55px rgba(0,0,0,0.28),
                0 5px 15px rgba(0,0,0,0.10);
            animation: cardAppear 0.7s ease;
        }

        @keyframes cardAppear {
            from {
                opacity: 0;
                transform: translateY(20px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .left {
            width: 55%;
            padding: 32px 38px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: white;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            margin-bottom: 17px;
        }

        .brand-logo {
            width: 58px;
            height: 58px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 12px;
            background: #e7f2eb;
            box-shadow: 0 6px 17px rgba(46,139,87,0.14);
            overflow: hidden;
            flex-shrink: 0;
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
            padding: 2px;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .brand-name {
            color: #183a35;
            font-size: 20px;
            font-weight: 700;
            line-height: 1.2;
        }

        .brand-tagline {
            color: #7a8881;
            font-size: 8px;
            font-weight: 500;
            letter-spacing: 0.7px;
            text-transform: uppercase;
            margin-top: 3px;
        }

        .email-icon {
            width: 56px;
            height: 56px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 13px;
            border-radius: 50%;
            background: linear-gradient(135deg, #e8f4ec, #dcefe2);
            color: #2e8b57;
            font-size: 22px;
            box-shadow: 0 6px 18px rgba(46,139,87,0.10);
        }

        h2 {
            color: #183a35;
            font-size: 25px;
            font-weight: 700;
            margin-bottom: 5px;
            text-align: center;
        }

        .subtitle {
            color: #7a8881;
            font-size: 11px;
            line-height: 1.5;
            margin-bottom: 15px;
            text-align: center;
        }

        .info-text {
            text-align: center;
            color: #697871;
            font-size: 11px;
            line-height: 1.5;
            margin-bottom: 13px;
        }

        .info-text strong {
            color: #2e6b57;
            font-weight: 600;
        }

        .otp-input {
            width: 100%;
            height: 46px;
            padding: 0 15px;
            border: 1px solid #d9e0dc;
            border-radius: 9px;
            background: #f8faf9;
            color: #183a35;
            outline: none;
            text-align: center;
            letter-spacing: 8px;
            font-size: 19px;
            font-weight: 600;
            transition: 0.25s;
            margin-bottom: 12px;
        }

        .otp-input::placeholder {
            color: #a3ada8;
            font-size: 12px;
            letter-spacing: 1px;
            font-weight: 400;
        }

        .otp-input:focus {
            background: white;
            border-color: #2e8b57;
            box-shadow: 0 0 0 3px rgba(46,139,87,0.10);
        }

        .verify-btn {
            width: 100%;
            height: 43px;
            border: none;
            border-radius: 9px;
            background: linear-gradient(135deg, #2e8b57, #245f49);
            color: white;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 7px;
            box-shadow: 0 6px 15px rgba(46,139,87,0.20);
            transition: 0.25s;
        }

        .verify-btn:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #246f46, #183a35);
            box-shadow: 0 9px 20px rgba(46,139,87,0.28);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 13px;
            color: #2e6b57;
            font-size: 10px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.2s;
        }

        .back-link:hover {
            color: #183a35;
            text-decoration: underline;
        }

        .message.success {
            background: #edf9f0;
            color: #217a3a;
            border: 1px solid #c9ead2;
            padding: 8px 10px;
            border-radius: 7px;
            margin-bottom: 10px;
            font-size: 10px;
            line-height: 1.4;
        }

        .message.error {
            background: #fff0f0;
            color: #b42318;
            border: 1px solid #ffd0d0;
            padding: 8px 10px;
            border-radius: 7px;
            margin-bottom: 10px;
            font-size: 10px;
            line-height: 1.4;
        }

        .right {
            width: 45%;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background:
                linear-gradient(
                    145deg,
                    rgba(16,44,39,0.25),
                    rgba(24,58,53,0.50)
                ),
                url("{{ asset('images/forum.jpg') }}")
                center center / cover no-repeat;
        }

        .right::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    180deg,
                    rgba(15,55,43,0.10),
                    rgba(9,35,29,0.62)
                );
        }

        .right::after {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.18);
            right: -150px;
            top: -135px;
        }

        .right-content {
            position: relative;
            z-index: 3;
            width: 90%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 25px 15px;
        }

        .right-logo {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 14px;
        }

        .right-logo-image {
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: rgba(255,255,255,0.16);
            border: 2px solid rgba(255,255,255,0.28);
            backdrop-filter: blur(8px);
            box-shadow:
                0 10px 28px rgba(0,0,0,0.20),
                inset 0 0 20px rgba(255,255,255,0.08);
            margin-bottom: 9px;
            overflow: hidden;
        }

        .right-logo-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            padding: 0;
        }

        .right-logo-name {
            color: white;
            font-size: 19px;
            font-weight: 700;
            letter-spacing: 0.4px;
        }

        .right-content h3 {
            font-size: 22px;
            line-height: 1.3;
            font-weight: 600;
            margin-bottom: 9px;
        }

        .right-content p {
            color: #d5e3dc;
            font-size: 10px;
            line-height: 1.7;
            max-width: 270px;
            margin: auto;
        }

        @media (max-height: 650px) and (min-width: 651px) {
            body {
                padding: 10px;
            }

            .container {
                min-height: 390px;
                width: 760px;
            }

            .left {
                padding: 25px 32px;
            }

            .brand {
                margin-bottom: 10px;
            }

            .brand-logo {
                width: 50px;
                height: 50px;
            }

            .brand-name {
                font-size: 17px;
            }

            .email-icon {
                width: 48px;
                height: 48px;
                font-size: 19px;
                margin-bottom: 9px;
            }

            h2 {
                font-size: 22px;
            }

            .subtitle {
                margin-bottom: 10px;
            }

            .info-text {
                margin-bottom: 9px;
            }

            .otp-input {
                height: 40px;
                margin-bottom: 8px;
            }

            .verify-btn {
                height: 39px;
            }

            .back-link {
                margin-top: 8px;
            }

            .right-logo-image {
                width: 90px;
                height: 90px;
            }

            .right-logo {
                margin-bottom: 8px;
            }

            .right-content h3 {
                font-size: 19px;
                margin-bottom: 6px;
            }
        }

        @media (max-width: 650px) {
            body {
                min-height: 100svh;
                padding: 12px;
                overflow-y: auto;
                background:
                    linear-gradient(
                        rgba(9,43,34,0.72),
                        rgba(9,43,34,0.72)
                    ),
                    url("{{ asset('images/agriculture.jpg') }}")
                    center center / cover no-repeat;
            }

            .container {
                width: 100%;
                max-width: 430px;
                min-height: auto;
                display: block;
                border-radius: 18px;
            }

            .left {
                width: 100%;
                padding: 28px 22px;
            }

            .right {
                display: none;
            }

            .brand {
                margin-bottom: 18px;
            }

            .brand-logo {
                width: 52px;
                height: 52px;
            }

            .brand-name {
                font-size: 18px;
            }

            h2 {
                font-size: 24px;
            }

            .subtitle {
                font-size: 11px;
                margin-bottom: 18px;
            }

            .email-icon {
                width: 58px;
                height: 58px;
                font-size: 22px;
                margin-bottom: 13px;
            }

            .otp-input {
                height: 45px;
                font-size: 18px;
                letter-spacing: 7px;
            }

            .verify-btn {
                height: 42px;
            }
        }

        @media (max-width: 400px) {
            body {
                padding: 8px;
            }

            .container {
                border-radius: 16px;
            }

            .left {
                padding: 24px 17px;
            }

            .brand-logo {
                width: 48px;
                height: 48px;
            }

            .brand-name {
                font-size: 16px;
            }

            h2 {
                font-size: 22px;
            }

            .info-text {
                font-size: 11px;
            }

            .otp-input {
                height: 43px;
                font-size: 17px;
                letter-spacing: 6px;
            }

            .verify-btn {
                height: 40px;
                font-size: 12px;
            }

            .back-link {
                font-size: 10px;
            }
        }
    </style>

<style id="growsmart-urdu-design">
html.urdu-mode, html.urdu-mode body { direction: ltr; }
html.urdu-mode body { text-align: right; }
html.urdu-mode .container, html.urdu-mode .container-fluid, html.urdu-mode .row, html.urdu-mode .d-flex, html.urdu-mode .navbar, html.urdu-mode .navbar-nav, html.urdu-mode footer, html.urdu-mode header { direction: ltr; }
html.urdu-mode .row > *, html.urdu-mode .card, html.urdu-mode section, html.urdu-mode article, html.urdu-mode form, html.urdu-mode p, html.urdu-mode h1, html.urdu-mode h2, html.urdu-mode h3, html.urdu-mode h4, html.urdu-mode h5, html.urdu-mode h6, html.urdu-mode label, html.urdu-mode input, html.urdu-mode textarea, html.urdu-mode select, html.urdu-mode table, html.urdu-mode td, html.urdu-mode th { direction: rtl; text-align: right; }
html.urdu-mode input, html.urdu-mode textarea, html.urdu-mode select { direction: rtl; text-align: right; }
html.urdu-mode .text-start { text-align: right !important; }
html.urdu-mode .text-end { text-align: left !important; }
html.urdu-mode .brand { justify-content: flex-end; }
</style>
</head>

<body>

<div class="container">

    <div class="left">

        <div class="brand">
            <div class="brand-logo">
                <img
                    src="{{ asset('images/logo1.jpg') }}"
                    alt="GrowSmart Logo"
                >
            </div>

            <div class="brand-text">
                <span class="brand-name">GrowSmart</span>
                <span class="brand-tagline">{{ t('Smart Agriculture', 'ذہین زراعت') }}</span>
            </div>
        </div>

        <div class="email-icon">
            <i class="fa-solid fa-envelope-circle-check"></i>
        </div>

        <h2>{{ t('Verify Your Email', 'اپنے ای میل پتے کی تصدیق کریں') }}</h2>

        <p class="subtitle">
            {{ t('One more step to complete your GrowSmart account.', 'اپنے گرو اسمارٹ اکاؤنٹ کی تکمیل کے لیے یہ آخری مرحلہ ہے۔') }}
        </p>

        @if(session('success'))
            <div class="message success">
                <i class="fa-solid fa-circle-check"></i>
                {{ auth_text(session('success')) }}
            </div>
        @endif

        @if(session('error'))
            <div class="message error">
                <i class="fa-solid fa-circle-exclamation"></i>
                {{ auth_text(session('error')) }}
            </div>
        @endif

        @if($errors->any())
            <div class="message error">
                <i class="fa-solid fa-circle-exclamation"></i>

                @foreach($errors->all() as $error)
                    <div>{{ auth_text($error) }}</div>
                @endforeach
            </div>
        @endif

        <p class="info-text">
            {{ t('Enter the 6-digit verification code that was sent to your email address.', 'اپنے ای میل پتے پر بھیجا گیا 6 ہندسوں کا تصدیقی کوڈ درج کریں۔') }}
        </p>

        <form
            action="{{ route('verify.otp') }}"
            method="POST"
        >
            @csrf

            <input
                type="text"
                name="otp"
                class="otp-input"
                placeholder="{{ is_urdu() ? 'او ٹی پی درج کریں' : 'Enter OTP' }}"
                maxlength="6"
                minlength="6"
                inputmode="numeric"
                pattern="[0-9]{6}"
                autocomplete="one-time-code"
                required
            >

            <button
                type="submit"
                class="verify-btn"
            >
                {{ t('Verify Email', 'ای میل کی تصدیق کریں') }}
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>

        <a
            href="{{ route('register') }}"
            class="back-link"
        >
            <i class="fa-solid fa-arrow-left"></i>
            {{ t('Back to Register', 'رجسٹریشن پر واپس جائیں') }}
        </a>

    </div>

    <div class="right">

        <div class="right-content">

            <div class="right-logo">

                <div class="right-logo-image">
                    <img
                        src="{{ asset('images/logo1.jpg') }}"
                        alt="GrowSmart Logo"
                    >
                </div>

                <div class="right-logo-name">
                    {{ t('GrowSmart', 'گرو اسمارٹ') }}
                </div>

            </div>

            <h3>
                {{ t('Welcome to', 'خوش آمدید') }}<br>
                {{ t('GrowSmart', 'گرو اسمارٹ') }}
            </h3>

            <p>
                {{ t('Verify your email address and start benefiting from better agricultural information, farming solutions and our growing community.', 'اپنے ای میل پتے کی تصدیق کریں اور بہتر زرعی معلومات، کاشت کاری کے حل اور ہماری بڑھتی ہوئی کمیونٹی سے فائدہ اٹھانا شروع کریں۔') }}
            </p>

        </div>

    </div>

</div>

<script>
    const otpInput = document.querySelector(".otp-input");

    otpInput.addEventListener("input", function () {
        this.value = this.value.replace(/[^0-9]/g, "");

        if (this.value.length > 6) {
            this.value = this.value.substring(0, 6);
        }
    });
</script>

</body>
</html>

