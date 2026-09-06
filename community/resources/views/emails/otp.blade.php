<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>GrowSmart OTP</title>
</head>

<body style="font-family:Arial;background:#f5f5f5;padding:30px;">

<div style="background:white;padding:30px;border-radius:10px;width:500px;margin:auto;">

<h2>Hello {{ $name }}</h2>

<p>Thank you for registering on GrowSmart.</p>

<p>Your verification code is</p>

<h1 style="color:green">{{ $otp }}</h1>

<p>This OTP will expire in 10 minutes.</p>

<p>If you did not register this account, please ignore this email.</p>

<br>

<p>Regards</p>

<h3>GrowSmart Team</h3>

</div>

</body>

</html>
