<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('business_days')->nullable()->after('address');
            $table->string('business_hours')->nullable()->after('business_days');
            $table->text('google_maps_embed')->nullable()->after('business_hours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'business_days',
                'business_hours',
                'google_maps_embed',
            ]);
        });
    }
};
