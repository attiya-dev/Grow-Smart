<!-- 
EXAMPLE: How to Update welcome.blade.php for Urdu Support

This file shows how you can update your views to use the new Urdu language support.
Replace the relevant sections in your actual welcome.blade.php with this code.

Key changes:
1. Added language selector (dir attribute based on locale)
2. Added language-switcher component
3. Replaced hardcoded text with translation keys
4. Added proper RTL support for Urdu
-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@lang('messages.welcome') - {{ config('app.name') }}</title>
    </head>
    <body class="antialiased">
        <!-- Language Switcher - Add this to your header/navigation -->
        <header class="flex justify-between items-center p-4">
            <h1>{{ config('app.name') }}</h1>
            
            <!-- Language Selector Component -->
            <x-language-switcher />
        </header>

        <!-- Navigation with Translations -->
        <nav>
            <a href="{{ route('dashboard') }}">@lang('messages.home')</a>
            <a href="{{ route('grid') }}">@lang('messages.crops')</a>
            <a href="{{ route('weather') }}">@lang('messages.weather')</a>
            <a href="{{ route('tips') }}">@lang('messages.tips')</a>
            
            @auth
                <a href="{{ route('user.home') }}">@lang('messages.dashboard')</a>
            @else
                <a href="{{ route('login') }}">@lang('messages.login')</a>
                <a href="{{ route('register') }}">@lang('messages.register')</a>
            @endauth
        </nav>

        <!-- Main Content -->
        <main>
            <div class="welcome-section" dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
                <h1>@lang('messages.welcome')</h1>
                <p>@lang('messages.welcome_description')</p>
            </div>

            <!-- Crops Section -->
            <section class="crops-section" dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
                <h2>@lang('messages.crops')</h2>
                
                <div class="crop-grid">
                    <a href="{{ route('summer') }}" class="crop-card">
                        <h3>@lang('messages.summer_crops')</h3>
                    </a>
                    <a href="{{ route('winter') }}" class="crop-card">
                        <h3>@lang('messages.winter_crops')</h3>
                    </a>
                    <a href="{{ route('garden') }}" class="crop-card">
                        <h3>@lang('messages.garden')</h3>
                    </a>
                    <a href="{{ route('fruit') }}" class="crop-card">
                        <h3>@lang('messages.fruit')</h3>
                    </a>
                    <a href="{{ route('vegetable') }}" class="crop-card">
                        <h3>@lang('messages.vegetable')</h3>
                    </a>
                    <a href="{{ route('grains') }}" class="crop-card">
                        <h3>@lang('messages.grains')</h3>
                    </a>
                </div>
            </section>

            <!-- Community Section -->
            <section class="community-section" dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
                <h2>@lang('messages.community')</h2>
                
                <div class="community-features">
                    <div class="feature">
                        <h3>@lang('messages.questions')</h3>
                        <p>@lang('messages.ask_and_answer')</p>
                        <a href="{{ route('user.home') }}" class="btn">
                            @lang('messages.ask_question')
                        </a>
                    </div>
                    
                    <div class="feature">
                        <h3>@lang('messages.tips')</h3>
                        <p>@lang('messages.farming_tips')</p>
                        <a href="{{ route('tips') }}" class="btn">
                            @lang('messages.tips')
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. @lang('messages.all_rights_reserved')</p>
        </footer>
    </body>
</html>

<!--
NOTES FOR IMPLEMENTATION:

1. REPLACE HARDCODED TEXT:
   Before: <h1>Welcome</h1>
   After:  <h1>@lang('messages.welcome')</h1>

2. ADD DIRECTION ATTRIBUTE:
   <div dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
   
3. USE LANGUAGE SWITCHER:
   <x-language-switcher />

4. ADD MISSING TRANSLATIONS:
   If you use a key like 'messages.welcome_description', 
   make sure to add it to:
   - resources/lang/en/messages.php
   - resources/lang/ur/messages.php

5. CSS ADJUSTMENTS FOR RTL:
   Add to your CSS:
   [dir="rtl"] { text-align: right; }
   [dir="ltr"] { text-align: left; }

6. TEST BOTH LANGUAGES:
   - Click language switcher to test
   - Or visit /language/en and /language/ur

EXAMPLE TRANSLATIONS TO ADD:

resources/lang/en/messages.php:
'welcome_description' => 'Welcome to our farming community',
'community' => 'Community',
'ask_and_answer' => 'Ask questions and get answers from experts',
'all_rights_reserved' => 'All rights reserved',

resources/lang/ur/messages.php:
'welcome_description' => 'ہماری کاشتکاری برادری میں خوش آمدید',
'community' => 'برادری',
'ask_and_answer' => 'سوالات پوچھیں اور ماہرین سے جوابات حاصل کریں',
'all_rights_reserved' => 'تمام حقوق محفوظ ہیں',
-->
