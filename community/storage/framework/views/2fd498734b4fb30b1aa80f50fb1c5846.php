<!DOCTYPE html>
<html lang="<?php echo e(current_language()); ?>" dir="ltr" class="<?php echo e(is_urdu() ? 'urdu-mode' : ''); ?>">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?php echo e(t('GrowSmart | Create Account', 'گرو اسمارٹ | اکاؤنٹ بنائیں')); ?></title>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: "Poppins", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
            background:
                linear-gradient(
                    135deg,
                    rgba(10, 43, 34, 0.88),
                    rgba(20, 78, 57, 0.72)
                ),
                url("<?php echo e(asset('images/agriculture.jpg')); ?>")
                center center / cover no-repeat;
        }

        body::before {
            content: "";
            position: fixed;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            top: -220px;
            left: -180px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.08);
            pointer-events: none;
        }

        body::after {
            content: "";
            position: fixed;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            right: -180px;
            bottom: -180px;
            background: rgba(184,149,90,0.10);
            border: 1px solid rgba(255,255,255,0.08);
            pointer-events: none;
        }

        .container {
            width: 100%;
            max-width: 880px;
            min-height: 500px;
            display: flex;
            position: relative;
            z-index: 5;
            overflow: hidden;
            border-radius: 20px;
            background: rgba(255,255,255,0.97);
            box-shadow:
                0 25px 65px rgba(0,0,0,0.30),
                0 5px 18px rgba(0,0,0,0.12);
            animation: containerAppear 0.7s ease;
        }

        @keyframes containerAppear {
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
            padding: 34px 42px;
            background: rgba(255,255,255,0.98);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 15px;
            color: #183a35;
            font-size: 15px;
            font-weight: 700;
        }

        .brand img {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            object-fit: cover;
        }

        .heading {
            margin-bottom: 18px;
        }

        .heading h2 {
            color: #183a35;
            font-size: 25px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .heading p {
            color: #718079;
            font-size: 11px;
            line-height: 1.5;
        }

        .error {
            background: #fff0f0;
            border-left: 4px solid #dc3545;
            color: #b4232c;
            padding: 8px 10px;
            margin-bottom: 10px;
            border-radius: 6px;
            font-size: 11px;
        }

        .success {
            background: #edfff3;
            border-left: 4px solid #2e8b57;
            color: #247342;
            padding: 8px 10px;
            margin-bottom: 10px;
            border-radius: 6px;
            font-size: 11px;
        }

        .password-error {
            background: #fff0f0;
            border-left: 4px solid #dc3545;
            color: #b4232c;
            padding: 8px 10px;
            margin-bottom: 9px;
            border-radius: 6px;
            font-size: 10px;
        }

        .input-group {
            position: relative;
            margin-bottom: 11px;
        }

        .input-group input {
            width: 100%;
            height: 42px;
            padding: 9px 40px;
            border: 1px solid #d9e0dc;
            border-radius: 8px;
            background: #f9fbfa;
            color: #263832;
            font-family: "Poppins", sans-serif;
            font-size: 11px;
            outline: none;
            transition: all 0.25s ease;
        }

        .input-group input::placeholder {
            color: #9aa6a0;
        }

        .input-group input:hover {
            border-color: #a9beb3;
            background: #ffffff;
        }

        .input-group input:focus {
            border-color: #2e8b57;
            background: white;
            box-shadow: 0 0 0 3px rgba(46,139,87,0.10);
        }

        .input-group > i:first-child {
            position: absolute;
            left: 14px;
            top: 14px;
            color: #7d8983;
            font-size: 12px;
            z-index: 2;
        }

        .input-group input:focus ~ i:first-child {
            color: #2e8b57;
        }

        .eye {
            position: absolute;
            right: 13px;
            top: 14px;
            color: #7d8983;
            cursor: pointer;
            font-size: 12px;
            transition: 0.2s;
            z-index: 3;
        }

        .eye:hover {
            color: #2e8b57;
            transform: scale(1.08);
        }

        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear {
            display: none;
        }

        input[type="password"]::-webkit-credentials-auto-fill-button,
        input[type="password"]::-webkit-contacts-auto-fill-button {
            display: none !important;
            visibility: hidden;
        }

        .register-btn {
            width: 100%;
            height: 42px;
            margin-top: 2px;
            border: none;
            border-radius: 8px;
            background:
                linear-gradient(
                    135deg,
                    #2e8b57,
                    #246f46
                );
            color: white;
            font-family: "Poppins", sans-serif;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 7px 16px rgba(46,139,87,0.20);
            transition: all 0.25s ease;
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(46,139,87,0.30);
            background:
                linear-gradient(
                    135deg,
                    #246f46,
                    #1d603c
                );
        }

        .register-btn:active {
            transform: translateY(0);
        }

        .login-text {
            margin-top: 14px;
            text-align: center;
            color: #7b8781;
            font-size: 10px;
        }

        .login-text a {
            color: #2e8b57;
            font-weight: 600;
            text-decoration: none;
            margin-left: 3px;
        }

        .login-text a:hover {
            text-decoration: underline;
        }

        .right {
            width: 45%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background:
                linear-gradient(
                    145deg,
                    rgba(16,44,39,0.92),
                    rgba(40,93,77,0.82)
                ),
                url("<?php echo e(asset('images/agriculture.jpg')); ?>")
                center center / cover no-repeat;
        }

        .right::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(
                    circle at 70% 25%,
                    rgba(255,255,255,0.12),
                    transparent 35%
                );
        }

        .right::after {
            content: "";
            position: absolute;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            right: -150px;
            bottom: -160px;
            border: 1px solid rgba(255,255,255,0.15);
            background: rgba(255,255,255,0.03);
        }

        .right-content {
            position: relative;
            z-index: 5;
            width: 100%;
            height: 100%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .right-content img {
            width: 220px;
            max-width: 85%;
            max-height: 210px;
            object-fit: contain;
            filter:
                drop-shadow(
                    0 12px 20px rgba(0,0,0,0.20)
                );
            animation: floating 4s ease-in-out infinite;
        }

        @keyframes floating {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .right-title {
            color: white;
            font-size: 19px;
            font-weight: 600;
            margin-top: 7px;
            margin-bottom: 6px;
        }

        .right-description {
            max-width: 300px;
            color: #d4e4dc;
            font-size: 10px;
            line-height: 1.6;
        }

        .features {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 16px;
        }

        .feature {
            color: #e0eee8;
            font-size: 9px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .feature i {
            color: #d6b16e;
            font-size: 10px;
        }

        @media (max-width: 900px) {

            body {
                padding: 15px;
            }

            .container {
                max-width: 760px;
                min-height: 480px;
            }

            .left {
                width: 56%;
                padding: 30px 35px;
            }

            .right {
                width: 44%;
            }

            .right-content img {
                width: 190px;
            }

            .right-title {
                font-size: 17px;
            }

        }

        @media (max-width: 700px) {

            body {
                padding: 12px;
                min-height: 100svh;
                align-items: center;
                overflow-y: auto;
                background:
                    linear-gradient(
                        135deg,
                        rgba(10,43,34,0.88),
                        rgba(20,78,57,0.76)
                    ),
                    url("<?php echo e(asset('images/agriculture.jpg')); ?>")
                    center center / cover no-repeat;
            }

            .container {
                width: 100%;
                max-width: 460px;
                min-height: auto;
                display: block;
                border-radius: 18px;
            }

            .left {
                width: 100%;
                padding: 28px 23px;
            }

            .right {
                display: none;
            }

            .brand {
                margin-bottom: 15px;
                font-size: 14px;
            }

            .brand img {
                width: 32px;
                height: 32px;
            }

            .heading h2 {
                font-size: 24px;
            }

            .heading p {
                font-size: 11px;
            }

            .input-group {
                margin-bottom: 11px;
            }

            .input-group input {
                height: 43px;
                font-size: 11px;
            }

            .register-btn {
                height: 43px;
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
                padding: 25px 18px;
            }

            .heading h2 {
                font-size: 22px;
            }

            .heading p {
                font-size: 10px;
            }

            .input-group input {
                height: 42px;
                padding-left: 40px;
                padding-right: 40px;
                font-size: 11px;
            }

            .input-group > i:first-child {
                left: 13px;
                top: 14px;
                font-size: 12px;
            }

            .eye {
                right: 13px;
                top: 14px;
                font-size: 12px;
            }

            .register-btn {
                height: 42px;
                font-size: 12px;
            }

            .login-text {
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
html.urdu-mode .input-group > i:first-child { left: auto; right: 16px; }
html.urdu-mode .input-group input { padding-left: 45px; padding-right: 45px; }
html.urdu-mode .eye { right: auto; left: 15px; }
</style>
</head>

<body>

<div class="container">

    <div class="left">

        <div class="brand">

            <img
                src="<?php echo e(asset('images/logo1.jpg')); ?>"
                alt="GrowSmart Logo"
            >

            <span>
                <?php echo e(t('GrowSmart', 'گرو اسمارٹ')); ?>

            </span>

        </div>

        <div class="heading">

            <h2>
                <?php echo e(t('Create Account', 'اکاؤنٹ بنائیں')); ?>

            </h2>

            <p>
                <?php echo e(t('Join GrowSmart and start your smart agriculture journey.', 'گرو اسمارٹ میں شامل ہوں اور اپنے ذہین زرعی سفر کا آغاز کریں۔')); ?>

            </p>

        </div>

        <?php if(session('error')): ?>

            <div class="error">

                <i class="fa-solid fa-circle-exclamation"></i>

                <?php echo e(auth_text(session('error'))); ?>


            </div>

        <?php endif; ?>

        <?php if(session('success')): ?>

            <div class="success">

                <i class="fa-solid fa-circle-check"></i>

                <?php echo e(auth_text(session('success'))); ?>


            </div>

        <?php endif; ?>

        <?php if($errors->has('name')): ?>

            <div class="error">

                <?php echo e(auth_text($errors->first('name'))); ?>


            </div>

        <?php endif; ?>

        <?php if($errors->has('email')): ?>

            <div class="error">

                <?php echo e(auth_text($errors->first('email'))); ?>


            </div>

        <?php endif; ?>

        <form
            method="POST"
            action="<?php echo e(route('register.store')); ?>"
        >

            <?php echo csrf_field(); ?>

            <div class="input-group">

                <i class="fa-solid fa-user"></i>

                <input
                    type="text"
                    name="name"
                    placeholder="<?php echo e(is_urdu() ? 'پورا نام' : 'Full Name'); ?>"
                    value="<?php echo e(old('name')); ?>"
                    required
                    autocomplete="name"
                >

            </div>

            <div class="input-group">

                <i class="fa-solid fa-envelope"></i>

                <input
                    type="email"
                    name="email"
                    placeholder="<?php echo e(is_urdu() ? 'ای میل پتہ' : 'Email Address'); ?>"
                    value="<?php echo e(old('email')); ?>"
                    required
                    autocomplete="email"
                >

            </div>

            <?php if($errors->has('password')): ?>

                <div class="password-error">

                    <?php echo e(auth_text($errors->first('password'))); ?>


                </div>

            <?php endif; ?>

            <div class="input-group">

                <i class="fa-solid fa-lock"></i>

                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="<?php echo e(is_urdu() ? 'پاس ورڈ' : 'Password'); ?>"
                    required
                    autocomplete="new-password"
                >

                <i
                    class="fa-solid fa-eye eye"
                    id="eye1"
                ></i>

            </div>

            <?php if($errors->has('password_confirmation')): ?>

                <div class="password-error">

                    <?php echo e(auth_text($errors->first('password_confirmation'))); ?>


                </div>

            <?php endif; ?>

            <div class="input-group">

                <i class="fa-solid fa-lock"></i>

                <input
                    type="password"
                    name="password_confirmation"
                    id="password2"
                    placeholder="<?php echo e(is_urdu() ? 'پاس ورڈ کی تصدیق کریں' : 'Confirm Password'); ?>"
                    required
                    autocomplete="new-password"
                >

                <i
                    class="fa-solid fa-eye eye"
                    id="eye2"
                ></i>

            </div>

            <button
                type="submit"
                class="register-btn"
            >

                <i class="fa-solid fa-user-plus"></i>

                &nbsp;

                <?php echo e(t('Register', 'رجسٹر کریں')); ?>


            </button>

        </form>

        <p class="login-text">

            <?php echo e(t('Already have an account?', 'کیا آپ کا پہلے سے اکاؤنٹ موجود ہے؟')); ?>


            <a href="<?php echo e(route('login')); ?>">
                <?php echo e(t('Login', 'داخل ہوں')); ?>

            </a>

        </p>

    </div>

    <div class="right">

        <div class="right-content">

            <img
                src="<?php echo e(asset('images/community.png')); ?>"
                alt="GrowSmart Community"
            >

            <h3 class="right-title">
                <?php echo e(t('Grow Smarter. Farm Better.', 'زیادہ سمجھداری سے اگائیں۔ بہتر کاشت کاری کریں۔')); ?>

            </h3>

            <p class="right-description">
                <?php echo e(t('Connect with the GrowSmart community and discover smarter agricultural knowledge and solutions.', 'گرو اسمارٹ کی کمیونٹی سے جڑیں اور بہتر زرعی معلومات اور مفید حل دریافت کریں۔')); ?>

            </p>

            <div class="features">

                <div class="feature">
                    <i class="fa-solid fa-leaf"></i>
                    <?php echo e(t('Smart Farming', 'ذہین کاشت کاری')); ?>

                </div>

                <div class="feature">
                    <i class="fa-solid fa-users"></i>
                    <?php echo e(t('Community', 'کمیونٹی')); ?>

                </div>

                <div class="feature">
                    <i class="fa-solid fa-seedling"></i>
                    <?php echo e(t('Better Growth', 'بہتر نشوونما')); ?>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

    function togglePassword(passwordId, eyeId) {

        const password = document.getElementById(passwordId);
        const eye = document.getElementById(eyeId);

        eye.addEventListener("click", function () {

            if (password.type === "password") {

                password.type = "text";

                eye.classList.remove("fa-eye");

                eye.classList.add("fa-eye-slash");

            } else {

                password.type = "password";

                eye.classList.remove("fa-eye-slash");

                eye.classList.add("fa-eye");

            }

        });

    }

    togglePassword("password", "eye1");

    togglePassword("password2", "eye2");

</script>

</body>

</html>
<?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/auth/register.blade.php ENDPATH**/ ?>