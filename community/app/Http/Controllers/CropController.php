<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use App\Models\CropDetail;
use Illuminate\Http\Request;

class CropController extends Controller
{
  
    public function grid()
    {
        $summerCrops = Crop::where(
            'season',
            'summer'
        )->get();

        $winterCrops = Crop::where(
            'season',
            'winter'
        )->get();

        return view(
            'front.grid',
            compact(
                'summerCrops',
                'winterCrops'
            )
        );
    }

    public function garden()
    {
        $summerCrops = Crop::where(
            'season',
            'summer'
        )->get();

        $winterCrops = Crop::where(
            'season',
            'winter'
        )->get();

        return view(
            'front.garden',
            compact(
                'summerCrops',
                'winterCrops'
            )
        );
    }

 
    public function summer()
    {
        $summerCrops = Crop::where(
            'season',
            'summer'
        )->get();

        return view(
            'front.summer',
            compact('summerCrops')
        );
    }

    public function winter()
    {
        $winterCrops = Crop::where(
            'season',
            'winter'
        )->get();

        return view(
            'front.winter',
            compact('winterCrops')
        );
    }

    public function grains()
    {
        $crops = Crop::where(
            'category',
            'grain'
        )->get();

        return view(
            'front.grains',
            compact('crops')
        );
    }

    public function fruit()
    {
        $crops = Crop::where(
            'category',
            'fruit'
        )->get();

        return view(
            'front.fruit',
            compact('crops')
        );
    }

    public function vegetable()
    {
        $crops = Crop::where(
            'category',
            'vegetable'
        )->get();

        return view(
            'front.vegetable',
            compact('crops')
        );
    }

    public function show(int $id)
    {
        $crop = Crop::findOrFail($id);

        $cropDetail = CropDetail::where(
            'crop_id',
            $id
        )->first();

        return view(
            'front.crop-detail',
            compact(
                'crop',
                'cropDetail'
            )
        );
    }
    public function pest(int $id)
    {
        $crop = Crop::with(
            'pestManagements'
        )->findOrFail($id);

        return view(
            'front.pest-detail',
            compact('crop')
        );
    }
}
