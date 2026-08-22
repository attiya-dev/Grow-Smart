<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GrowSmart - Create New Password</title>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>

        /* Basic settings */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        /* Page */

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


        /* Main box */

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


        /* Heading */

        .reset-box h2 {
            text-align: center;

            color: #2e7d32;

            margin-bottom: 25px;

            font-size: 26px;
        }


        /* Labels */

        .form-label {
            display: block;

            font-weight: bold;

            margin-top: 15px;

            margin-bottom: 7px;

            color: #333;
        }


        /* Input */

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


        /* Password box */

        .password-input {
            position: relative;

            width: 100%;
        }


        .password-input .form-control {
            padding-right: 50px;
        }


        /* Eye */

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


        /* Remove browser password eye */

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


        /* Password information */

        .password-info {
            margin-top: 15px;

            font-size: 13px;

            color: #666;

            line-height: 1.5;
        }


        /* Error */

        .error-message {
            background: #f8d7da;

            color: #721c24;

            padding: 12px;

            border-radius: 8px;

            margin-bottom: 15px;

            font-size: 14px;
        }


        /* Reset button */

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


        /* Mobile */

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


        /* Small phones */

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

</head>


<body>


<div class="reset-container">


    <div class="reset-box">


        <h2>
            🔐 Create New Password
        </h2>


        <!-- Show errors -->

        @if($errors->any())

            <div class="error-message">

                {{ $errors->first() }}

            </div>

        @endif


        <form
            method="POST"
            action="{{ route('password.update') }}"
        >

            @csrf


            <!-- Reset token -->

            <input
                type="hidden"
                name="token"
                value="{{ $token }}"
            >


            <!-- Email -->

            <label class="form-label">
                Email Address
            </label>


            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email', $email) }}"
                required
            >


            <!-- New password -->

            <label class="form-label">
                New Password
            </label>


            <div class="password-input">

                <input
                    type="password"
                    name="password"
                    id="newPassword"
                    class="form-control"
                    placeholder="Enter new password"
                    required
                    autocomplete="new-password"
                >


                <span
                    class="eye-toggle"
                    id="toggleNewPassword"
                    title="Show password"
                >

                    <i class="fa-solid fa-eye"></i>

                </span>

            </div>


            <!-- Confirm password -->

            <label class="form-label">
                Confirm New Password
            </label>


            <div class="password-input">

                <input
                    type="password"
                    name="password_confirmation"
                    id="confirmPassword"
                    class="form-control"
                    placeholder="Confirm new password"
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


            <!-- Password rule -->

            <div class="password-info">

                Password must be at least 8 characters
                and contain at least one special character.

            </div>


            <!-- Button -->

            <button
                type="submit"
                class="reset-btn"
            >

                🔑 Reset Password

            </button>

        </form>


    </div>


</div>


<script>

    // Show and hide new password

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


    // Show and hide confirm password

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