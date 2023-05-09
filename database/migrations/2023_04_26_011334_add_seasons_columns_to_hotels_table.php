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
        Schema::table('hotels', function (Blueprint $table) {
            $table->date('season_start_1')->nullable()->default('2000-12-01')->after('kid_discount');
            $table->date('season_end_1')->nullable()->default('2000-12-02')->after('season_start_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('season_start_1');
            $table->dropColumn('season_end_1');
        });
    }
};
