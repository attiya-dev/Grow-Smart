@extends('layouts.app')

@section('title', 'Privacy Policy | GrowSmart')

@section('content')

<div class="container privacy-container">

    <div class="privacy-page">

        <div class="privacy-header">
            <div class="privacy-icon">
                <i class="bi bi-shield-check"></i>
            </div>

            <div>
                <h1>Privacy Policy</h1>
                <p>Your privacy and account security matter to GrowSmart.</p>
            </div>
        </div>

        <div class="privacy-intro">
            GrowSmart respects your privacy and is committed to protecting
            the information you provide while using our smart agriculture platform.
        </div>

        <div class="privacy-sections">

            <section>
                <span class="section-number">01</span>
                <div>
                    <h3>Information We Collect</h3>
                    <p>
                        GrowSmart may collect your name, email address,
                        profile picture and information you provide while
                        using our agriculture services.
                    </p>
                </div>
            </section>

            <section>
                <span class="section-number">02</span>
                <div>
                    <h3>How We Use Your Information</h3>
                    <p>
                        Your information helps us manage your account,
                        provide agriculture services, support community
                        features and improve your overall experience.
                    </p>
                </div>
            </section>

            <section>
                <span class="section-number">03</span>
                <div>
                    <h3>Profile Pictures</h3>
                    <p>
                        If you upload a profile picture, it is stored with
                        your GrowSmart account and may appear on your profile
                        and navigation bar.
                    </p>
                </div>
            </section>

            <section>
                <span class="section-number">04</span>
                <div>
                    <h3>Account Security</h3>
                    <p>
                        Keep your password and login information private.
                        Do not share your account credentials with others.
                    </p>
                </div>
            </section>

            <section>
                <span class="section-number">05</span>
                <div>
                    <h3>Community Content</h3>
                    <p>
                        Content shared in the GrowSmart community should not
                        contain private, confidential or sensitive personal
                        information.
                    </p>
                </div>
            </section>

            <section>
                <span class="section-number">06</span>
                <div>
                    <h3>Third-Party Services</h3>
                    <p>
                        GrowSmart may use external services such as weather,
                        authentication and technology providers to support
                        selected platform features.
                    </p>
                </div>
            </section>

            <section>
                <span class="section-number">07</span>
                <div>
                    <h3>Changes to This Policy</h3>
                    <p>
                        This privacy policy may be updated when necessary.
                        Any changes will be reflected on this page.
                    </p>
                </div>
            </section>

            <section>
                <span class="section-number">08</span>
                <div>
                    <h3>Contact</h3>
                    <p>
                        If you have questions about this privacy policy,
                        please contact GrowSmart using the contact
                        information available on our website.
                    </p>
                </div>
            </section>

        </div>

        <div class="privacy-footer">
            <i class="bi bi-lock-fill"></i>
            <span>GrowSmart is committed to protecting your information.</span>
        </div>

    </div>

</div>

@endsection

@push('styles')

<style>
.privacy-container{
    max-width:1000px;
    padding-top:8px;
    padding-bottom:0;
}

.privacy-page{
    background:#fff;
    border:1px solid #e2ebe5;
    border-radius:18px;
    padding:28px 34px;
    box-shadow:0 8px 28px rgba(23,59,50,.07);
}

.privacy-header{
    display:flex;
    align-items:center;
    gap:16px;
    padding-bottom:20px;
    border-bottom:1px solid #e5ece8;
}

.privacy-icon{
    width:60px;
    height:60px;
    flex-shrink:0;
    border-radius:15px;
    background:#e7f1eb;
    color:#285c48;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:29px;
}

.privacy-header h1{
    margin:0;
    color:#173b32;
    font-size:27px;
    font-weight:700;
}

.privacy-header p{
    margin:4px 0 0;
    color:#718078;
    font-size:12px;
}

.privacy-intro{
    margin:20px 0 22px;
    padding:15px 18px;
    background:#f3f7f4;
    border-left:4px solid #285c48;
    border-radius:9px;
    color:#52635b;
    font-size:12px;
    line-height:1.65;
}

.privacy-sections{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:12px 18px;
}

.privacy-sections section{
    display:flex;
    gap:12px;
    padding:16px;
    background:#fafcfb;
    border:1px solid #e7eee9;
    border-radius:12px;
    transition:.2s ease;
}

.privacy-sections section:hover{
    transform:translateY(-2px);
    border-color:#cbdcd2;
    box-shadow:0 5px 15px rgba(23,59,50,.06);
}

.section-number{
    width:32px;
    height:32px;
    flex-shrink:0;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:9px;
    background:#e6efe9;
    color:#285c48;
    font-size:10px;
    font-weight:700;
}

.privacy-sections h3{
    margin:1px 0 5px;
    color:#285c48;
    font-size:14px;
    font-weight:700;
}

.privacy-sections p{
    margin:0;
    color:#687870;
    font-size:11px;
    line-height:1.65;
}

.privacy-footer{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    margin-top:20px;
    padding-top:17px;
    border-top:1px solid #e5ece8;
    color:#718078;
    font-size:11px;
}

.privacy-footer i{
    color:#285c48;
    font-size:14px;
}

@media(max-width:768px){
    .privacy-container{
        padding-top:5px;
    }

    .privacy-page{
        padding:24px 20px;
    }

    .privacy-sections{
        grid-template-columns:1fr;
    }
}

@media(max-width:500px){
    .privacy-container{
        padding-left:8px;
        padding-right:8px;
    }

    .privacy-page{
        padding:20px 15px;
        border-radius:15px;
    }

    .privacy-header{
        gap:12px;
    }

    .privacy-icon{
        width:52px;
        height:52px;
        font-size:24px;
    }

    .privacy-header h1{
        font-size:22px;
    }

    .privacy-header p{
        font-size:10px;
    }

    .privacy-intro{
        margin:16px 0;
        padding:13px;
    }

    .privacy-sections section{
        padding:14px 12px;
    }
}
</style>

@endpush

