<?php

if (!function_exists('current_language')) {
    function current_language(): string
    {
        return session('language', 'en') === 'ur' ? 'ur' : 'en';
    }
}

if (!function_exists('is_urdu')) {
    function is_urdu(): bool
    {
        return current_language() === 'ur';
    }
}

if (!function_exists('t')) {
    function t(string $english, string $urdu): string
    {
        return is_urdu() ? $urdu : $english;
    }
}


if (!function_exists('auth_text')) {
    function auth_text($text): string
    {
        $text = (string) $text;
        if (!is_urdu() || $text === '') return $text;

        $map = [
            'Please enter a password.' => 'براہِ کرم پاس ورڈ درج کریں۔',
            'Please enter a new password.' => 'براہِ کرم نیا پاس ورڈ درج کریں۔',
            'Password must be at least 8 characters long.' => 'پاس ورڈ کم از کم 8 حروف پر مشتمل ہونا چاہیے۔',
            'Password must contain at least one special character.' => 'پاس ورڈ میں کم از کم ایک خصوصی علامت شامل ہونی چاہیے۔',
            'Password confirmation does not match.' => 'پاس ورڈ کی تصدیق مماثل نہیں ہے۔',
            'OTP sent successfully.' => 'او ٹی پی کامیابی سے بھیج دیا گیا ہے۔',
            'Verification request not found.' => 'تصدیق کی درخواست نہیں ملی۔',
            'Registration Successful.' => 'رجسٹریشن کامیابی سے مکمل ہو گئی ہے۔',
            'Your account is inactive.' => 'آپ کا اکاؤنٹ غیر فعال ہے۔',
            'Google Login Failed.' => 'گوگل کے ذریعے داخلہ ناکام ہو گیا۔',
            'Password reset link has been sent to your email.' => 'پاس ورڈ دوبارہ ترتیب دینے کا لنک آپ کے ای میل پتے پر بھیج دیا گیا ہے۔',
            'We could not find an account with this email address.' => 'اس ای میل پتے سے کوئی اکاؤنٹ نہیں ملا۔',
        ];

        return $map[$text] ?? 'براہِ کرم درج کردہ معلومات درست کریں اور دوبارہ کوشش کریں۔';
    }
}

if (!function_exists('local_text')) {
    function local_text($model, string $field): string
    {
        if (!$model) return '';

        $value = (string) ($model->{$field} ?? '');
        if (!is_urdu()) return $value;

        $fixed = [
            'vegetable' => 'سبزی',
            'fruit' => 'پھل',
            'grain' => 'اناج',
            'summer' => 'موسم گرما',
            'winter' => 'موسم سرما',
            'rabi' => 'ربیع',
            'kharif' => 'خریف',
            'indoor' => 'اندرونی',
            'outdoor' => 'بیرونی',
        ];

        $fixedKey = strtolower(trim($value));
        if (in_array($field, ['type','category','season'], true) && isset($fixed[$fixedKey])) {
            return $fixed[$fixedKey];
        }

        $urduValue = trim((string) ($model->{$field . '_ur'} ?? ''));

        return str_replace(['\\r\\n', '\\n'], ["\n", "\n"], $urduValue);
    }
}
