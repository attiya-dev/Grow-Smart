# Urdu Language Support - Troubleshooting Guide

## Common Issues & Solutions

### Issue 1: "Translation key not found" or Key Shows as Plain Text

**Problem:** View shows `messages.welcome` instead of the translated text.

**Causes:**
- Translation key doesn't exist in language file
- Key name is misspelled
- Language file path is incorrect

**Solutions:**

1. **Check key spelling**
   ```blade
   <!-- Wrong -->
   {{ __('messages.welcom') }}  <!-- Missing 'e' -->
   
   <!-- Correct -->
   {{ __('messages.welcome') }}
   ```

2. **Verify key exists in translation files**
   ```php
   // resources/lang/en/messages.php - Check this file
   return [
       'welcome' => 'Welcome',  // Should exist
   ];
   ```

3. **Check file path is correct**
   ```
   resources/lang/en/messages.php
                    ↑↑ check these match your usage
   @lang('messages.welcome')
           ↑↑↑↑↑↑↑
   ```

4. **Clear cache**
   ```bash
   php artisan cache:clear
   ```

---

### Issue 2: Language Switcher Component Not Found

**Problem:** Error says `Component not found: language-switcher`

**Causes:**
- Component file doesn't exist
- File is in wrong location
- Blade compiler cache is stale

**Solutions:**

1. **Verify component file exists**
   ```
   Check: resources/views/components/language-switcher.blade.php
   ```

2. **Correct component path structure**
   ```bash
   ✓ CORRECT: resources/views/components/language-switcher.blade.php
   ✗ WRONG:   resources/views/language-switcher.blade.php
   ```

3. **Clear Blade cache**
   ```bash
   php artisan view:clear
   ```

4. **Restart Laravel server**
   ```bash
   # Stop with Ctrl+C
   php artisan serve
   ```

---

### Issue 3: Language Not Switching

**Problem:** Clicking language switcher doesn't change the language.

**Causes:**
- Middleware not registered
- SetLocale middleware has issues
- Session not working
- Route not working

**Solutions:**

1. **Verify middleware is registered in bootstrap/app.php**
   ```php
   // Check that this line exists:
   $middleware->web(append: \App\Http\Middleware\SetLocale::class);
   ```

2. **Verify route exists**
   ```bash
   # Run this to see all routes
   php artisan route:list | grep language
   
   # You should see: language.switch
   ```

3. **Test session is working**
   ```bash
   php artisan tinker
   >>> session()->put('test', 'value')
   >>> session()->get('test')
   # Should return 'value'
   ```

4. **Test locale directly in controller**
   ```php
   // Add to a route temporarily
   Route::get('/test-locale', function() {
       dd(app()->getLocale());
   });
   ```

5. **Clear caches and restart**
   ```bash
   php artisan cache:clear
   php artisan view:clear
   php artisan config:clear
   ```

---

### Issue 4: Urdu Text Displays as Boxes or Incorrect Characters

**Problem:** Urdu text shows as `□`, `?`, or wrong characters.

**Causes:**
- File encoding is not UTF-8
- HTML page doesn't declare UTF-8
- Font doesn't support Urdu

**Solutions:**

1. **Verify UTF-8 encoding in HTML head**
   ```html
   <!-- Add this to <head> if missing -->
   <meta charset="utf-8">
   ```

2. **Check translation file encoding is UTF-8**
   - Open `resources/lang/ur/messages.php`
   - Save as UTF-8 (not ANSI or UTF-16)
   - In VS Code: Bottom right → select "UTF-8"

3. **Verify Urdu text is correct in file**
   ```php
   // Check that Urdu characters are visible, not boxes
   'welcome' => 'خوش آمدید',  // Should see Urdu text
   ```

4. **Add Urdu-supporting font**
   ```css
   @import url('https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap');
   
   body {
       font-family: 'Scheherazade New', serif;
   }
   ```

---

### Issue 5: RTL (Right-to-Left) Layout Not Working

**Problem:** Urdu text is displayed but aligned left instead of right.

**Causes:**
- Missing `dir="rtl"` attribute
- CSS doesn't support RTL
- Direction attribute at wrong level

**Solutions:**

1. **Add direction to HTML tag**
   ```blade
   <!-- Check the top of your view -->
   <html lang="en" dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
   ```

2. **Add to content containers**
   ```blade
   <div dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
       {{ __('messages.welcome') }}
   </div>
   ```

3. **Add RTL CSS support**
   ```css
   [dir="rtl"] {
       text-align: right;
       direction: rtl;
   }
   
   [dir="ltr"] {
       text-align: left;
       direction: ltr;
   }
   
   /* For margins */
   [dir="rtl"] .button {
       margin-left: 0;
       margin-right: 10px;
   }
   
   [dir="ltr"] .button {
       margin-left: 10px;
       margin-right: 0;
   }
   ```

4. **Test in browser DevTools**
   - Open DevTools (F12)
   - Check HTML has `dir="rtl"` on `<html>` or container
   - Check CSS is being applied

---

### Issue 6: Language Switcher Links Appear But Don't Work

**Problem:** Buttons show but clicking them doesn't switch language.

**Causes:**
- Route not found (404 error)
- LanguageController doesn't exist
- Wrong route parameters

**Solutions:**

1. **Check if route exists**
   ```bash
   php artisan route:list | grep language
   ```
   Should show: `GET|HEAD /language/{locale}`

2. **Verify LanguageController exists**
   ```bash
   Check: app/Http/Controllers/LanguageController.php
   ```

3. **Check route uses correct controller**
   ```php
   // In routes/web.php
   Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');
   ```

4. **Test route directly**
   ```
   Visit: http://localhost:8000/language/en
   Should redirect back and keep language as English
   ```

5. **Check browser console for errors**
   - Press F12 to open DevTools
   - Check Console tab for JavaScript errors
   - Check Network tab - are requests failing?

---

### Issue 7: Middleware Not Running

**Problem:** Locale is set but middleware doesn't seem to be executing.

**Solutions:**

1. **Verify middleware in bootstrap/app.php**
   ```php
   $middleware->web(append: \App\Http\Middleware\SetLocale::class);
   ```

2. **Verify namespace is correct**
   ```php
   // Should be:
   \App\Http\Middleware\SetLocale::class
   // NOT:
   SetLocale::class
   ```

3. **Check middleware file exists**
   ```
   Check: app/Http/Middleware/SetLocale.php
   ```

4. **Add debugging to middleware temporarily**
   ```php
   public function handle(Request $request, Closure $next)
   {
       $locale = session()->get('locale') ?? config('app.locale');
       
       // Add this temporarily
       \Log::info('SetLocale middleware running. Locale: ' . $locale);
       
       app()->setLocale($locale);
       return $next($request);
   }
   ```
   Then check `storage/logs/laravel.log`

---

### Issue 8: Session Not Storing Language

**Problem:** Language changes temporarily but reverts when page refreshes.

**Causes:**
- Session driver not configured
- Session middleware not running
- Cookie settings

**Solutions:**

1. **Check .env session driver**
   ```bash
   # In .env, look for:
   SESSION_DRIVER=file  # or database, cookie, etc.
   ```

2. **Verify session files exist**
   ```bash
   # Check directory exists:
   storage/framework/sessions/
   ```

3. **Check session middleware is registered**
   ```php
   // This should be in bootstrap/app.php by default
   // Laravel includes this automatically in web middleware
   ```

4. **Enable cookies for persistence instead**
   ```php
   // Edit LanguageController.php
   // Uncomment this line:
   cookie()->queue('locale', $locale, 365 * 24 * 60);
   ```

---

### Issue 9: Translations Work Locally But Not on Production

**Problem:** Everything works on localhost but translations fail on server.

**Causes:**
- Cache not cleared on production
- File permissions
- Different PHP version
- Different encoding settings

**Solutions:**

1. **Clear all caches on production**
   ```bash
   php artisan cache:clear
   php artisan view:clear
   php artisan config:clear
   php artisan route:clear
   ```

2. **Check file permissions**
   ```bash
   # Make sure files are readable
   chmod 755 resources/lang/
   chmod 644 resources/lang/en/messages.php
   chmod 644 resources/lang/ur/messages.php
   ```

3. **Verify UTF-8 support on server**
   ```bash
   # SSH into server and run:
   php -i | grep -i "multibyte"
   ```

4. **Check .env on production**
   ```bash
   # Verify these exist in production .env:
   APP_LOCALE=en
   APP_FALLBACK_LOCALE=en
   ```

5. **Restart web server**
   ```bash
   # If using Apache/Nginx, restart:
   sudo systemctl restart apache2
   # or
   sudo systemctl restart nginx
   ```

---

### Issue 10: Forms Show Urdu But Submit in English

**Problem:** Form labels are translated but validation messages are not.

**Causes:**
- Validation messages file doesn't exist
- Wrong locale in validation

**Solutions:**

1. **Create validation translation files**
   ```php
   // resources/lang/en/validation.php
   return [
       'required' => 'The :attribute field is required.',
   ];
   
   // resources/lang/ur/validation.php
   return [
       'required' => ':attribute فیلڈ ضروری ہے۔',
   ];
   ```

2. **Use in controller validation**
   ```php
   $request->validate([
       'name' => 'required|string',
       'email' => 'required|email',
   ]);
   // Validation messages will use current locale
   ```

---

## Debugging Commands

### Check Current Locale
```bash
php artisan tinker
>>> app()->getLocale()
# Returns: 'en' or 'ur'
```

### Test Translation
```bash
php artisan tinker
>>> __('messages.welcome')
# Returns: 'Welcome' or 'خوش آمدید'
```

### Clear Everything
```bash
php artisan cache:clear
php artisan view:clear
php artisan config:clear
php artisan route:clear
```

### Check Routes
```bash
php artisan route:list | grep language
```

### View Logs
```bash
tail -f storage/logs/laravel.log
```

---

## Quick Fixes Checklist

If something is broken, try these in order:

- [ ] Restart Laravel server (`Ctrl+C`, then `php artisan serve`)
- [ ] Clear caches: `php artisan cache:clear`
- [ ] Clear views: `php artisan view:clear`
- [ ] Clear config: `php artisan config:clear`
- [ ] Check file exists at expected path
- [ ] Verify spelling of keys
- [ ] Check if using wrong locale code
- [ ] Verify middleware in bootstrap/app.php
- [ ] Test session: `php artisan tinker`
- [ ] Check browser cache (Ctrl+Shift+Delete)
- [ ] Restart browser completely
- [ ] Check browser DevTools for errors (F12)

---

## Still Having Issues?

1. **Check the log files**
   ```bash
   tail -100 storage/logs/laravel.log
   ```

2. **Run full diagnostics**
   ```bash
   php artisan tinker
   >>> dd(app()->getLocale());
   >>> dd(__('messages.welcome'));
   >>> dd(app('translator')->get('messages.welcome'));
   ```

3. **Verify all files exist**
   ```bash
   ls -la resources/lang/en/
   ls -la resources/lang/ur/
   ls -la app/Http/Controllers/LanguageController.php
   ls -la app/Http/Middleware/SetLocale.php
   ```

4. **Check Git status to see what changed**
   ```bash
   git status
   ```

5. **Review IMPLEMENTATION_CHECKLIST.md** to ensure all steps done

---

## Getting Help

1. Check `LANGUAGE_SUPPORT.md` for detailed reference
2. Check `QUICKSTART_URDU.md` for quick examples
3. Review `EXAMPLE_WELCOME_VIEW.blade.php` for implementation example
4. Read `IMPLEMENTATION_SUMMARY.md` for overview
5. Review this file for specific issues

If problem persists, add debug statements and check:
- Browser DevTools (F12) → Console and Network tabs
- `storage/logs/laravel.log` for PHP errors
- `.env` file settings
- File permissions
- UTF-8 encoding of files
