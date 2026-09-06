<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TranslateUrduOffline extends Command
{
    protected $signature = 'urdu:translate-offline';
    protected $description = 'Automatic crop and pest translation is disabled; Urdu content must be entered manually.';

    public function handle(): int
    {
        $this->warn('Automatic Urdu translation is disabled. Add crop and pest Urdu content through the Admin Dashboard.');
        return self::SUCCESS;
    }
}
