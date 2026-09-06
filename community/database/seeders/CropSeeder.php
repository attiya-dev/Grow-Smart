<?php

namespace Database\Seeders;

use App\Models\Crop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropSeeder extends Seeder
{
    
    public function run(): void
    {
      
        Crop::create([
            'name' => 'Rice',
            'image' => 'rice.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Maize (Corn)',
            'image' => 'corn.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Sorghum',
            'image' => 'sorghum.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Pearl Millet',
            'image' => 'pearl.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Wheat',
            'image' => 'wheat.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Barley',
            'image' => 'barley.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Linseed',
            'image' => 'linseed.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);


        Crop::create([
            'name' => 'Bottle Gourd',
            'image' => 'bottle.jpg',
            'season' => 'summer',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Okra',
            'image' => 'okra.jpg',
            'season' => 'summer',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Tomato',
            'image' => 'tomatoes.jpg',
            'season' => 'summer',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Pumpkin',
            'image' => 'pumpkin.jpg',
            'season' => 'summer',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Bitter Gourd',
            'image' => 'bitter.jpg',
            'season' => 'summer',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Turmeric',
            'image' => 'tumeric.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Cucumber',
            'image' => 'cucumber.jpg',
            'season' => 'summer',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'EggPlant(Brinjal)',
            'image' => 'egg.jpg',
            'season' => 'summer',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Chilli',
            'image' => 'chilies.jpg',
            'season' => 'summer',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Arum',
            'image' => 'arum.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Ginger',
            'image' => 'ginger.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Potato',
            'image' => 'potato.jpg',
            'season' => 'winter',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Spinach',
            'image' => 'spinach.jpg',
            'season' => 'winter',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Pea',
            'image' => 'peas.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Carrot',
            'image' => 'carrots.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Onion',
            'image' => 'onion.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'CauliFlower',
            'image' => 'flower.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Cabbage',
            'image' => 'cabbage.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Radish',
            'image' => 'radish.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Bean',
            'image' => 'beans.jpg',
            'season' => 'winter',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Lettuce',
            'image' => 'lettuce.jpg',
            'season' => 'winter',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Garlic',
            'image' => 'garlic.jpg',
            'season' => 'winter',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Beetroot',
            'image' => 'beetroot.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Turnip',
            'image' => 'turnips.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Coriander',
            'image' => 'coriander.jpg',
            'season' => 'winter',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Broccoli',
            'image' => 'broccoli.jpg',
            'season' => 'winter',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Mint',
            'image' => 'mint.jpg',
            'season' => 'winter',
            'type' => 'indoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Fennel',
            'image' => 'fennel.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'Banana',
            'image' => 'banana.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Mango',
            'image' => 'mango.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Lychee',
            'image' => 'lychee.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Watermelon',
            'image' => 'watermelon.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Melon',
            'image' => 'melon.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Guava',
            'image' => 'guava.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Papaya',
            'image' => 'papaya.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Peach',
            'image' => 'peaches.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Orange',
            'image' => 'orange.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Kinnow',
            'image' => 'kinnow.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Lemon',
            'image' => 'lemmon.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'GrapeFruit',
            'image' => 'grapefruit.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Sweet Lime',
            'image' => 'sweet.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Pomegranate',
            'image' => 'pomegranates.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Apple',
            'image' => 'apples.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Date',
            'image' => 'dates.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'fruit'
        ]);

        Crop::create([
            'name' => 'Cotton',
            'image' => 'cotton.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Sugarcane',
            'image' => 'Sugarcane.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Mung',
            'image' => 'mung.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Soybean',
            'image' => 'soybeans.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Groundnut',
            'image' => 'nut.jpg',
            'season' => 'summer',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Mustard',
            'image' => 'mustard.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Rapeseed',
            'image' => 'rapaseed.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Canola',
            'image' => 'canola.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Tobacco',
            'image' => 'tobacco.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Lucerne',
            'image' => 'lucerne.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Fenugreek(Methi)',
            'image' => 'methi.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'vegetable'
        ]);

        Crop::create([
            'name' => 'SunFlower',
            'image' => 'sunflower.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);

        Crop::create([
            'name' => 'Isabgol',
            'image' => 'isabgol.jpg',
            'season' => 'winter',
            'type' => 'outdoor',
            'category' => 'grain'
        ]);
    }
}
