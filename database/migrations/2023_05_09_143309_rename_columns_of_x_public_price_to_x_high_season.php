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
            $table->renameColumn('x1_public_price', 'x1_high_season');
            $table->renameColumn('x2_public_price', 'x2_high_season');
            $table->renameColumn('x3_public_price', 'x3_high_season');
            $table->renameColumn('x4_public_price', 'x4_high_season');
            $table->renameColumn('x5_public_price', 'x5_high_season');
            $table->renameColumn('x6_public_price', 'x6_high_season');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->renameColumn('x1_high_season', 'x1_public_price');
            $table->renameColumn('x2_high_season', 'x2_public_price');
            $table->renameColumn('x3_high_season', 'x3_public_price');
            $table->renameColumn('x4_high_season', 'x4_public_price');
            $table->renameColumn('x5_high_season', 'x5_public_price');
            $table->renameColumn('x6_high_season', 'x6_public_price');
        });        
    }
};
