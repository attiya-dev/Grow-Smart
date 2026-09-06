<?php $__env->startSection('title', t('Account Settings | GrowSmart', 'اکاؤنٹ کی ترتیبات | گرو اسمارٹ')); ?>

<?php $__env->startSection('content'); ?>

<div class="container settings-container">

    <div class="settings-wrapper">


        <div class="settings-title">

            <div class="settings-title-icon">
                <i class="bi bi-gear-fill"></i>
            </div>

            <div>
                <h2><?php echo e(t('Account Settings', 'اکاؤنٹ کی ترتیبات')); ?></h2>

                <p>
                    <?php echo e(t('Manage your email, password and account security.', 'اپنے ای میل، پاس ورڈ اور اکاؤنٹ کی حفاظت کا انتظام کریں۔')); ?>

                </p>
            </div>

        </div>



        <?php if(session('email_success')): ?>

            <div class="settings-alert success">

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    <?php echo e(session('email_success')); ?>

                </span>

            </div>

        <?php endif; ?>


        <?php if(session('password_success')): ?>

            <div class="settings-alert success">

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    <?php echo e(session('password_success')); ?>

                </span>

            </div>

        <?php endif; ?>


        <?php if(session('success')): ?>

            <div class="settings-alert success">

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    <?php echo e(session('success')); ?>

                </span>

            </div>

        <?php endif; ?>




        <?php if(session('error')): ?>

            <div class="settings-alert error">

                <i class="bi bi-exclamation-circle-fill"></i>

                <span>
                    <?php echo e(session('error')); ?>

                </span>

            </div>

        <?php endif; ?>


        <?php if($errors->any()): ?>

            <div class="settings-alert error">

                <i class="bi bi-exclamation-circle-fill"></i>

                <div>

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div>
                            <?php echo e($error); ?>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

        <?php endif; ?>



        <div class="settings-card">

            <div class="card-heading">

                <div class="card-icon">

                    <i class="bi bi-envelope-fill"></i>

                </div>

                <div>

                    <h4>
                        <?php echo e(t('Change Email', 'ای میل تبدیل کریں')); ?>

                    </h4>

                    <p>
                        <?php echo e(t('Update your email and verify the new address.', 'اپنا ای میل پتہ تبدیل کریں اور نئے پتے کی تصدیق کریں۔')); ?>

                    </p>

                </div>

            </div>



            <?php if(!session('email_verification_pending')): ?>

                <form
                    action="<?php echo e(route('account.email.update')); ?>"
                    method="POST"
                    id="changeEmailForm"
                >

                    <?php echo csrf_field(); ?>


                    
                    <div class="form-group">

                        <label>
                            <?php echo e(t('Current Email', 'موجودہ ای میل')); ?>

                        </label>

                        <div class="input-wrap">

                            <i class="bi bi-envelope"></i>

                            <input
                                type="email"
                                value="<?php echo e(Auth::user()->email); ?>"
                                disabled
                            >

                        </div>

                    </div>


                    

                    <div class="form-group">

                        <label>
                            <?php echo e(t('New Email', 'نئی ای میل')); ?>

                        </label>

                        <div class="input-wrap">

                            <i class="bi bi-envelope-plus"></i>

                            <input
                                type="email"
                                name="email"
                                value="<?php echo e(old('email')); ?>"
                                placeholder="<?php echo e(t('Enter new email address', 'نیا ای میل پتہ درج کریں')); ?>"
                                autocomplete="email"
                                required
                            >

                        </div>

                    </div>


                

                    <div class="form-group">

                        <label>
                            <?php echo e(t('Current Password', 'موجودہ پاس ورڈ')); ?>

                        </label>

                        <div class="input-wrap">

                            <i class="bi bi-lock"></i>

                            <input
                                type="password"
                                name="current_password"
                                id="emailPassword"
                                placeholder="<?php echo e(t('Enter current password', 'موجودہ پاس ورڈ درج کریں')); ?>"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                onclick="togglePassword('emailPassword', this)"
                                aria-label="<?php echo e(t('Show password', 'پاس ورڈ دکھائیں')); ?>"
                            >

                                <i class="bi bi-eye"></i>

                            </button>

                        </div>

                    </div>


                    

                    <div class="verification-note">

                        <i class="bi bi-shield-check"></i>

                        <span>

                            <?php echo e(t('A 6-digit verification code will be sent to your new email address.', '6 ہندسوں پر مشتمل تصدیقی کوڈ آپ کے نئے ای میل پتے پر بھیجا جائے گا۔')); ?>


                        </span>

                    </div>


                

                    <button
                        type="submit"
                        class="settings-button"
                        id="sendEmailCodeBtn"
                    >

                        <i class="bi bi-send"></i>

                        <span>
                            <?php echo e(t('Send Verification Code', 'تصدیقی کوڈ بھیجیں')); ?>

                        </span>

                    </button>

                </form>


        

            <?php else: ?>

                <div class="otp-verification-box">

                    <div class="otp-icon">

                        <i class="bi bi-envelope-check-fill"></i>

                    </div>


                    <h4 class="otp-title">
                        <?php echo e(t('Verify New Email', 'نئی ای میل کی تصدیق کریں')); ?>

                    </h4>


                    <p class="otp-description">

                        <?php echo e(t('We sent a 6-digit verification code to:', 'ہم نے 6 ہندسوں پر مشتمل تصدیقی کوڈ اس پتے پر بھیجا ہے:')); ?>


                    </p>




                    <div class="pending-email">

                        <i class="bi bi-envelope-fill"></i>

                        <strong>
                            <?php echo e(session('pending_email')); ?>

                        </strong>

                    </div>


                    <p class="otp-description second">

                        <?php echo e(t('Enter the code below to confirm your new email address.', 'اپنے نئے ای میل پتے کی تصدیق کے لیے نیچے دیا گیا کوڈ درج کریں۔')); ?>


                    </p>



                    <form
                        action="<?php echo e(route('account.email.verify')); ?>"
                        method="POST"
                        id="emailOtpForm"
                    >

                        <?php echo csrf_field(); ?>


                        <div class="otp-input-wrapper">

                            <input
                                type="text"
                                name="otp"
                                id="emailOtp"
                                class="otp-input"
                                placeholder="<?php echo e(t('Enter 6-digit code', '6 ہندسوں پر مشتمل کوڈ درج کریں')); ?>"
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




                        <button
                            type="submit"
                            class="settings-button otp-button"
                            id="verifyEmailBtn"
                        >

                            <i class="bi bi-shield-check"></i>

                            <span>
                                <?php echo e(t('Verify Email', 'ای میل کی تصدیق کریں')); ?>

                            </span>

                        </button>

                    </form>



                    <form
                        action="<?php echo e(route('account.email.cancel')); ?>"
                        method="POST"
                        class="cancel-form"
                    >

                        <?php echo csrf_field(); ?>

                        <button
                            type="submit"
                            class="cancel-button"
                        >

                            <i class="bi bi-arrow-left"></i>

                            <?php echo e(t('Cancel', 'منسوخ کریں')); ?>


                        </button>

                    </form>

                </div>

            <?php endif; ?>

        </div>



        <div class="settings-card">

            <div class="card-heading">

                <div class="card-icon">

                    <i class="bi bi-shield-lock-fill"></i>

                </div>

                <div>

                    <h4>
                        <?php echo e(t('Change Password', 'پاس ورڈ تبدیل کریں')); ?>

                    </h4>

                    <p>
                        <?php echo e(t('Create a strong password to protect your account.', 'اپنے اکاؤنٹ کی حفاظت کے لیے مضبوط پاس ورڈ بنائیں۔')); ?>

                    </p>

                </div>

            </div>


            <form
                action="<?php echo e(route('account.password.update')); ?>"
                method="POST"
            >

                <?php echo csrf_field(); ?>



                <div class="form-group">

                    <label>
                        <?php echo e(t('Current Password', 'موجودہ پاس ورڈ')); ?>

                    </label>

                    <div class="input-wrap">

                        <i class="bi bi-lock"></i>

                        <input
                            type="password"
                            name="current_password"
                            id="currentPassword"
                            placeholder="<?php echo e(t('Enter current password', 'موجودہ پاس ورڈ درج کریں')); ?>"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('currentPassword', this)"
                            aria-label="<?php echo e(t('Show password', 'پاس ورڈ دکھائیں')); ?>"
                        >

                            <i class="bi bi-eye"></i>

                        </button>

                    </div>

                </div>



                <div class="form-group">

                    <label>
                        <?php echo e(t('New Password', 'نیا پاس ورڈ')); ?>

                    </label>

                    <div class="input-wrap">

                        <i class="bi bi-key"></i>

                        <input
                            type="password"
                            name="password"
                            id="newPassword"
                            placeholder="<?php echo e(t('Enter new password', 'نیا پاس ورڈ درج کریں')); ?>"
                            autocomplete="new-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('newPassword', this)"
                            aria-label="<?php echo e(t('Show password', 'پاس ورڈ دکھائیں')); ?>"
                        >

                            <i class="bi bi-eye"></i>

                        </button>

                    </div>

                </div>



                <div class="form-group">

                    <label>
                        <?php echo e(t('Confirm New Password', 'نئے پاس ورڈ کی تصدیق کریں')); ?>

                    </label>

                    <div class="input-wrap">

                        <i class="bi bi-check2-square"></i>

                        <input
                            type="password"
                            name="password_confirmation"
                            id="confirmPassword"
                            placeholder="<?php echo e(t('Confirm new password', 'نیا پاس ورڈ دوبارہ درج کریں')); ?>"
                            autocomplete="new-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('confirmPassword', this)"
                            aria-label="<?php echo e(t('Show password', 'پاس ورڈ دکھائیں')); ?>"
                        >

                            <i class="bi bi-eye"></i>

                        </button>

                    </div>

                </div>



                <button
                    type="submit"
                    class="settings-button"
                >

                    <i class="bi bi-shield-check"></i>

                    <?php echo e(t('Change Password', 'پاس ورڈ تبدیل کریں')); ?>


                </button>

            </form>

        </div>


        <div class="security-card">

            <div class="security-icon">

                <i class="bi bi-info-circle-fill"></i>

            </div>

            <div>

                <h5>
                    <?php echo e(t('Email Verification', 'ای میل کی تصدیق')); ?>

                </h5>

                <p>

                    <?php echo e(t('When you change your email address, GrowSmart will send a verification code to the new email. Your email will only be changed after the correct 6-digit code is entered.', 'جب آپ اپنا ای میل پتہ تبدیل کریں گے تو گرو اسمارٹ نئے ای میل پتے پر تصدیقی کوڈ بھیجے گا۔ درست 6 ہندسوں کا کوڈ درج کرنے کے بعد ہی آپ کا ای میل پتہ تبدیل کیا جائے گا۔')); ?>


                </p>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('styles'); ?>

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




.settings-card{
    background:#fff;
    border:1px solid #e1e9e4;
    border-radius:15px;
    padding:21px;
    margin-bottom:13px;
    box-shadow:0 6px 20px rgba(23,59,50,.06);
}




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




.otp-button{
    width:100%;
    min-height:43px;
}




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

<?php $__env->stopPush(); ?>



<?php $__env->startPush('scripts'); ?>

<script>



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




const emailOtp =
    document.getElementById('emailOtp');


if(emailOtp){

    

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


    

    emailOtp.addEventListener(
        'keydown',
        function(event){

            if(event.key === ' '){

                event.preventDefault();

            }

        }
    );

}




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


            

            if(!/^[0-9]{6}$/.test(otp)){

                event.preventDefault();

                emailOtp.focus();

                alert(
                    'Please enter the complete 6-digit verification code.'
                );

                return;

            }


            

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

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/account-settings.blade.php ENDPATH**/ ?>