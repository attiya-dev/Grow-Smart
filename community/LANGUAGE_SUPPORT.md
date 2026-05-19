# Urdu Language Support - Implementation Guide

This document explains how to use the Urdu (اردو) language support in your Laravel Community application.

## Features Implemented

- ✅ English (en) and Urdu (ur) language files
- ✅ Automatic locale detection from session
- ✅ Language switcher middleware
- ✅ Language switcher controller and routes
- ✅ Language switcher component

## How to Use Translations in Your Application

### 1. Using `__()` Helper in Blade Views

```blade
<!-- English translation -->
<h1>{{ __('messages.welcome') }}</h1>

<!-- Output: "Welcome" (English) or "خوش آمدید" (Urdu) -->
```

### 2. Using `@lang()` Directive in Blade

```blade
<button>@lang('messages.submit')</button>

<!-- Output: "Submit" (English) or "جمع کریں" (Urdu) -->
```

### 3. Using Translations in Controllers

```php
use Illuminate\Support\Facades\Lang;

$message = __('messages.welcome');
// or
$message = Lang::get('messages.welcome');
```

## How to Switch Languages

### 1. Using the Language Switcher Link

Add the language switcher component to your layout:

```blade
<x-language-switcher />
```

This displays buttons for English and Urdu. Clicking them switches the locale.

### 2. Manual Language Switch via URL

Visit these URLs to switch languages:
- `/language/en` - Switch to English
- `/language/ur` - Switch to Urdu

The language preference is stored in the session.

## Adding More Translations

### 1. Extending Translation Files

Edit `resources/lang/en/messages.php` and `resources/lang/ur/messages.php` to add more translations:

```php
// resources/lang/en/messages.php
return [
    'welcome' => 'Welcome',
    'hello' => 'Hello',
    'goodbye' => 'Goodbye',
    // ... more translations
];

// resources/lang/ur/messages.php
return [
    'welcome' => 'خوش آمدید',
    'hello' => 'السلام علیکم',
    'goodbye' => 'الوداع',
    // ... more translations
];
```

### 2. Using Translations with Parameters

You can use placeholders in translations:

```php
// In messages.php
'greeting' => 'Hello, :name!',

// In Blade
{{ __('messages.greeting', ['name' => 'Ahmed']) }}
// Output: "Hello, Ahmed!" or with Urdu translation
```

### 3. Creating Additional Translation Groups

For better organization, create separate files for different sections:

```
resources/lang/en/
    ├── messages.php
    ├── validation.php
    ├── auth.php
    └── crops.php

resources/lang/ur/
    ├── messages.php
    ├── validation.php
    ├── auth.php
    └── crops.php
```

Usage:
```blade
{{ __('crops.summer_crops') }}
{{ __('validation.required') }}
{{ __('auth.login') }}
```

## How Locale Selection Works

1. **Session Check**: First, checks if locale is stored in session
2. **Cookie Check**: If not in session, checks for locale in cookies
3. **Default Locale**: Falls back to `APP_LOCALE` from `.env`

The middleware (`SetLocale`) runs on every request and sets the locale automatically.

## RTL Support for Urdu

When displaying content in Urdu, add the `dir="rtl"` attribute to ensure proper text direction:

```blade
@if(app()->getLocale() === 'ur')
    <div dir="rtl">
        {{ __('messages.welcome') }}
    </div>
@else
    <div dir="ltr">
        {{ __('messages.welcome') }}
    </div>
@endif
```

Or more simply:

```blade
<div dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
    {{ __('messages.welcome') }}
</div>
```

## Making It Persistent

### Option 1: Session (Default - Lost When Browser Closes)

The current implementation stores locale in the session automatically.

### Option 2: Persistent Cookies (Recommended)

Edit `app/Http/Controllers/LanguageController.php` to uncomment the cookie line:

```php
// Store in cookie for persistence (lasts 365 days)
cookie()->queue('locale', $locale, 365 * 24 * 60);
```

## Translating Form Validation Messages

Create `resources/lang/en/validation.php` and `resources/lang/ur/validation.php`:

```php
// resources/lang/en/validation.php
return [
    'required' => 'The :attribute field is required.',
    'email' => 'The :attribute must be a valid email address.',
];

// resources/lang/ur/validation.php
return [
    'required' => ':attribute فیلڈ ضروری ہے۔',
    'email' => ':attribute ایک درست ای میل ہونی چاہیے۔',
];
```

## Example: Updating Welcome View

Here's how you might update your `welcome.blade.php`:

```blade
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <title>@lang('messages.welcome')</title>
    </head>
    <body>
        <!-- Language Switcher -->
        <x-language-switcher />

        <!-- Navigation -->
        <nav>
            <a href="/">@lang('messages.home')</a>
            <a href="/about">@lang('messages.about')</a>
            <a href="/crops">@lang('messages.crops')</a>
        </nav>

        <!-- Main Content -->
        <h1>@lang('messages.welcome')</h1>
    </body>
</html>
```

## Checking Current Locale in Code

```php
// Get current locale
$currentLocale = app()->getLocale();

// Check if Urdu
if (app()->getLocale() === 'ur') {
    // Do something for Urdu
}

// In Blade
@if(app()->getLocale() === 'ur')
    <p dir="rtl">@lang('messages.welcome')</p>
@else
    <p>@lang('messages.welcome')</p>
@endif
```

## Tips and Best Practices

1. **Use Translation Keys**: Always use keys (like `messages.welcome`) instead of hardcoding text
2. **Be Consistent**: Use the same key names across your application
3. **Group Related Translations**: Keep related translations in the same file
4. **Use Namespacing**: For complex apps, use nested keys:
   ```php
   'user' => [
       'profile' => 'User Profile',
       'settings' => 'User Settings',
   ]
   ```
5. **Test Both Languages**: Always test your UI in both English and Urdu
6. **Consider RTL CSS**: Update your CSS to handle RTL layouts for Urdu

## Adding More Languages in the Future

To add another language (e.g., Punjabi - `pa`):

1. Create directories: `resources/lang/pa/`
2. Create translation files: `resources/lang/pa/messages.php`, etc.
3. Update the supported locales in:
   - `LanguageController::switch()` - add `'pa'` to `$supportedLocales`
   - `SetLocale` middleware - add `'pa'` to the validation check
4. Update `.env.example` with the new locale
5. Add a button to the language switcher component

## Troubleshooting

### Translations Not Showing

1. Check if the translation file exists in the correct path
2. Verify the key exists in the translation file
3. Check that the middleware is registered in `bootstrap/app.php`
4. Clear Laravel cache: `php artisan cache:clear`

### Language Not Switching

1. Verify session is working: `session()->put('locale', 'ur');`
2. Check that the `SetLocale` middleware is running
3. Verify the language switcher links point to correct routes
4. Check that supported locales are listed in both `LanguageController` and `SetLocale`

### RTL Not Working

1. Add `dir="rtl"` to the appropriate HTML elements
2. Update CSS to support right-to-left layout:
   ```css
   [dir="rtl"] { text-align: right; margin-right: 10px; }
   [dir="ltr"] { text-align: left; margin-left: 10px; }
   ```

## Resources

- [Laravel Localization Documentation](https://laravel.com/docs/localization)
- [HTML dir Attribute](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/dir)
- [Urdu Unicode](https://en.wikipedia.org/wiki/Urdu_alphabets_and_numerals)
