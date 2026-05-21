<?php

namespace App\Http\Controllers;
use App\Models\Crop;
use App\Models\CropDetail;
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
    $crops = Crop::whereIn('name', ['Rice', 'Maize (Corn)','Sorghum', 'Pearl Millet', 'Mung', 'Soybean', 'Groundnut','Wheat', 'Barley','Rapeseed', 'Canola', 'Tobacco', 'Lucerne', 'Linseed', 'SunFlower', 'Isabgol'])->get();
    return view('grains', compact('crops'));
}
public function fruit()
{
    $crops = Crop::whereIn('name', ['Banana', 'Mango', 'Lychee', 'Watermelon', 'Melon', 'Guava', 'Papaya', 'Peach','Orange','Kinnow','Lemon','GrapeFruit','Sweet Lime','Pomegranate','Apple','Date'])->get();
    return view('fruit', compact('crops'));
}
public function vegetable()
{
    $crops = Crop::whereIn('name', ['Bottle Gourd', 'Okra', 'Tomato', 'Pumpkin', 'Bitter Gourd', 'Cucumber', 'EggPlant(Brinjal)','Chilli','Arum','Ginger','Turmeric','Fenugreek(Methi)','Potato','Spinach','Pea','Carrot','Onion','CauliFlower','Cabbage','Radish','Bean','Lettuce','Garlic','Beetroot','Turnip','Coriander','Broccoli','Mint','Fennel'])->get();
    return view('vegetable', compact('crops'));
}
 public function show(int $id)
{
     $crop = Crop::findOrFail($id);

    $cropDetail = CropDetail::where('crop_id', $id)->first();

   return view('crop-detail', compact('crop', 'cropDetail'));
}
}
