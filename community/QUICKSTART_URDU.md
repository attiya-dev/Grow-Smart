# Quick Start: Using Urdu Language Support

## 🚀 Get Started in 3 Steps

### Step 1: Add Language Switcher to Your Layout

In any Blade template (e.g., `resources/views/layouts/app.blade.php`):

```blade
<x-language-switcher />
```

### Step 2: Use Translations in Your Views

Replace hardcoded text with translation keys:

```blade
<!-- Before -->
<h1>Welcome</h1>
<button>Submit</button>

<!-- After -->
<h1>@lang('messages.welcome')</h1>
<button>@lang('messages.submit')</button>
```

### Step 3: Test It!

1. Click the language switcher to switch between English and Urdu
2. The page should display in the selected language

## 🔤 Common Translation Functions

```blade
<!-- Using __() helper -->
{{ __('messages.welcome') }}

<!-- Using @lang directive -->
@lang('messages.welcome')

<!-- With parameters -->
{{ __('messages.greeting', ['name' => 'Ahmed']) }}
```

## 📝 Adding New Translations

Add to `resources/lang/en/messages.php`:
```php
'my_key' => 'My English text',
```

Add to `resources/lang/ur/messages.php`:
```php
'my_key' => 'میرا اردو متن',
```

Use in views:
```blade
{{ __('messages.my_key') }}
```

## 📱 Making Urdu Display Correctly

Add `dir="rtl"` to containers holding Urdu text:

```blade
@if(app()->getLocale() === 'ur')
    <div dir="rtl">
        @lang('messages.welcome')
    </div>
@else
    <div>
        @lang('messages.welcome')
    </div>
@endif
```

## 🔗 Language Switcher Buttons

Manual approach (if not using component):

```blade
<a href="{{ route('language.switch', 'en') }}">English</a>
<a href="{{ route('language.switch', 'ur') }}">اردو</a>
```

## 💾 Make Language Choice Persistent

Edit `app/Http/Controllers/LanguageController.php` and uncomment the cookie line to make language selection persist across browser sessions.

## ✅ Check Current Language

```blade
@if(app()->getLocale() === 'ur')
    <!-- Show Urdu version -->
@else
    <!-- Show English version -->
@endif

<!-- Or use this to get the locale -->
Current: {{ app()->getLocale() }}
```

## 📚 Translation Files Location

- English: `resources/lang/en/messages.php`
- Urdu: `resources/lang/ur/messages.php`

Add more translation files as needed in these directories!

## 🆘 Quick Troubleshooting

**Translations showing as "messages.welcome"?**
- Translation key doesn't exist - check spelling in messages.php

**Language not switching?**
- Clear cache: `php artisan cache:clear`
- Check that middleware is in `bootstrap/app.php`

**Urdu text not aligned properly?**
- Add `dir="rtl"` to the container
- Update CSS for right-to-left support

---

That's it! You now have full Urdu language support. 🎉

See `LANGUAGE_SUPPORT.md` for detailed documentation.
