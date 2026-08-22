@extends('layouts.app')

@section('title', 'Account Settings | GrowSmart')

@section('content')

<div class="container settings-container">

    <div class="settings-wrapper">

        {{-- =========================================================
             PAGE TITLE
        ========================================================== --}}

        <div class="settings-title">

            <div class="settings-title-icon">
                <i class="bi bi-gear-fill"></i>
            </div>

            <div>
                <h2>Account Settings</h2>

                <p>
                    Manage your email, password and account security.
                </p>
            </div>

        </div>


        {{-- =========================================================
             SUCCESS MESSAGES
        ========================================================== --}}

        @if(session('email_success'))

            <div class="settings-alert success">

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    {{ session('email_success') }}
                </span>

            </div>

        @endif


        @if(session('password_success'))

            <div class="settings-alert success">

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    {{ session('password_success') }}
                </span>

            </div>

        @endif


        @if(session('success'))

            <div class="settings-alert success">

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        {{-- =========================================================
             ERROR MESSAGES
        ========================================================== --}}

        @if(session('error'))

            <div class="settings-alert error">

                <i class="bi bi-exclamation-circle-fill"></i>

                <span>
                    {{ session('error') }}
                </span>

            </div>

        @endif


        @if($errors->any())

            <div class="settings-alert error">

                <i class="bi bi-exclamation-circle-fill"></i>

                <div>

                    @foreach($errors->all() as $error)

                        <div>
                            {{ $error }}
                        </div>

                    @endforeach

                </div>

            </div>

        @endif


        {{-- =========================================================
             CHANGE EMAIL CARD
        ========================================================== --}}

        <div class="settings-card">

            <div class="card-heading">

                <div class="card-icon">

                    <i class="bi bi-envelope-fill"></i>

                </div>

                <div>

                    <h4>
                        Change Email
                    </h4>

                    <p>
                        Update your email and verify the new address.
                    </p>

                </div>

            </div>


            {{-- =====================================================
                 STEP 1:
                 ENTER NEW EMAIL
            ====================================================== --}}

            @if(!session('email_verification_pending'))

                <form
                    action="{{ route('account.email.update') }}"
                    method="POST"
                    id="changeEmailForm"
                >

                    @csrf


                    {{-- CURRENT EMAIL --}}

                    <div class="form-group">

                        <label>
                            Current Email
                        </label>

                        <div class="input-wrap">

                            <i class="bi bi-envelope"></i>

                            <input
                                type="email"
                                value="{{ Auth::user()->email }}"
                                disabled
                            >

                        </div>

                    </div>


                    {{-- NEW EMAIL --}}

                    <div class="form-group">

                        <label>
                            New Email
                        </label>

                        <div class="input-wrap">

                            <i class="bi bi-envelope-plus"></i>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Enter new email address"
                                autocomplete="email"
                                required
                            >

                        </div>

                    </div>


                    {{-- CURRENT PASSWORD --}}

                    <div class="form-group">

                        <label>
                            Current Password
                        </label>

                        <div class="input-wrap">

                            <i class="bi bi-lock"></i>

                            <input
                                type="password"
                                name="current_password"
                                id="emailPassword"
                                placeholder="Enter current password"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                onclick="togglePassword('emailPassword', this)"
                                aria-label="Show password"
                            >

                                <i class="bi bi-eye"></i>

                            </button>

                        </div>

                    </div>


                    {{-- VERIFICATION NOTE --}}

                    <div class="verification-note">

                        <i class="bi bi-shield-check"></i>

                        <span>

                            A 6-digit verification code will be sent
                            to your new email address.

                        </span>

                    </div>


                    {{-- SUBMIT --}}

                    <button
                        type="submit"
                        class="settings-button"
                        id="sendEmailCodeBtn"
                    >

                        <i class="bi bi-send"></i>

                        <span>
                            Send Verification Code
                        </span>

                    </button>

                </form>


            {{-- =====================================================
                 STEP 2:
                 ENTER OTP
            ====================================================== --}}

            @else

                <div class="otp-verification-box">

                    <div class="otp-icon">

                        <i class="bi bi-envelope-check-fill"></i>

                    </div>


                    <h4 class="otp-title">
                        Verify New Email
                    </h4>


                    <p class="otp-description">

                        We sent a 6-digit verification code to:

                    </p>


                    {{-- NEW EMAIL DISPLAY --}}

                    <div class="pending-email">

                        <i class="bi bi-envelope-fill"></i>

                        <strong>
                            {{ session('pending_email') }}
                        </strong>

                    </div>


                    <p class="otp-description second">

                        Enter the code below to confirm your new
                        email address.

                    </p>


                    {{-- =================================================
                         OTP FORM
                    ================================================== --}}

                    <form
                        action="{{ route('account.email.verify') }}"
                        method="POST"
                        id="emailOtpForm"
                    >

                        @csrf


                        <div class="otp-input-wrapper">

                            <input
                                type="text"
                                name="otp"
                                id="emailOtp"
                                class="otp-input"
                                placeholder="Enter 6-digit code"
                                maxlength="6"
                                minlength="6"
                                inputmode="numeric"
                                pattern="[0-9]{6}"
                                autocomplete="one-time-code"
                                autocorrect="off"
                                autocapitalize="off"
                                spellcheck="false"
                                required
                            >

                        </div>


                        {{-- VERIFY BUTTON --}}

                        <button
                            type="submit"
                            class="settings-button otp-button"
                            id="verifyEmailBtn"
                        >

                            <i class="bi bi-shield-check"></i>

                            <span>
                                Verify Email
                            </span>

                        </button>

                    </form>


                    {{-- CANCEL VERIFICATION --}}

                    <form
                        action="{{ route('account.email.cancel') }}"
                        method="POST"
                        class="cancel-form"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="cancel-button"
                        >

                            <i class="bi bi-arrow-left"></i>

                            Cancel

                        </button>

                    </form>

                </div>

            @endif

        </div>


        {{-- =========================================================
             CHANGE PASSWORD CARD
        ========================================================== --}}

        <div class="settings-card">

            <div class="card-heading">

                <div class="card-icon">

                    <i class="bi bi-shield-lock-fill"></i>

                </div>

                <div>

                    <h4>
                        Change Password
                    </h4>

                    <p>
                        Create a strong password to protect your account.
                    </p>

                </div>

            </div>


            <form
                action="{{ route('account.password.update') }}"
                method="POST"
            >

                @csrf


                {{-- CURRENT PASSWORD --}}

                <div class="form-group">

                    <label>
                        Current Password
                    </label>

                    <div class="input-wrap">

                        <i class="bi bi-lock"></i>

                        <input
                            type="password"
                            name="current_password"
                            id="currentPassword"
                            placeholder="Enter current password"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('currentPassword', this)"
                            aria-label="Show password"
                        >

                            <i class="bi bi-eye"></i>

                        </button>

                    </div>

                </div>


                {{-- NEW PASSWORD --}}

                <div class="form-group">

                    <label>
                        New Password
                    </label>

                    <div class="input-wrap">

                        <i class="bi bi-key"></i>

                        <input
                            type="password"
                            name="password"
                            id="newPassword"
                            placeholder="Enter new password"
                            autocomplete="new-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('newPassword', this)"
                            aria-label="Show password"
                        >

                            <i class="bi bi-eye"></i>

                        </button>

                    </div>

                </div>


                {{-- CONFIRM PASSWORD --}}

                <div class="form-group">

                    <label>
                        Confirm New Password
                    </label>

                    <div class="input-wrap">

                        <i class="bi bi-check2-square"></i>

                        <input
                            type="password"
                            name="password_confirmation"
                            id="confirmPassword"
                            placeholder="Confirm new password"
                            autocomplete="new-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('confirmPassword', this)"
                            aria-label="Show password"
                        >

                            <i class="bi bi-eye"></i>

                        </button>

                    </div>

                </div>


                {{-- CHANGE PASSWORD BUTTON --}}

                <button
                    type="submit"
                    class="settings-button"
                >

                    <i class="bi bi-shield-check"></i>

                    Change Password

                </button>

            </form>

        </div>


        {{-- =========================================================
             SECURITY INFORMATION
        ========================================================== --}}

        <div class="security-card">

            <div class="security-icon">

                <i class="bi bi-info-circle-fill"></i>

            </div>

            <div>

                <h5>
                    Email Verification
                </h5>

                <p>

                    When you change your email address, GrowSmart
                    will send a verification code to the new email.
                    Your email will only be changed after the correct
                    6-digit code is entered.

                </p>

            </div>

        </div>

    </div>

</div>

@endsection


{{-- =============================================================
     STYLES
============================================================= --}}

@push('styles')

<style>

.settings-container{
    max-width:900px;
    padding-top:4px;
    padding-bottom:0;
}

.settings-wrapper{
    max-width:760px;
    margin:0 auto;
}


/* =============================================================
   TITLE
============================================================= */

.settings-title{
    display:flex;
    align-items:center;
    gap:13px;
    margin-bottom:16px;
}

.settings-title-icon{
    width:52px;
    height:52px;
    flex-shrink:0;
    border-radius:13px;
    background:#e6efe9;
    color:#285c48;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
}

.settings-title h2{
    margin:0;
    color:#173b32;
    font-size:24px;
    font-weight:700;
}

.settings-title p{
    margin:3px 0 0;
    color:#718078;
    font-size:11px;
}


/* =============================================================
   ALERTS
============================================================= */

.settings-alert{
    display:flex;
    align-items:flex-start;
    gap:9px;
    padding:10px 13px;
    border-radius:8px;
    margin-bottom:12px;
    font-size:11px;
    line-height:1.5;
}

.settings-alert.success{
    background:#edf8f0;
    border:1px solid #cce6d3;
    color:#27723d;
}

.settings-alert.error{
    background:#fff2f1;
    border:1px solid #f2ceca;
    color:#a52820;
}

.settings-alert i{
    margin-top:2px;
}


/* =============================================================
   CARDS
============================================================= */

.settings-card{
    background:#fff;
    border:1px solid #e1e9e4;
    border-radius:15px;
    padding:21px;
    margin-bottom:13px;
    box-shadow:0 6px 20px rgba(23,59,50,.06);
}


/* =============================================================
   CARD HEADING
============================================================= */

.card-heading{
    display:flex;
    align-items:center;
    gap:11px;
    padding-bottom:13px;
    margin-bottom:15px;
    border-bottom:1px solid #e8eeea;
}

.card-icon{
    width:42px;
    height:42px;
    flex-shrink:0;
    border-radius:10px;
    background:#e6efe9;
    color:#285c48;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:18px;
}

.card-heading h4{
    margin:0;
    color:#173b32;
    font-size:16px;
    font-weight:700;
}

.card-heading p{
    margin:3px 0 0;
    color:#7a8781;
    font-size:10px;
}


/* =============================================================
   FORM
============================================================= */

.form-group{
    margin-bottom:12px;
}

.form-group label{
    display:block;
    margin-bottom:5px;
    color:#30453b;
    font-size:11px;
    font-weight:600;
}


/* =============================================================
   INPUT
============================================================= */

.input-wrap{
    position:relative;
}

.input-wrap>i:first-child{
    position:absolute;
    left:13px;
    top:50%;
    transform:translateY(-50%);
    color:#718078;
    font-size:14px;
    pointer-events:none;
    z-index:2;
}

.input-wrap input{
    width:100%;
    height:41px;
    padding:0 42px 0 38px;
    border:1px solid #dbe4de;
    border-radius:8px;
    background:#fafcfb;
    color:#263d32;
    font-size:12px;
    outline:none;
    transition:.2s;
    appearance:none;
    -webkit-appearance:none;
}

.input-wrap input::-ms-reveal,
.input-wrap input::-ms-clear{
    display:none;
}

.input-wrap input::-webkit-credentials-auto-fill-button,
.input-wrap input::-webkit-textfield-decoration-container{
    display:none !important;
}

.input-wrap input:focus{
    background:#fff;
    border-color:#6f927f;
    box-shadow:0 0 0 3px rgba(40,92,72,.08);
}

.input-wrap input:disabled{
    background:#f1f4f2;
    color:#7b8781;
    cursor:not-allowed;
}


/* =============================================================
   PASSWORD TOGGLE
============================================================= */

.password-toggle{
    position:absolute;
    right:8px;
    top:50%;
    transform:translateY(-50%);
    width:30px;
    height:30px;
    display:flex;
    align-items:center;
    justify-content:center;
    border:0;
    background:transparent;
    color:#718078;
    cursor:pointer;
    border-radius:6px;
    z-index:3;
}

.password-toggle:hover{
    background:#e8efeb;
    color:#285c48;
}

.password-toggle i{
    font-size:14px;
}


/* =============================================================
   VERIFICATION NOTE
============================================================= */

.verification-note{
    display:flex;
    align-items:center;
    gap:8px;
    padding:9px 11px;
    margin:2px 0 13px;
    background:#f8f5ef;
    border:1px solid #eee3d2;
    border-radius:8px;
    color:#716654;
    font-size:10px;
    line-height:1.5;
}

.verification-note i{
    color:#a1783f;
    font-size:14px;
    flex-shrink:0;
}


/* =============================================================
   BUTTON
============================================================= */

.settings-button{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:7px;
    min-height:39px;
    padding:9px 17px;
    border:0;
    border-radius:8px;
    background:#285c48;
    color:#fff;
    font-size:11px;
    font-weight:600;
    cursor:pointer;
    transition:.2s;
}

.settings-button:hover{
    background:#173b32;
    transform:translateY(-1px);
}

.settings-button:disabled{
    opacity:.7;
    cursor:not-allowed;
    transform:none;
}


/* =============================================================
   OTP VERIFICATION BOX
============================================================= */

.otp-verification-box{
    text-align:center;
    padding:5px 10px 4px;
}

.otp-icon{
    width:58px;
    height:58px;
    margin:0 auto 12px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:
        linear-gradient(
            135deg,
            #e8f4ec,
            #dcefe2
        );

    color:#285c48;

    font-size:24px;

    box-shadow:
        0 7px 18px rgba(40,92,72,.10);
}

.otp-title{
    margin:0 0 6px;

    color:#173b32;

    font-size:18px;

    font-weight:700;
}

.otp-description{
    margin:0;

    color:#718078;

    font-size:11px;

    line-height:1.6;
}

.otp-description.second{
    margin-top:10px;
    margin-bottom:14px;
}


/* =============================================================
   PENDING EMAIL
============================================================= */

.pending-email{
    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:7px;

    max-width:100%;

    margin-top:8px;

    padding:8px 13px;

    background:#f0f6f2;

    border:1px solid #d7e6dc;

    border-radius:8px;

    color:#285c48;

    font-size:11px;

    word-break:break-all;
}

.pending-email i{
    flex-shrink:0;
}


/* =============================================================
   OTP INPUT
============================================================= */

.otp-input-wrapper{
    width:100%;
    margin-bottom:12px;
}

.otp-input{
    width:100%;

    height:50px;

    border:1px solid #dbe4de;

    border-radius:9px;

    background:#fafcfb;

    color:#173b32;

    outline:none;

    text-align:center;

    font-size:22px;

    font-weight:700;

    letter-spacing:9px;

    padding:0 15px;

    transition:.2s;
}

.otp-input::placeholder{
    color:#a3ada8;

    font-size:11px;

    font-weight:400;

    letter-spacing:1px;
}

.otp-input:focus{
    background:#fff;

    border-color:#285c48;

    box-shadow:
        0 0 0 3px rgba(40,92,72,.09);
}


/* =============================================================
   OTP BUTTON
============================================================= */

.otp-button{
    width:100%;
    min-height:43px;
}


/* =============================================================
   CANCEL
============================================================= */

.cancel-form{
    margin-top:9px;
}

.cancel-button{
    border:0;

    background:transparent;

    color:#718078;

    font-size:10px;

    cursor:pointer;

    padding:5px 8px;

    transition:.2s;
}

.cancel-button:hover{
    color:#285c48;
}


/* =============================================================
   SECURITY CARD
============================================================= */

.security-card{
    display:flex;
    align-items:flex-start;
    gap:11px;
    padding:13px 15px;
    margin-bottom:12px;
    background:#f0f5f1;
    border:1px solid #dce8e0;
    border-radius:11px;
}

.security-icon{
    width:34px;
    height:34px;
    flex-shrink:0;
    border-radius:8px;
    background:#e0ebe4;
    color:#285c48;
    display:flex;
    align-items:center;
    justify-content:center;
}

.security-card h5{
    margin:0 0 3px;
    color:#173b32;
    font-size:12px;
    font-weight:700;
}

.security-card p{
    margin:0;
    color:#718078;
    font-size:10px;
    line-height:1.6;
}


/* =============================================================
   MOBILE
============================================================= */

@media(max-width:600px){

    .settings-container{
        padding:2px 8px 0;
    }

    .settings-title{
        margin-bottom:12px;
    }

    .settings-title h2{
        font-size:20px;
    }

    .settings-title p{
        font-size:10px;
    }

    .settings-title-icon{
        width:46px;
        height:46px;
        font-size:21px;
    }

    .settings-card{
        padding:16px 14px;
    }

    .settings-button{
        width:100%;
    }

    .security-card{
        padding:11px;
    }

    .otp-verification-box{
        padding:3px 0;
    }

    .otp-input{
        height:48px;

        font-size:20px;

        letter-spacing:7px;
    }

    .pending-email{
        max-width:100%;
    }

}

</style>

@endpush


{{-- =============================================================
     JAVASCRIPT
============================================================= --}}

@push('scripts')

<script>

/*
|--------------------------------------------------------------------------
| Password Show / Hide
|--------------------------------------------------------------------------
*/

function togglePassword(id, button){

    const input = document.getElementById(id);

    const icon = button.querySelector('i');


    if(input.type === 'password'){

        input.type = 'text';

        icon.classList.replace(
            'bi-eye',
            'bi-eye-slash'
        );

        button.setAttribute(
            'aria-label',
            'Hide password'
        );

    }else{

        input.type = 'password';

        icon.classList.replace(
            'bi-eye-slash',
            'bi-eye'
        );

        button.setAttribute(
            'aria-label',
            'Show password'
        );

    }

}


/*
|--------------------------------------------------------------------------
| Change Email Form
|--------------------------------------------------------------------------
*/

const changeEmailForm =
    document.getElementById('changeEmailForm');

const sendEmailCodeBtn =
    document.getElementById('sendEmailCodeBtn');


if(changeEmailForm && sendEmailCodeBtn){

    changeEmailForm.addEventListener(
        'submit',
        function(){

            sendEmailCodeBtn.disabled = true;

            sendEmailCodeBtn.querySelector('span')
                .textContent = 'Sending...';

            sendEmailCodeBtn.querySelector('i')
                .className = 'bi bi-hourglass-split';

        }
    );

}


/*
|--------------------------------------------------------------------------
| OTP Input
|--------------------------------------------------------------------------
*/

const emailOtp =
    document.getElementById('emailOtp');


if(emailOtp){

    /*
    |--------------------------------------------------------------------------
    | Only allow numbers
    |--------------------------------------------------------------------------
    */

    emailOtp.addEventListener(
        'input',
        function(){

            this.value =
                this.value.replace(
                    /[^0-9]/g,
                    ''
                );


            if(this.value.length > 6){

                this.value =
                    this.value.substring(
                        0,
                        6
                    );

            }

        }
    );


    /*
    |--------------------------------------------------------------------------
    | Handle Paste
    |--------------------------------------------------------------------------
    */

    emailOtp.addEventListener(
        'paste',
        function(event){

            event.preventDefault();


            const pastedText =
                (
                    event.clipboardData ||
                    window.clipboardData
                ).getData('text');


            const numbersOnly =
                pastedText.replace(
                    /[^0-9]/g,
                    ''
                );


            this.value =
                numbersOnly.substring(
                    0,
                    6
                );


            this.focus();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | Prevent spaces
    |--------------------------------------------------------------------------
    */

    emailOtp.addEventListener(
        'keydown',
        function(event){

            if(event.key === ' '){

                event.preventDefault();

            }

        }
    );

}


/*
|--------------------------------------------------------------------------
| OTP Form
|--------------------------------------------------------------------------
*/

const emailOtpForm =
    document.getElementById('emailOtpForm');

const verifyEmailBtn =
    document.getElementById('verifyEmailBtn');


if(emailOtpForm && emailOtp){

    emailOtpForm.addEventListener(
        'submit',
        function(event){

            const otp =
                emailOtp.value.trim();


            /*
            | OTP must be exactly 6 digits
            */

            if(!/^[0-9]{6}$/.test(otp)){

                event.preventDefault();

                emailOtp.focus();

                alert(
                    'Please enter the complete 6-digit verification code.'
                );

                return;

            }


            /*
            | Prevent multiple submissions
            */

            if(verifyEmailBtn){

                verifyEmailBtn.disabled = true;


                verifyEmailBtn.querySelector('span')
                    .textContent = 'Verifying...';


                verifyEmailBtn.querySelector('i')
                    .className =
                    'bi bi-arrow-repeat spin-icon';

            }

        }
    );

}

</script>


<style>

/*
|--------------------------------------------------------------------------
| OTP Loading Animation
|--------------------------------------------------------------------------
*/

.spin-icon{
    animation:spin 1s linear infinite;
}

@keyframes spin{

    from{
        transform:rotate(0deg);
    }

    to{
        transform:rotate(360deg);
    }

}

</style>

@endpush