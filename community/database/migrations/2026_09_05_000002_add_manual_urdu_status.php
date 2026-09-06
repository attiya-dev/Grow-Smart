<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        foreach (['crops', 'crop_details', 'pest_managements'] as $tableName) {
            DB::statement("ALTER TABLE `{$tableName}` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        }

        if (!Schema::hasColumn('crops', 'urdu_completed')) {
            Schema::table('crops', function (Blueprint $table) {
                $table->boolean('urdu_completed')->default(false)->after('name_ur');
            });
        }

        if (!Schema::hasColumn('crop_details', 'urdu_completed')) {
            Schema::table('crop_details', function (Blueprint $table) {
                $table->boolean('urdu_completed')->default(false)->after('importance_of_crop_ur');
            });
        }

        if (!Schema::hasColumn('pest_managements', 'urdu_completed')) {
            Schema::table('pest_managements', function (Blueprint $table) {
                $table->boolean('urdu_completed')->default(false)->after('recommended_control_ur');
            });
        }

    }

    public function down(): void
    {
        foreach (['crops', 'crop_details', 'pest_managements'] as $tableName) {
            if (Schema::hasColumn($tableName, 'urdu_completed')) {
                Schema::table($tableName, function (Blueprint $table) {
                    $table->dropColumn('urdu_completed');
                });
            }
        }
    }
};
