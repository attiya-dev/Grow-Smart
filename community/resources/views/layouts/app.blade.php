<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'GrowSmart | Smart Agriculture Platform')
    </title>

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

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: #f5f7f2;
            color: #263d32;
            font-family: Arial, Helvetica, sans-serif;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        :root {
            --dark-green: #173b32;
            --green: #285c48;
            --light-green: #6f927f;
            --very-light-green: #e6efe9;
            --soft-green: #f0f5f1;
            --cream: #f5f7f2;
            --white: #ffffff;
            --text: #263d32;
            --gray: #718078;
            --border: #dce5df;
            --gold: #b08a4b;
            --card-shadow: 0 8px 25px rgba(23, 59, 50, 0.08);
            --hover-shadow: 0 14px 35px rgba(23, 59, 50, 0.14);
        }

        #sidebar {
            position: fixed;
            top: 0;
            left: -285px;
            width: 275px;
            height: 100vh;
            background: var(--dark-green);
            z-index: 3000;
            padding: 12px 12px;
            transition: left 0.3s ease;
            box-shadow: 8px 0 25px rgba(0, 0, 0, 0.18);
            overflow-y: auto;
            overflow-x: hidden;
        }

        #sidebar.show {
            left: 0;
        }

        #sidebar::-webkit-scrollbar {
            width: 5px;
        }

        #sidebar::-webkit-scrollbar-track {
            background: transparent;
        }

        #sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.18);
            border-radius: 10px;
        }

        .sidebar-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 6px 12px;
            color: white;
        }

        .sidebar-logo img {
            width: 42px;
            height: 42px;
            object-fit: cover;
            border-radius: 9px;
            border: 2px solid rgba(255,255,255,0.12);
            flex-shrink: 0;
        }

        .sidebar-logo-text {
            font-size: 18px;
            font-weight: bold;
            line-height: 1.2;
        }

        .sidebar-logo small {
            display: block;
            margin-top: 2px;
            color: #a9beb4;
            font-size: 9px;
            letter-spacing: 0.5px;
        }

        .close-sidebar {
            margin-left: auto;
            width: 32px;
            height: 32px;
            border: none;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            color: white;
            cursor: pointer;
            transition: 0.2s;
            flex-shrink: 0;
        }

        .close-sidebar:hover {
            background: rgba(255,255,255,0.18);
            transform: rotate(90deg);
        }

        #sidebar hr {
            border-color: rgba(255,255,255,0.10);
            margin: 8px 5px 10px;
        }

        #sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #sidebar ul li {
            margin: 0;
            padding: 0;
        }

        #sidebar ul li a,
        .sidebar-dropdown-btn {
            display: flex;
            align-items: center;
            gap: 11px;
            width: 100%;
            min-height: 42px;
            padding: 9px 11px;
            margin: 2px 0;
            border-radius: 9px;
            color: #d1ddd7;
            font-size: 13px;
            transition: 0.2s;
            background: transparent;
            border: none;
            text-align: left;
            cursor: pointer;
        }

        #sidebar ul li a i,
        .sidebar-dropdown-btn > i:not(.profile-arrow) {
            width: 22px;
            min-width: 22px;
            text-align: center;
            font-size: 17px;
        }

        #sidebar ul li a:hover,
        .sidebar-dropdown-btn:hover {
            background: rgba(255,255,255,0.08);
            color: white;
            transform: translateX(2px);
        }

        #sidebar ul li a.active {
            background: var(--very-light-green);
            color: var(--dark-green);
            font-weight: bold;
        }

        .separator {
            height: 1px;
            background: rgba(255,255,255,0.10);
            margin: 9px 5px !important;
            padding: 0 !important;
        }

        .sidebar-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 10px;
            margin: 0 0 4px;
            background: rgba(255,255,255,0.06);
            border-radius: 10px;
        }

        .sidebar-profile img,
        .sidebar-profile-placeholder {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
        }

        .sidebar-profile img {
            border: 2px solid rgba(255,255,255,0.18);
        }

        .sidebar-profile-placeholder {
            background: #e6efe9;
            color: #285c48;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
        }

        .sidebar-profile-name {
            color: white;
            font-size: 12px;
            font-weight: bold;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 155px;
        }

        .sidebar-profile-email {
            color: #a9beb4;
            font-size: 9px;
            margin-top: 2px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 155px;
        }

        .profile-button {
            justify-content: flex-start;
            position: relative;
        }

        .profile-button-photo,
        .profile-button-placeholder {
            width: 28px;
            height: 28px;
            min-width: 28px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
        }

        .profile-button-photo {
            border: 2px solid rgba(255,255,255,0.25);
        }

        .profile-button-placeholder {
            background: #e6efe9;
            color: #285c48;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
        }

        .profile-arrow {
            margin-left: auto;
            font-size: 12px !important;
            width: auto !important;
            min-width: auto !important;
            transition: transform 0.25s ease;
        }

        .profile-button.open .profile-arrow {
            transform: rotate(180deg);
        }

        .profile-menu {
            display: none;
            position: fixed;
            width: 245px;
            padding: 6px;
            background: #1d463b;
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 11px;
            box-shadow:
                0 12px 35px rgba(0,0,0,0.30),
                0 4px 12px rgba(0,0,0,0.15);
            z-index: 5000;
            animation: profileMenuUp 0.18s ease;
            max-height: calc(100vh - 20px);
            overflow-y: auto;
        }

        .profile-menu.show {
            display: block;
        }

        @keyframes profileMenuUp {
            from {
                opacity: 0;
                transform: translateY(7px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profile-menu::-webkit-scrollbar {
            width: 4px;
        }

        .profile-menu::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.18);
            border-radius: 10px;
        }

        .profile-menu a,
        .profile-menu button {
            display: flex !important;
            align-items: center;
            gap: 10px !important;
            width: 100%;
            padding: 9px 10px !important;
            min-height: 37px;
            margin: 1px 0;
            border-radius: 7px !important;
            color: #cbd8d2 !important;
            font-size: 12px !important;
            background: transparent;
            border: none;
            cursor: pointer;
            text-align: left;
            transform: none !important;
        }

        .profile-menu a:hover,
        .profile-menu button:hover {
            background: rgba(255,255,255,0.10) !important;
            color: white !important;
        }

        .profile-menu i {
            width: 19px !important;
            min-width: 19px !important;
            font-size: 14px !important;
            text-align: center;
        }

        .language-menu {
            display: none;
            padding: 2px 0 2px 19px;
            border-left: 1px solid rgba(255,255,255,0.12);
            margin: 2px 0 4px 8px;
        }

        .language-menu.show {
            display: block;
        }

        .language-menu a {
            font-size: 11px !important;
            padding: 7px 9px !important;
            min-height: 32px;
        }

        .nav-profile {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            flex-shrink: 0;
        }

        .nav-profile img,
        .nav-profile-placeholder {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255,255,255,0.25);
        }

        .nav-profile img {
            display: block;
        }

        .nav-profile-placeholder {
            background: #e6efe9;
            color: #285c48;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        #sidebar-backdrop {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(10, 30, 25, 0.45);
            backdrop-filter: blur(3px);
            z-index: 2900;
        }

        #sidebar-backdrop.show {
            display: block;
        }

        .navbar-main {
            position: sticky;
            top: 0;
            z-index: 2000;
            background: var(--dark-green);
            border-bottom: 1px solid rgba(255,255,255,0.08);
            box-shadow: 0 4px 18px rgba(23,59,50,0.12);
            padding: 10px 25px;
        }

        .navbar-inner {
            max-width: 1450px;
            margin: auto;
            display: flex;
            align-items: center;
            gap: 12px;
            min-height: 46px;
        }

        .menu-button {
            width: 41px;
            height: 41px;
            flex-shrink: 0;
            border: 1px solid rgba(255,255,255,0.14);
            border-radius: 11px;
            background: rgba(255,255,255,0.07);
            color: white;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .menu-button:hover {
            background: rgba(255,255,255,0.16);
            transform: translateY(-1px);
            border-color: rgba(255,255,255,0.25);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 9px;
            color: white;
            font-size: 19px;
            font-weight: bold;
            white-space: nowrap;
            flex-shrink: 0;
        }

        .brand:hover {
            color: white;
        }

        .brand img {
            width: 38px;
            height: 38px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid rgba(255,255,255,0.14);
        }

        .category-nav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
            margin-left: auto;
            flex: 1;
            min-width: 0;
            overflow-x: auto;
            padding: 3px 2px;
            scrollbar-width: none;
            -webkit-overflow-scrolling: touch;
        }

        .category-nav::-webkit-scrollbar {
            display: none;
        }

        .category-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 35px;
            padding: 7px 16px;
            border-radius: 30px;
            color: #d6e2dc;
            border: 1px solid rgba(255,255,255,0.13);
            background: rgba(255,255,255,0.055);
            font-size: 12px;
            font-weight: 500;
            white-space: nowrap;
            flex-shrink: 0;
            transition: 0.25s;
        }

        .category-pill:hover {
            background: rgba(255,255,255,0.14);
            color: white;
            border-color: rgba(255,255,255,0.25);
            transform: translateY(-1px);
        }

        .category-pill.active {
            background: var(--very-light-green);
            border-color: var(--very-light-green);
            color: var(--dark-green);
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(0,0,0,0.10);
        }

        .main-content {
            max-width: 1450px;
            margin: auto;
            padding: 22px 30px 0;
        }

        #logoutModal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0,0,0,0.55);
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        #logoutModal.show {
            display: flex;
        }

        .logout-box {
            width: 100%;
            max-width: 420px;
            background: white;
            border-radius: 18px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.25);
            animation: logoutBoxAnimation 0.2s ease;
        }

        @keyframes logoutBoxAnimation {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .logout-icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 18px;
            border-radius: 50%;
            background: #e8f5e9;
            color: #285c48;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 29px;
        }

        .logout-box h3 {
            color: #173b32;
            margin-bottom: 8px;
            font-size: 22px;
        }

        .logout-box p {
            color: #718078;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .logout-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .logout-cancel,
        .logout-confirm {
            border: none;
            padding: 11px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            min-width: 100px;
        }

        .logout-cancel {
            background: #e9ecef;
            color: #333;
        }

        .logout-cancel:hover {
            background: #dfe3e6;
        }

        .logout-confirm {
            background: #c62828;
            color: white;
        }

        .logout-confirm:hover {
            background: #b71c1c;
        }

        .footer {
            position: relative;
            background: var(--dark-green);
            color: white;
            margin-top: 45px;
            padding: 50px 30px 16px;
            border-top: 1px solid rgba(255,255,255,0.06);
        }

        .footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(
                90deg,
                #285c48,
                #b08a4b,
                #285c48
            );
        }

        .footer h5 {
            color: #e0ebe5;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 17px;
        }

        .footer p {
            color: #afc1b8;
            font-size: 13px;
            line-height: 1.75;
        }

        .footer a {
            color: #afc1b8;
            font-size: 13px;
            transition: 0.2s;
        }

        .footer a:hover {
            color: white;
            padding-left: 3px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 9px;
        }

        .footer-social a {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255,255,255,0.07);
            margin-right: 6px;
            font-size: 15px;
            padding-left: 0 !important;
            transition: 0.2s;
        }

        .footer-social a:hover {
            background: var(--very-light-green);
            color: var(--dark-green);
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.09);
            margin-top: 28px;
            padding-top: 18px;
            text-align: center;
            color: #718a80;
            font-size: 11px;
        }

        @media (max-width: 1100px) {

            .category-nav {
                gap: 6px;
            }

            .category-pill {
                padding: 7px 12px;
                font-size: 11px;
            }

        }

        @media (max-width: 992px) {

            .navbar-main {
                padding: 9px 15px;
            }

            .navbar-inner {
                gap: 9px;
            }

            .category-nav {
                margin-left: 4px;
                justify-content: flex-start;
            }

            .main-content {
                padding: 18px 15px 0;
            }

        }

        @media (max-width: 768px) {

            #sidebar {
                width: 270px;
            }

            .navbar-main {
                padding: 8px 12px 7px;
            }

            .navbar-inner {
                display: grid;
                grid-template-columns: auto 1fr auto;
                grid-template-rows: 42px auto;
                column-gap: 10px;
                row-gap: 7px;
                min-height: auto;
            }

            .menu-button {
                width: 40px;
                height: 40px;
                border-radius: 10px;
                font-size: 19px;
                grid-column: 1;
                grid-row: 1;
            }

            .brand {
                grid-column: 2;
                grid-row: 1;
                font-size: 17px;
            }

            .brand img {
                width: 38px;
                height: 38px;
            }

            .nav-profile {
                grid-column: 3;
                grid-row: 1;
                margin-left: 0;
            }

            .category-nav {
                grid-column: 1 / -1;
                grid-row: 2;
                display: flex;
                justify-content: flex-start;
                gap: 7px;
                width: 100%;
                margin: 0;
                padding: 2px 1px 3px;
                overflow-x: auto;
            }

            .category-pill {
                flex: 0 0 auto;
                min-height: 34px;
                padding: 7px 14px;
                font-size: 11px;
            }

        }

        @media (max-width: 576px) {

            .main-content {
                padding-left: 10px;
                padding-right: 10px;
            }

            .navbar-main {
                padding: 7px 10px 6px;
            }

            .brand {
                font-size: 16px;
            }

            .brand img {
                width: 36px;
                height: 36px;
            }

            .nav-profile img,
            .nav-profile-placeholder {
                width: 36px;
                height: 36px;
            }

            .category-pill {
                padding: 7px 13px;
                min-height: 32px;
                font-size: 10.5px;
            }

            .footer {
                padding: 45px 20px 15px;
            }

            .logout-box {
                padding: 25px 20px;
            }

        }

        @media (max-width: 400px) {

            #sidebar {
                width: 260px;
            }

            .main-content {
                padding-left: 8px;
                padding-right: 8px;
            }

            .navbar-main {
                padding: 7px 8px 5px;
            }

            .brand {
                font-size: 15px;
            }

            .brand img {
                width: 35px;
                height: 35px;
            }

            .nav-profile img,
            .nav-profile-placeholder {
                width: 34px;
                height: 34px;
            }

            .category-pill {
                padding: 7px 12px;
                min-height: 31px;
                font-size: 10px;
            }

            .profile-menu {
                width: 235px;
            }

        }

    </style>

    @stack('styles')

</head>

<body>

<div id="sidebar">

    <div class="sidebar-logo">

        <img
            src="{{ asset('images/logo1.jpg') }}"
            alt="GrowSmart"
        >

        <div>

            <div class="sidebar-logo-text">
                GrowSmart
            </div>

            <small>
                SMART AGRICULTURE
            </small>

        </div>

        <button
            class="close-sidebar"
            onclick="toggleSidebar()"
            type="button"
            aria-label="Close menu"
        >

            <i class="bi bi-x-lg"></i>

        </button>

    </div>

    <hr>

    @auth

    <div class="sidebar-profile">

        @if(Auth::user()->profile_photo)

            <img
                src="{{ asset(Auth::user()->profile_photo) }}"
                alt="Profile"
            >

        @else

            <div class="sidebar-profile-placeholder">
                <i class="bi bi-person"></i>
            </div>

        @endif

        <div>

            <div class="sidebar-profile-name">
                {{ Auth::user()->name }}
            </div>

            <div class="sidebar-profile-email">
                {{ Auth::user()->email }}
            </div>

        </div>

    </div>

    @endauth

    <hr>

    <ul>

        <li>

            <a
                href="/grid"
                class="{{ request()->is('grid') ? 'active' : '' }}"
            >

                <i class="bi bi-bar-chart"></i>

                <span>
                    Crop Data
                </span>

            </a>

        </li>

        <li>

            <a
                href="/garden"
                class="{{ request()->is('garden') ? 'active' : '' }}"
            >

                <i class="bi bi-bug"></i>

                <span>
                    Pest Management
                </span>

            </a>

        </li>

        <li>

            <a
                href="/community"
                class="{{ request()->is('community') ? 'active' : '' }}"
            >

                <i class="bi bi-people"></i>

                <span>
                    Community
                </span>

            </a>

        </li>

        <li class="separator"></li>

        <li>

            <a
                href="/soil"
                class="{{ request()->is('soil') ? 'active' : '' }}"
            >

                <i class="bi bi-cpu"></i>

                <span>
                    AI Soil Analysis
                </span>

            </a>

        </li>

        <li>

            <a
                href="/weather"
                class="{{ request()->is('weather') ? 'active' : '' }}"
            >

                <i class="bi bi-cloud-sun"></i>

                <span>
                    Weather Information
                </span>

            </a>

        </li>

        @auth

        <li class="separator"></li>

        <li>

            <button
                type="button"
                class="sidebar-dropdown-btn profile-button"
                id="profileButton"
                onclick="toggleProfileMenu()"
            >

                @if(Auth::user()->profile_photo)

                    <img
                        src="{{ asset(Auth::user()->profile_photo) }}"
                        alt="Profile"
                        class="profile-button-photo"
                    >

                @else

                    <div class="profile-button-placeholder">
                        <i class="bi bi-person"></i>
                    </div>

                @endif

                <span>
                    Profile
                </span>

                <i
                    class="bi bi-chevron-down profile-arrow"
                    id="profileArrow"
                ></i>

            </button>

            <div
                class="profile-menu"
                id="profileMenu"
            >

                <a href="{{ route('profile') }}">

                    <i class="bi bi-person-bounding-box"></i>

                    <span>
                        Add Profile Picture
                    </span>

                </a>

                <a href="{{ route('account.settings') }}">

                    <i class="bi bi-gear"></i>

                    <span>
                        Account Settings
                    </span>

                </a>

                {{-- <button
                    type="button"
                    onclick="toggleLanguageMenu()"
                >

                    <i class="bi bi-translate"></i>

                    <span>
                        Select Language
                    </span>

                    <i
                        class="bi bi-chevron-down"
                        style="margin-left:auto; width:auto !important;"
                    ></i>

                </button> --}}

                {{-- <div
                    class="language-menu"
                    id="languageMenu"
                >

                    <a href="{{ route('language.change', 'en') }}">

                        <i class="bi bi-check2"></i>

                        English

                    </a>

                    <a href="{{ route('language.change', 'ur') }}">

                        <i class="bi bi-check2"></i>

                        اردو

                    </a>

                </div> --}}

                <a href="{{ route('privacy.policy') }}">

                    <i class="bi bi-shield-lock"></i>

                    <span>
                        Privacy Policy
                    </span>

                </a>

                <a href="{{ route('about.us') }}">

                    <i class="bi bi-info-circle"></i>

                    <span>
                        About Us
                    </span>

                </a>

                <button
                    type="button"
                    onclick="openLogoutModal()"
                >

                    <i class="bi bi-box-arrow-right"></i>

                    <span>
                        Logout
                    </span>

                </button>

            </div>

        </li>

        @endauth

    </ul>

</div>

<div
    id="sidebar-backdrop"
    onclick="toggleSidebar()"
></div>

<nav class="navbar-main">

    <div class="navbar-inner">

        <button
            class="menu-button"
            onclick="toggleSidebar()"
            aria-label="Open menu"
            type="button"
        >

            <i class="bi bi-list"></i>

        </button>

        <a
            href="/"
            class="brand"
        >

            <img
                src="{{ asset('images/logo1.jpg') }}"
                alt="GrowSmart"
            >

            <span>
                GrowSmart
            </span>

        </a>

        <div class="category-nav">

            <a
                href="/dashboard"
                class="category-pill {{ request()->is('dashboard') || request()->is('/') ? 'active' : '' }}"
            >
                Home
            </a>

            <a
                href="/summer"
                class="category-pill {{ request()->is('summer') ? 'active' : '' }}"
            >
                Summer Crops
            </a>

            <a
                href="/winter"
                class="category-pill {{ request()->is('winter') ? 'active' : '' }}"
            >
                Winter Crops
            </a>

            <a
                href="/grains"
                class="category-pill {{ request()->is('grains') ? 'active' : '' }}"
            >
                Grains
            </a>

            <a
                href="/vegetable"
                class="category-pill {{ request()->is('vegetable') ? 'active' : '' }}"
            >
                Vegetables
            </a>

            <a
                href="/fruit"
                class="category-pill {{ request()->is('fruit') ? 'active' : '' }}"
            >
                Fruits
            </a>

        </div>

        @auth

        <div class="nav-profile">

            @if(Auth::user()->profile_photo)

                <img
                    src="{{ asset(Auth::user()->profile_photo) }}"
                    alt="Profile Picture"
                >

            @else

                <div class="nav-profile-placeholder">

                    <i class="bi bi-person"></i>

                </div>

            @endif

        </div>

        @endauth

    </div>

</nav>

<main class="main-content">

    @yield('content')

</main>

<footer class="footer">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">

                <h5>
                    <i class="bi bi-tree-fill"></i>
                    &nbsp;GrowSmart
                </h5>

                <p>
                    GrowSmart is an intelligent agriculture platform
                    helping farmers with crop information, pest
                    management, soil analysis, weather forecasting
                    and expert community support.
                </p>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <h5>
                    Quick Links
                </h5>

                <ul class="footer-links">

                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="/grid">
                            Crop Data
                        </a>
                    </li>

                    <li>
                        <a href="/garden">
                            Pest Management
                        </a>
                    </li>

                    <li>
                        <a href="/community">
                            Community
                        </a>
                    </li>

                </ul>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">

                <h5>
                    Services
                </h5>

                <ul class="footer-links">

                    <li>
                        <a href="/soil">
                            AI Soil Analysis
                        </a>
                    </li>

                    <li>
                        <a href="/weather">
                            Weather Forecast
                        </a>
                    </li>

                    <li>
                        <a href="/community">
                            Expert Support
                        </a>
                    </li>

                    <li>
                        <a href="/grid">
                            Crop Knowledge
                        </a>
                    </li>

                </ul>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">

                <h5>
                    Contact Us
                </h5>

                <p>
                    <i class="bi bi-envelope-fill"></i>
                    &nbsp;support@growsmart.com
                </p>

                <p>
                    <i class="bi bi-telephone-fill"></i>
                    &nbsp;+92 XXX XXXXXXX
                </p>

                <p>
                    <i class="bi bi-geo-alt-fill"></i>
                    &nbsp;Pakistan
                </p>

                <div class="footer-social mt-3">

                    <a href="#" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#" aria-label="Twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="#" aria-label="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>

                </div>

            </div>

        </div>

        <div class="footer-bottom">

            © {{ date('Y') }} GrowSmart. All Rights Reserved.

            <br>

            Empowering Farmers Through Smart Agriculture.

        </div>

    </div>

</footer>

<div id="logoutModal">

    <div class="logout-box">

        <div class="logout-icon">

            <i class="bi bi-box-arrow-right"></i>

        </div>

        <h3>
            Logout
        </h3>

        <p>
            Are you sure you want to logout from GrowSmart?
        </p>

        <div class="logout-actions">

            <button
                type="button"
                class="logout-cancel"
                onclick="closeLogoutModal()"
            >
                No
            </button>

            <form
                action="{{ route('logout') }}"
                method="POST"
                style="margin:0;"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-confirm"
                >
                    Yes, Logout
                </button>

            </form>

        </div>

    </div>

</div>

<script>

function toggleSidebar()
{
    const sidebar = document.getElementById('sidebar');
    const backdrop = document.getElementById('sidebar-backdrop');
    const profileMenu = document.getElementById('profileMenu');
    const profileButton = document.getElementById('profileButton');

    if (!sidebar || !backdrop) {
        return;
    }

    sidebar.classList.toggle('show');
    backdrop.classList.toggle('show');

    if (!sidebar.classList.contains('show')) {

        if (profileMenu) {
            profileMenu.classList.remove('show');
        }

        if (profileButton) {
            profileButton.classList.remove('open');
        }

    }
}

function toggleProfileMenu()
{
    const menu = document.getElementById('profileMenu');
    const button = document.getElementById('profileButton');

    if (!menu || !button) {
        return;
    }

    if (menu.classList.contains('show')) {

        menu.classList.remove('show');
        button.classList.remove('open');

        return;
    }

    menu.classList.add('show');
    button.classList.add('open');

    const buttonRect = button.getBoundingClientRect();

    const menuHeight = menu.offsetHeight;
    const menuWidth = menu.offsetWidth;

    let top = buttonRect.top - menuHeight - 8;
    let left = buttonRect.left;

    if (top < 10) {
        top = 10;
    }

    if (left + menuWidth > window.innerWidth - 10) {
        left = window.innerWidth - menuWidth - 10;
    }

    menu.style.top = top + 'px';
    menu.style.left = left + 'px';
}

function toggleLanguageMenu()
{
    const menu = document.getElementById('languageMenu');

    if (!menu) {
        return;
    }

    menu.classList.toggle('show');
}

function openLogoutModal()
{
    const modal = document.getElementById('logoutModal');

    if (modal) {
        modal.classList.add('show');
    }
}

function closeLogoutModal()
{
    const modal = document.getElementById('logoutModal');

    if (modal) {
        modal.classList.remove('show');
    }
}

const logoutModal = document.getElementById('logoutModal');

if (logoutModal) {

    logoutModal.addEventListener('click', function(event) {

        if (event.target === this) {
            closeLogoutModal();
        }

    });

}

document.addEventListener('keydown', function(event) {

    if (event.key === 'Escape') {

        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        const profileMenu = document.getElementById('profileMenu');
        const profileButton = document.getElementById('profileButton');

        if (sidebar) {
            sidebar.classList.remove('show');
        }

        if (backdrop) {
            backdrop.classList.remove('show');
        }

        if (profileMenu) {
            profileMenu.classList.remove('show');
        }

        if (profileButton) {
            profileButton.classList.remove('open');
        }

        closeLogoutModal();

    }

});

window.addEventListener('resize', function() {

    const menu = document.getElementById('profileMenu');
    const button = document.getElementById('profileButton');

    if (
        !menu ||
        !button ||
        !menu.classList.contains('show')
    ) {
        return;
    }

    const buttonRect = button.getBoundingClientRect();

    const menuHeight = menu.offsetHeight;
    const menuWidth = menu.offsetWidth;

    let top = buttonRect.top - menuHeight - 8;
    let left = buttonRect.left;

    if (top < 10) {
        top = 10;
    }

    if (left + menuWidth > window.innerWidth - 10) {
        left = window.innerWidth - menuWidth - 10;
    }

    menu.style.top = top + 'px';
    menu.style.left = left + 'px';

});

</script>

@stack('scripts')

</body>

</html>
