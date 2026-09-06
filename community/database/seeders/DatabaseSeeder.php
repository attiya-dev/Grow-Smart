<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    
    public function run(): void
    {
         $this->call([
            CropSeeder::class,
            CropDetailSeeder::class,
            CropDetail1Seeder::class,
            CropDetail2Seeder::class,
            CropDetail3Seeder::class,
            CropDetail4Seeder::class,
            CropDetail5Seeder::class,
            PestSeeder::class,
            Pest1Seeder::class,
            Pest2Seeder::class,
            Pest3Seeder::class,
            Pest4Seeder::class,
            Pest5Seeder::class,
            UrduCropSeeder::class,
            UrduPestSeeder::class,

        ]);
    }
}
