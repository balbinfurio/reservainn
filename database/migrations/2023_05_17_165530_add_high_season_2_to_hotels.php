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
            $table->date('season_start_2')->nullable()->default('2023-01-01')->after('season_end_1');
            $table->date('season_end_2')->nullable()->default('2023-01-02')->after('season_start_2');
            $table->date('season_start_3')->nullable()->default('2023-01-01')->after('season_end_2');
            $table->date('season_end_3')->nullable()->default('2023-01-02')->after('season_start_3');
            $table->date('season_start_4')->nullable()->default('2023-01-01')->after('season_end_3');
            $table->date('season_end_4')->nullable()->default('2023-01-02')->after('season_start_4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('season_start_2');
            $table->dropColumn('season_end_2');
            $table->dropColumn('season_start_3');
            $table->dropColumn('season_end_3');
            $table->dropColumn('season_start_4');
            $table->dropColumn('season_end_4');
        });
    }
};
