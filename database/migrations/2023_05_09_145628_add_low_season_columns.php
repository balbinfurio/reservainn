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
            $table->integer('x1_low_season')->nullable()->default(0)->after('x1_high_season');
            $table->integer('x2_low_season')->nullable()->default(0)->after('x2_high_season');
            $table->integer('x3_low_season')->nullable()->default(0)->after('x3_high_season');
            $table->integer('x4_low_season')->nullable()->default(0)->after('x4_high_season');
            $table->integer('x5_low_season')->nullable()->default(0)->after('x5_high_season');
            $table->integer('x6_low_season')->nullable()->default(0)->after('x6_high_season');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('x1_low_season');
            $table->dropColumn('x2_low_season');
            $table->dropColumn('x3_low_season');
            $table->dropColumn('x4_low_season');
            $table->dropColumn('x5_low_season');
            $table->dropColumn('x6_low_season');
        });
    }
};
