@extends('layouts.app')

@section('content')

<style>

body {
    background: #f4f8f4;
    font-family: Arial, sans-serif;
}

.admin-dashboard {
    width: 90%;
    max-width: 1100px;
    margin: 50px auto;
}

.header {
    text-align: center;
    margin-bottom: 45px;
}

.header h1 {
    color: #1b5e20;
    font-size: 38px;
    margin-bottom: 10px;
}

.header p {
    color: #666;
    font-size: 17px;
}

.menu {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.card {
    background: white;
    text-decoration: none;
    padding: 35px 25px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid #e5eee5;
    transition: 0.3s;
    display: block;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    border-color: #2e7d32;
    background: #fafffa;
}

.icon {
    font-size: 50px;
    margin-bottom: 20px;
}

.card h2 {
    color: #1b5e20;
    font-size: 23px;
    margin-bottom: 12px;
}

.card p {
    color: #777;
    font-size: 15px;
    line-height: 1.6;
}

.success {
    background: #d4edda;
    color: #155724;
    padding: 14px;
    border-radius: 8px;
    margin-bottom: 25px;
    text-align: center;
}

@media (max-width: 800px) {

    .menu {
        grid-template-columns: 1fr;
    }

    .header h1 {
        font-size: 32px;
    }
}

</style>


<div class="admin-dashboard" data-no-translate="true">

    <div class="header">

        <h1>{{ t('Admin Dashboard', 'منتظم کا ڈیش بورڈ') }}</h1>

        <p>
            {{ t('Manage users, questions and crop information', 'صارفین، سوالات اور فصلوں کی معلومات کا انتظام کریں') }}
        </p>

    </div>


    @if(session('success'))

        <div class="success">
            {{ session('success') }}
        </div>

    @endif


    <div class="menu">


        <a href="{{ route('admin.dashboard') }}"
           class="card">

            <div class="icon">
                👥
            </div>

            <h2>
                {{ t('All Users', 'تمام صارفین') }}
            </h2>

            <p>
                {{ t('View and manage all registered users.', 'تمام رجسٹرڈ صارفین کو دیکھیں اور ان کا انتظام کریں۔') }}
            </p>

        </a>

        <a href="{{ route('admin.questions') }}"
           class="card">

            <div class="icon">
                📋
            </div>

            <h2>
                {{ t('User Questions', 'صارفین کے سوالات') }}
            </h2>

            <p>
                {{ t('View, review and manage questions submitted by users.', 'صارفین کی جانب سے جمع کرائے گئے سوالات دیکھیں، ان کا جائزہ لیں اور ان کا انتظام کریں۔') }}
            </p>

        </a>

        <a href="{{ route('admin.crops') }}"
           class="card">

            <div class="icon">
                🌱
            </div>

            <h2>
                {{ t('Manage Crops', 'فصلوں کا انتظام') }}
            </h2>

            <p>
                {{ t('Add crops, crop information, pest information and delete crops.', 'فصلیں، فصلوں کی معلومات اور کیڑوں کی معلومات شامل کریں اور فصلیں حذف کریں۔') }}
            </p>

        </a>

    </div>

</div>

@endsection
