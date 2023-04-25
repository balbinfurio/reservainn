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
            $table->integer('x2_cost_price')->nullable()->default(0)->after('x1_public_price');
            $table->integer('x2_public_price')->nullable()->default(0)->after('x2_cost_price');
            $table->integer('x4_cost_price')->nullable()->default(0)->after('x3_public_price');
            $table->integer('x4_public_price')->nullable()->default(0)->after('x4_cost_price');
            $table->integer('x5_cost_price')->nullable()->default(0)->after('x4_public_price');
            $table->integer('x5_public_price')->nullable()->default(0)->after('x5_cost_price');
            $table->integer('x6_cost_price')->nullable()->default(0)->after('x5_public_price');
            $table->integer('x6_public_price')->nullable()->default(0)->after('x6_cost_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('x2_cost_price');
            $table->dropColumn('x2_public_price');
            $table->dropColumn('x4_cost_price');
            $table->dropColumn('x4_public_price');
            $table->dropColumn('x5_cost_price');
            $table->dropColumn('x5_public_price');
            $table->dropColumn('x6_cost_price');
            $table->dropColumn('x6_public_price');
        });
    }
};
