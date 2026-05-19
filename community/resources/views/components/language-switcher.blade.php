<!-- Language Switcher Component -->
<div class="language-switcher btn-group" role="group">
    <a href="{{ route('language.switch', 'en') }}" 
       class="btn btn-sm {{ app()->getLocale() === 'en' ? 'btn-light' : 'btn-outline-light' }}"
       title="Switch to English">
        English
    </a>
    <a href="{{ route('language.switch', 'ur') }}" 
       class="btn btn-sm {{ app()->getLocale() === 'ur' ? 'btn-light' : 'btn-outline-light' }}"
       title="اردو میں تبدیل کریں">
        اردو
    </a>
</div>
