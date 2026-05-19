<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('messages.login')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* REMOVE height:100vh so page can scroll and show navbar */
        body {
            background: #f3f3f3;
        }

        /* Your register box */
        .contain {
            background: #fff;
            border-radius: 10px;
            width: 850px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            display: flex;
            padding: 40px;
            margin: 60px auto; /* pushes form below navbar */
        }

        .signup-box {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }

        .form-section {
            flex: 1;
            padding-right: 30px;
        }

        .form-section h2 {
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 600;
        }

       .input-box {
    position: relative;
    margin-bottom: 20px;
}

.input-box input {
    width: 100%;
    padding: 10px 40px 10px 40px; /* space for left icon + right eye */
    border: 1px solid #ccc;
    border-radius: 5px;
}

.input-box i.fa-user,
.input-box i.fa-envelope,
.input-box i.fa-lock {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #777;
}

.eye-toggle {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #777;
}

        .btn {
            background: #0655a9;
            color: white;
            border: none;
            margin-left: 60px;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .image-section img {
            width: 300px;
        }
    </style>
</head>

<body>

{{-- Load your navbar from layout --}}
@extends('layouts.app')
@section('content')
<div class="contain">
    <div class="signup-box">

        <div class="form-section">
            <h2>@lang('messages.login')</h2>

            <form method="POST" action="/login">
                @csrf 
                <div class="input-box">
                     <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="@lang('messages.your_email')" required name="email">
                </div>
                 <div class="input-box">
                 <i class="fa fa-lock"></i>
                <input type="password" placeholder="@lang('messages.password')" required name="password" id="password">
               <i class="fa fa-eye eye-toggle" id="togglePassword"></i>
             </div>
               <button type="submit" class="btn" 
        style="background-color: rgb(72, 188, 72); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
          @lang('messages.login_button')</button><br>
                <p class="mt-3">
             @lang('messages.dont_have_account') <a href="/register">@lang('messages.register')</a>
                </p>
            </form>
             <script>
    const togglePassword = document.getElementById("togglePassword");
const password = document.getElementById("password");

togglePassword.addEventListener("click", function () {
    const type = password.type === "password" ? "text" : "password";
    password.type = type;
    this.classList.toggle("fa-eye-slash");
});

const toggleRepeatPassword = document.getElementById("toggleRepeatPassword");
const repeatPassword = document.getElementById("repeatpassword");

toggleRepeatPassword.addEventListener("click", function () {
    const type = repeatPassword.type === "password" ? "text" : "password";
    repeatPassword.type = type;
    this.classList.toggle("fa-eye-slash");
});

</script>
        </div>
        <div class="image-section">
            <img src="{{ asset('images/forum.jpg') }}" alt="Signup Illustration">
        </div>
    </div>
</div>
@endsection
</body>
</html>
