<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\UrduTranslationService;
use App\Models\Crop;
use App\Models\CropDetail;
use App\Models\PestManagement;

class UrduAudit extends Command
{
    protected $signature = 'urdu:audit';
    protected $description = 'Check Urdu content for remaining English words';

    public function handle(UrduTranslationService $translator): int
    {
        $bad = 0;
        foreach (Crop::all() as $row) {
            foreach (['name_ur'] as $field) {
                if ($row->{$field} && $translator->hasEnglish($row->{$field})) {
                    $this->error("Crop {$row->id}: {$field}");
                    $bad++;
                }
            }
        }
        foreach (CropDetail::all() as $row) {
            foreach (['crop_name_ur','introduction_ur','basic_information_ur','sowing_season_ur','harvesting_season_ur','climate_requirements_ur','soil_requirements_ur','land_preparation_ur','seed_selection_ur','seed_rate_ur','irrigation_requirements_ur','fertilizer_requirements_ur','growing_stages_ur','types_of_crop_ur','crop_varieties_ur','nutritional_value_ur','importance_of_crop_ur'] as $field) {
                if ($row->{$field} && $translator->hasEnglish($row->{$field})) {
                    $this->error("CropDetail {$row->id}: {$field}");
                    $bad++;
                }
            }
        }
        foreach (PestManagement::all() as $row) {
            foreach (['crop_name_ur','name_ur','type_ur','how_it_occurs_ur','symptoms_ur','protection_ur','recommended_control_ur'] as $field) {
                if ($row->{$field} && $translator->hasEnglish($row->{$field})) {
                    $this->error("Pest {$row->id}: {$field}");
                    $bad++;
                }
            }
        }
        if ($bad === 0) $this->info('No English words found in stored Urdu crop and pest content.');
        else $this->warn("Found {$bad} fields containing English characters.");
        return $bad ? self::FAILURE : self::SUCCESS;
    }
}
