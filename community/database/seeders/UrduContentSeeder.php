<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UrduContentSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UrduCropSeeder::class,
            UrduPestSeeder::class,
        ]);
    }
}
