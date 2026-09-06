<!DOCTYPE html>
<html lang="<?php echo e(current_language()); ?>" dir="ltr" class="<?php echo e(is_urdu() ? 'urdu-mode' : ''); ?>">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GrowSmart | Smart Agriculture</title>

    
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >

    <style>

        

        * {
            box-sizing: border-box;
        }

        :root {

            --forest-dark: #102C27;
            --forest: #183A35;
            --primary: #2E6B57;
            --primary-light: #6F9581;

            --sage: #DDE9E2;
            --sage-light: #EEF4F0;

            --cream: #F7F6F1;
            --white: #FFFFFF;

            --text: #263832;
            --muted: #718079;

            --gold: #B9955A;
            --gold-light: #F1E8D7;
        }


        html {
            scroll-behavior: smooth;
        }


        body {

            margin: 0;

            font-family:
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                Roboto,
                Helvetica,
                Arial,
                sans-serif;

            background: var(--cream);

            color: var(--text);

            overflow-x: hidden;
        }


        a {
            text-decoration: none;
        }


        

        .navbar-main {

            position: absolute;

            top: 0;
            left: 0;
            right: 0;

            z-index: 1000;

            padding: 18px 5%;

            background: transparent;
        }


        .navbar-inner {

            max-width: 1400px;

            margin: auto;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }

        html.urdu-mode .navbar-inner {
            flex-direction: row-reverse;
        }


        

        .brand {

            display: flex;

            align-items: center;

            gap: 11px;

            color: white;

            font-size: 21px;

            font-weight: 700;

            letter-spacing: 0.2px;
        }


        .brand:hover {

            color: white;
        }


        .brand img {

            width: 44px;

            height: 44px;

            object-fit: cover;

            border-radius: 11px;

            border: 2px solid rgba(255,255,255,0.25);
        }


        

        .nav-right {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .nav-link-custom {

            color: #E4EEE9;

            font-size: 14px;

            padding: 10px 15px;

            transition: 0.25s;
        }


        .nav-link-custom:hover {

            color: white;
        }


        .nav-login {

            color: white;

            border: 1px solid rgba(255,255,255,0.30);

            background: rgba(255,255,255,0.08);

            padding: 10px 19px;

            border-radius: 9px;

            font-size: 13px;

            font-weight: 600;

            transition: 0.25s;

            backdrop-filter: blur(8px);
        }


        .nav-login:hover {

            background: rgba(255,255,255,0.16);

            color: white;
        }


        .nav-register {

            color: var(--forest-dark);

            background: #F3ECDF;

            padding: 10px 19px;

            border-radius: 9px;

            font-size: 13px;

            font-weight: 650;

            transition: 0.25s;
        }


        .nav-register:hover {

            background: white;

            color: var(--forest-dark);

            transform: translateY(-1px);
        }


        .home-language-switcher { position: relative; }
        .home-language-btn {
            border: 1px solid rgba(255,255,255,0.30);
            background: rgba(255,255,255,0.08);
            color: white; padding: 10px 16px; border-radius: 9px;
            font-size: 13px; font-weight: 600; display: flex; align-items: center;
            gap: 8px; cursor: pointer; backdrop-filter: blur(8px);
        }
        .home-language-btn:hover { background: rgba(255,255,255,0.16); }
        .home-language-menu {
            display: none; position: absolute; top: calc(100% + 8px); right: 0;
            min-width: 130px; background: white; border-radius: 9px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.18); overflow: hidden; z-index: 1100;
        }
        .home-language-menu.show { display: block; }
        .home-language-menu a { display: block; padding: 10px 14px; color: var(--forest-dark); font-size: 13px; }
        .home-language-menu a:hover { background: var(--sage-light); }


        

        .hero {

            min-height: 100vh;

            height: 100vh;

            position: relative;

            display: flex;

            align-items: center;

            overflow: hidden;

            background:

                linear-gradient(
                    90deg,
                    rgba(9,35,29,0.96) 0%,
                    rgba(15,54,43,0.88) 38%,
                    rgba(20,62,49,0.54) 68%,
                    rgba(20,62,49,0.18) 100%
                ),

                url("<?php echo e(asset('images/agriculture.jpg')); ?>")

                center center / cover no-repeat;
        }


        

        .hero::before {

            content: "";

            position: absolute;

            inset: 0;

            background:

                radial-gradient(
                    circle at 80% 30%,
                    rgba(255,255,255,0.08),
                    transparent 30%
                );

            pointer-events: none;
        }


        

        .hero::after {

            content: "";

            position: absolute;

            width: 500px;

            height: 500px;

            border-radius: 50%;

            right: -200px;

            bottom: -250px;

            border: 1px solid rgba(255,255,255,0.10);

            background: rgba(255,255,255,0.025);
        }


        

        .hero-container {

            width: 100%;

            max-width: 1400px;

            margin: auto;

            padding: 90px 5% 45px;

            position: relative;

            z-index: 5;
        }


        .hero-content {

            max-width: 700px;
        }


        

        .hero-badge {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 8px 14px;

            margin-bottom: 18px;

            border-radius: 30px;

            color: #E8F0EB;

            background: rgba(255,255,255,0.09);

            border: 1px solid rgba(255,255,255,0.16);

            backdrop-filter: blur(10px);

            font-size: 12px;

            font-weight: 500;
        }


        .hero-badge i {

            color: #D6B16E;
        }


        

        .hero h1 {

            margin: 0;

            color: white;

            font-size: clamp(42px, 5vw, 68px);

            line-height: 1.03;

            letter-spacing: -2px;

            font-weight: 750;
        }


        .hero h1 span {

            color: #D6E5DB;
        }


        

        .hero-description {

            max-width: 610px;

            margin-top: 20px;

            margin-bottom: 25px;

            color: #D6E4DE;

            font-size: 15px;

            line-height: 1.7;
        }


        

        .hero-buttons {

            display: flex;

            align-items: center;

            gap: 13px;

            flex-wrap: wrap;
        }


        .btn-register {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 9px;

            padding: 13px 22px;

            background: #F3ECDF;

            color: var(--forest-dark);

            border-radius: 10px;

            font-size: 14px;

            font-weight: 650;

            transition: 0.25s;
        }


        .btn-register:hover {

            background: white;

            color: var(--forest-dark);

            transform: translateY(-3px);

            box-shadow:
                0 10px 25px rgba(0,0,0,0.18);
        }


        .btn-login {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 9px;

            padding: 12px 21px;

            color: white;

            background: rgba(255,255,255,0.07);

            border: 1px solid rgba(255,255,255,0.24);

            border-radius: 10px;

            font-size: 14px;

            font-weight: 550;

            backdrop-filter: blur(8px);

            transition: 0.25s;
        }


        .btn-login:hover {

            background: rgba(255,255,255,0.15);

            color: white;

            transform: translateY(-3px);
        }


        

        .hero-note {

            display: flex;

            align-items: center;

            gap: 9px;

            margin-top: 22px;

            color: #AFC3BA;

            font-size: 12px;
        }


        .hero-note i {

            color: #A9C6B5;

            font-size: 15px;
        }


        

        .about {

            padding: 90px 5%;

            background: var(--cream);
        }


        .about-container {

            max-width: 1100px;

            margin: auto;

            text-align: center;
        }


        .about-label {

            color: var(--primary);

            font-size: 11px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.8px;

            margin-bottom: 12px;
        }


        .about h2 {

            margin: 0 auto 18px;

            max-width: 750px;

            color: var(--forest-dark);

            font-size: clamp(30px, 4vw, 44px);

            line-height: 1.15;

            font-weight: 700;
        }


        .about p {

            max-width: 750px;

            margin: auto;

            color: var(--muted);

            font-size: 15px;

            line-height: 1.85;
        }


        

        .cta-section {

            padding: 25px 5% 90px;

            background: var(--cream);
        }


        .cta-box {

            max-width: 1200px;

            min-height: 300px;

            margin: auto;

            padding: 55px;

            border-radius: 22px;

            position: relative;

            overflow: hidden;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            background:

                linear-gradient(
                    120deg,
                    #183A35,
                    #285D4D
                );

            box-shadow:
                0 18px 45px rgba(18,46,42,0.12);
        }


        .cta-box::before {

            content: "";

            position: absolute;

            width: 300px;

            height: 300px;

            border-radius: 50%;

            left: -130px;

            top: -140px;

            border: 1px solid rgba(255,255,255,0.10);

            background: rgba(255,255,255,0.025);
        }


        .cta-box::after {

            content: "";

            position: absolute;

            width: 250px;

            height: 250px;

            border-radius: 50%;

            right: -100px;

            bottom: -150px;

            background: rgba(185,149,90,0.10);
        }


        .cta-content {

            position: relative;

            z-index: 2;
        }


        .cta-content h2 {

            color: white;

            font-size: clamp(28px, 4vw, 40px);

            margin-bottom: 12px;

            font-weight: 700;
        }


        .cta-content p {

            max-width: 600px;

            margin: 0 auto 25px;

            color: #C8D9D1;

            font-size: 14px;

            line-height: 1.7;
        }


        

        footer {

            background: var(--forest-dark);

            padding: 35px 5% 22px;

            color: white;
        }


        .footer-container {

            max-width: 1200px;

            margin: auto;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;
        }


        .footer-brand {

            display: flex;

            align-items: center;

            gap: 10px;

            color: white;

            font-size: 17px;

            font-weight: 650;
        }


        .footer-brand img {

            width: 34px;

            height: 34px;

            object-fit: cover;

            border-radius: 8px;
        }


        .footer-text {

            margin: 6px 0 0;

            color: #829A91;

            font-size: 11px;
        }


        .footer-copy {

            color: #718A80;

            font-size: 11px;

            text-align: right;
        }


        

        .fade-up {

            animation:
                fadeUp 0.9s ease forwards;
        }


        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(25px);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0);
            }
        }


        

        @media (max-width: 992px) {

            .navbar-main {

                padding: 16px 25px;
            }


            .hero-container {

                padding-left: 6%;

                padding-right: 6%;
            }


            .hero-content {

                max-width: 650px;
            }


            .hero h1 {

                font-size: 56px;
            }

        }


        

        @media (max-width: 768px) {

            .navbar-main {

                padding: 16px 20px;
            }


            .nav-link-custom {

                display: none;
            }


            .brand {

                font-size: 18px;
            }


            .brand img {

                width: 39px;

                height: 39px;
            }


            .hero {

                min-height: 100svh;

                height: auto;

                background-position: 62% center;
            }


            .hero-container {

                padding: 115px 25px 45px;
            }


            .hero-content {

                max-width: 620px;
            }


            .hero h1 {

                font-size: 48px;

                letter-spacing: -1.5px;
            }


            .hero-description {

                font-size: 14px;

                line-height: 1.7;

                max-width: 560px;
            }


            .hero-note {

                margin-top: 20px;
            }


            .about {

                padding: 70px 25px;
            }


            .cta-section {

                padding: 15px 20px 70px;
            }


            .cta-box {

                padding: 45px 25px;
            }


            .footer-container {

                flex-direction: column;

                text-align: center;
            }


            .footer-copy {

                text-align: center;
            }

        }


        

        @media (max-width: 480px) {

            .navbar-main {

                padding: 14px 15px;
            }


            .brand span {

                display: none;
            }


            .nav-right {

                gap: 7px;
            }


            .nav-login,
            .nav-register {

                padding: 8px 11px;

                font-size: 11px;
            }


            .hero {

                min-height: 100svh;

                height: auto;

                background-position: 62% center;
            }


            .hero-container {

                padding: 105px 20px 40px;
            }


            .hero-content {

                max-width: 100%;
            }


            .hero-badge {

                font-size: 10px;

                padding: 7px 12px;

                margin-bottom: 17px;
            }


            .hero h1 {

                font-size: 40px;

                line-height: 1.08;

                letter-spacing: -1px;
            }


            .hero-description {

                font-size: 13px;

                line-height: 1.65;

                margin-top: 17px;

                margin-bottom: 22px;
            }


            .hero-buttons {

                flex-direction: column;

                align-items: stretch;

                gap: 10px;
            }


            .btn-register,
            .btn-login {

                width: 100%;

                padding: 12px 18px;
            }


            .hero-note {

                align-items: flex-start;

                font-size: 11px;

                line-height: 1.5;
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
</style>
</head>


<body>




<nav class="navbar-main">

    <div class="navbar-inner">


        

        <a
            href="<?php echo e(route('home')); ?>"
            class="brand"
        >

            <img
                src="<?php echo e(asset('images/logo1.jpg')); ?>"
                alt="GrowSmart"
            >

            <span>
                GrowSmart
            </span>

        </a>


        

        <div class="nav-right">

            <div class="home-language-switcher">
                <button type="button" class="home-language-btn" onclick="toggleHomeLanguageMenu()">
                    <i class="bi bi-translate"></i>
                    <?php echo e(t('Language', 'زبان')); ?>

                    <i class="bi bi-chevron-down"></i>
                </button>

                <div class="home-language-menu" id="homeLanguageMenu">
                    <a href="<?php echo e(route('language.change', 'en')); ?>">English</a>
                    <a href="<?php echo e(route('language.change', 'ur')); ?>">اردو</a>
                </div>
            </div>

        </div>

    </div>

</nav>





<section class="hero">

    <div class="hero-container">

        <div class="hero-content fade-up">


            

            <div class="hero-badge">

                <i class="bi bi-stars"></i>

                <?php echo e(t('Welcome to GrowSmart', 'گرو اسمارٹ میں خوش آمدید')); ?>


            </div>


            

            <h1>

                <?php echo e(t('Grow Smarter.', 'زیادہ سمجھداری سے اگائیں۔')); ?><br>

                <span><?php echo e(t('Farm Better.', 'بہتر کاشت کاری کریں۔')); ?></span>

            </h1>


            

            <p class="hero-description">

                <?php echo e(t('GrowSmart is your intelligent agriculture platform designed to make farming knowledge simpler, smarter and more accessible. Create your account and discover a better way to manage your agricultural journey.', 'گرو اسمارٹ ایک ذہین زرعی پلیٹ فارم ہے جو زرعی معلومات کو آسان، مؤثر اور ہر شخص کے لیے زیادہ قابلِ رسائی بنانے کے لیے تیار کیا گیا ہے۔ اپنا اکاؤنٹ بنائیں اور اپنے زرعی سفر کو بہتر انداز میں منظم کرنے کا طریقہ دریافت کریں۔')); ?>


            </p>


            

            <div class="hero-buttons">


                <?php if(auth()->guard()->check()): ?>
                    <a
                        href="<?php echo e(route('home')); ?>"
                        class="btn-register"
                    >
                        <?php echo e(t('Go to My Dashboard', 'اپنے ڈیش بورڈ پر جائیں')); ?>

                        <i class="bi bi-arrow-right"></i>
                    </a>
                <?php else: ?>
                    <a
                        href="<?php echo e(route('register')); ?>"
                        class="btn-register"
                    >
                        <?php echo e(t('Create Your Account', 'اپنا اکاؤنٹ بنائیں')); ?>

                        <i class="bi bi-arrow-right"></i>
                    </a>

                    <a
                        href="<?php echo e(route('login')); ?>"
                        class="btn-login"
                    >
                        <i class="bi bi-box-arrow-in-right"></i>
                        <?php echo e(t('Login', 'داخل ہوں')); ?>

                    </a>
                <?php endif; ?>

            </div>


            

            <div class="hero-note">

                <i class="bi bi-shield-check"></i>

                <?php echo e(t('Join GrowSmart and start your smart agriculture journey.', 'گرو اسمارٹ میں شامل ہوں اور اپنے ذہین زرعی سفر کا آغاز کریں۔')); ?>


            </div>


        </div>

    </div>

</section>

<script>
function toggleHomeLanguageMenu() {
    const menu = document.getElementById('homeLanguageMenu');
    if (menu) menu.classList.toggle('show');
}
document.addEventListener('click', function (event) {
    const switcher = document.querySelector('.home-language-switcher');
    const menu = document.getElementById('homeLanguageMenu');
    if (menu && switcher && !switcher.contains(event.target)) menu.classList.remove('show');
});
</script>

</body>

</html>
<?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/home.blade.php ENDPATH**/ ?>