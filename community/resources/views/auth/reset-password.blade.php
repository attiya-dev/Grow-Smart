<!DOCTYPE html>
<html lang="{{ current_language() }}" dir="ltr" class="{{ is_urdu() ? 'urdu-mode' : '' }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ t('GrowSmart - Create New Password', 'گرو اسمارٹ - نیا پاس ورڈ بنائیں') }}</title>

    
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>

        

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        

        body {
            background:

                linear-gradient(
                    rgba(9, 43, 34, 0.68),
                    rgba(9, 43, 34, 0.68)
                ),

                url("{{ asset('images/agriculture.jpg') }}")

                center center / cover no-repeat;

            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 20px;

            overflow-x: hidden;
        }


        

        .reset-container {
            width: 100%;

            display: flex;
            justify-content: center;
            align-items: center;
        }


        .reset-box {
            width: 450px;
            max-width: 100%;

            background: white;

            padding: 35px;

            border-radius: 18px;

            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }


        

        .reset-box h2 {
            text-align: center;

            color: #2e7d32;

            margin-bottom: 25px;

            font-size: 26px;
        }


        

        .form-label {
            display: block;

            font-weight: bold;

            margin-top: 15px;

            margin-bottom: 7px;

            color: #333;
        }


        

        .form-control {
            width: 100%;

            padding: 12px;

            border: 1px solid #ccc;

            border-radius: 10px;

            font-size: 15px;

            outline: none;
        }


        .form-control:focus {
            border-color: #2e7d32;
        }


        

        .password-input {
            position: relative;

            width: 100%;
        }


        .password-input .form-control {
            padding-right: 50px;
        }


        

        .eye-toggle {
            position: absolute;

            right: 15px;

            top: 50%;

            transform: translateY(-50%);

            width: 25px;
            height: 25px;

            display: flex;
            justify-content: center;
            align-items: center;

            color: #777;

            cursor: pointer;

            font-size: 17px;
        }


        .eye-toggle:hover {
            color: #2e7d32;
        }


        

        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear {
            display: none;
        }


        input[type="password"]::-webkit-credentials-auto-fill-button,
        input[type="password"]::-webkit-contacts-auto-fill-button {
            display: none !important;

            visibility: hidden;

            pointer-events: none;
        }


        

        .password-info {
            margin-top: 15px;

            font-size: 13px;

            color: #666;

            line-height: 1.5;
        }


        

        .error-message {
            background: #f8d7da;

            color: #721c24;

            padding: 12px;

            border-radius: 8px;

            margin-bottom: 15px;

            font-size: 14px;
        }


        

        .reset-btn {
            width: 100%;

            margin-top: 25px;

            padding: 13px;

            border: none;

            border-radius: 25px;

            background: #2e7d32;

            color: white;

            font-size: 17px;

            cursor: pointer;
        }


        .reset-btn:hover {
            background: #1b5e20;
        }


        

        @media (max-width: 600px) {

            body {
                padding: 15px;

                min-height: 100vh;

                display: flex;

                justify-content: center;

                align-items: center;
            }


            .reset-container {
                width: 100%;
            }


            .reset-box {
                width: 100%;

                max-width: 450px;

                padding: 25px 20px;

                border-radius: 14px;
            }


            .reset-box h2 {
                font-size: 23px;

                margin-bottom: 20px;
            }


            .form-label {
                font-size: 14px;
            }


            .form-control {
                padding: 11px;

                font-size: 14px;
            }


            .password-input .form-control {
                padding-right: 45px;
            }


            .eye-toggle {
                right: 12px;

                font-size: 16px;
            }


            .password-info {
                font-size: 12px;
            }


            .reset-btn {
                padding: 12px;

                font-size: 16px;
            }

        }


        

        @media (max-width: 350px) {

            body {
                padding: 10px;
            }


            .reset-box {
                padding: 20px 15px;
            }


            .reset-box h2 {
                font-size: 21px;
            }


            .form-control {
                font-size: 13px;
            }


            .reset-btn {
                font-size: 15px;
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
html.urdu-mode .eye-toggle { right: auto; left: 15px; }
html.urdu-mode .password-input .form-control { padding-left: 50px; padding-right: 12px; }
</style>
</head>


<body>


<div class="reset-container">


    <div class="reset-box">


        <h2>
            🔐 {{ t('Create New Password', 'نیا پاس ورڈ بنائیں') }}
        </h2>


        

        @if($errors->any())

            <div class="error-message">

                {{ auth_text($errors->first()) }}

            </div>

        @endif


        <form
            method="POST"
            action="{{ route('password.update') }}"
        >

            @csrf


            

            <input
                type="hidden"
                name="token"
                value="{{ $token }}"
            >


            

            <label class="form-label">
                {{ t('Email Address', 'ای میل پتہ') }}
            </label>


            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email', $email) }}"
                required
            >


            

            <label class="form-label">
                {{ t('New Password', 'نیا پاس ورڈ') }}
            </label>


            <div class="password-input">

                <input
                    type="password"
                    name="password"
                    id="newPassword"
                    class="form-control"
                    placeholder="{{ is_urdu() ? 'نیا پاس ورڈ درج کریں' : 'Enter new password' }}"
                    required
                    autocomplete="new-password"
                >


                <span
                    class="eye-toggle"
                    id="toggleNewPassword"
                    title="{{ is_urdu() ? 'پاس ورڈ دکھائیں' : 'Show password' }}"
                >

                    <i class="fa-solid fa-eye"></i>

                </span>

            </div>


            

            <label class="form-label">
                {{ t('Confirm New Password', 'نئے پاس ورڈ کی تصدیق کریں') }}
            </label>


            <div class="password-input">

                <input
                    type="password"
                    name="password_confirmation"
                    id="confirmPassword"
                    class="form-control"
                    placeholder="{{ is_urdu() ? 'نیا پاس ورڈ دوبارہ درج کریں' : 'Confirm new password' }}"
                    required
                    autocomplete="new-password"
                >


                <span
                    class="eye-toggle"
                    id="toggleConfirmPassword"
                    title="Show password"
                >

                    <i class="fa-solid fa-eye"></i>

                </span>

            </div>


            

            <div class="password-info">

                {{ t('Password must be at least 8 characters long and contain at least one special character.', 'پاس ورڈ کم از کم 8 حروف پر مشتمل ہونا چاہیے اور اس میں کم از کم ایک خصوصی علامت شامل ہونی چاہیے۔') }}

            </div>


            

            <button
                type="submit"
                class="reset-btn"
            >

                🔑 {{ t('Reset Password', 'پاس ورڈ دوبارہ ترتیب دیں') }}

            </button>

        </form>


    </div>


</div>


<script>


    let newPassword = document.getElementById("newPassword");

    let newEye = document.getElementById("toggleNewPassword");

    let newIcon = newEye.querySelector("i");


    newEye.addEventListener("click", function () {

        if (newPassword.type === "password") {

            newPassword.type = "text";

            newIcon.classList.remove("fa-eye");

            newIcon.classList.add("fa-eye-slash");

        } else {

            newPassword.type = "password";

            newIcon.classList.remove("fa-eye-slash");

            newIcon.classList.add("fa-eye");

        }

    });



    let confirmPassword = document.getElementById("confirmPassword");

    let confirmEye = document.getElementById("toggleConfirmPassword");

    let confirmIcon = confirmEye.querySelector("i");


    confirmEye.addEventListener("click", function () {

        if (confirmPassword.type === "password") {

            confirmPassword.type = "text";

            confirmIcon.classList.remove("fa-eye");

            confirmIcon.classList.add("fa-eye-slash");

        } else {

            confirmPassword.type = "password";

            confirmIcon.classList.remove("fa-eye-slash");

            confirmIcon.classList.add("fa-eye");

        }

    });

</script>


</body>

</html>
