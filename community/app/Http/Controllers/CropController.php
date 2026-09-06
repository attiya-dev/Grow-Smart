<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use App\Models\CropDetail;

class CropController extends Controller
{
    private function cropsQuery()
    {
        $query = Crop::query();

        if (is_urdu()) {
            $query->where('urdu_completed', true)
                ->whereNotNull('name_ur')
                ->where('name_ur', '!=', '');
        }

        return $query;
    }

    public function grid()
    {
        $summerCrops = $this->cropsQuery()->where('season', 'summer')->get();
        $winterCrops = $this->cropsQuery()->where('season', 'winter')->get();

        return view('front.grid', compact('summerCrops', 'winterCrops'));
    }

    public function garden()
    {
        $summerCrops = $this->cropsQuery()->where('season', 'summer')->get();
        $winterCrops = $this->cropsQuery()->where('season', 'winter')->get();

        return view('front.garden', compact('summerCrops', 'winterCrops'));
    }

    public function summer()
    {
        $summerCrops = $this->cropsQuery()->where('season', 'summer')->get();
        return view('front.summer', compact('summerCrops'));
    }

    public function winter()
    {
        $winterCrops = $this->cropsQuery()->where('season', 'winter')->get();
        return view('front.winter', compact('winterCrops'));
    }

    public function grains()
    {
        $crops = $this->cropsQuery()->where('category', 'grain')->get();
        return view('front.grains', compact('crops'));
    }

    public function fruit()
    {
        $crops = $this->cropsQuery()->where('category', 'fruit')->get();
        return view('front.fruit', compact('crops'));
    }

    public function vegetable()
    {
        $crops = $this->cropsQuery()->where('category', 'vegetable')->get();
        return view('front.vegetable', compact('crops'));
    }

    public function show(int $id)
    {
        $crop = Crop::findOrFail($id);

        if (is_urdu() && !$crop->urdu_completed) {
            abort(404);
        }

        $cropDetail = CropDetail::where('crop_id', $id)->first();

        if (!$cropDetail) {
            abort(404);
        }

        if (is_urdu() && !$cropDetail->urdu_completed) {
            abort(404);
        }

        return view('front.crop-detail', compact('crop', 'cropDetail'));
    }

    public function pest(int $id)
    {
        $crop = Crop::findOrFail($id);

        if (is_urdu() && !$crop->urdu_completed) {
            abort(404);
        }

        $crop->load(['pestManagements' => function ($query) {
            if (is_urdu()) {
                $query->where('urdu_completed', true);
            }
        }]);

        return view('front.pest-detail', compact('crop'));
    }
}
