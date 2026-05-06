<?php

namespace App\Http\Controllers;
use App\Models\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function grid()
{
    $summerCrops = Crop::where('season', 'summer')->get();
    $winterCrops = Crop::where('season', 'winter')->get();

    return view('grid', compact('summerCrops', 'winterCrops'));
}
   public function garden()
{
    $summerCrops = Crop::where('season', 'summer')->get();
    $winterCrops = Crop::where('season', 'winter')->get();

    return view('garden', compact('summerCrops', 'winterCrops'));
}
 public function summer()
{
    $summerCrops = Crop::where('season', 'summer')->get();

    return view('summer', compact('summerCrops'));
}
public function winter()
{
    $winterCrops = Crop::where('season', 'winter')->get();
    return view('winter', compact('winterCrops'));
}
public function grains()
{
    $crops = Crop::whereIn('name', ['Rice', 'Maize (Corn)','Sorghum', 'Pearl Millet', 'Mung', 'Soyabean', 'Groundnut','Wheat', 'Barley','Rapaseed', 'Canola', 'Tobacco', 'Lucerne', 'Linseed', 'Sunflower', 'Isabgol'])->get();
    return view('grains', compact('crops'));
}
public function fruit()
{
    $crops = Crop::whereIn('name', ['Banana', 'Mango', 'Lychee', 'Watermelon', 'Melon', 'Guava', 'Papaya', 'Peaches','Oranges','Kinnow','Lemons','GrapeFruits','Sweet Limes','Pomegranates','Apples','Dates'])->get();
    return view('fruit', compact('crops'));
}
public function vegetable()
{
    $crops = Crop::whereIn('name', ['Bottle Gourd', 'Okra', 'Tomatoes', 'Pumpkin', 'Bitter Gourd', 'Cucumber', 'Eggplant (Brinjal)','Chillies','Arum','Ginger','Turmeric','Fenugreek (Methi)','Potato','Spinach','Peas','Carrots','Onions','Cauliflower','Cabbage','Radish','Beans','Lettuce','Garlic','Beetroot','Turnips','Coriander','Broccoli','Mint','Fennel'])->get();
    return view('vegetable', compact('crops'));
}
public function dashboard()
{
    $crops = Crop::whereIn('name', ['Wheat', 'Rice', 'Cotton', 'SugarCane', 'Mustard', 'SunFlower', 'Pumpkin','Cucumber'])->get();
    return view('/', compact('crops'));
}
}
