<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->integer('x1_cost_price_low')->nullable()->default(0)->after('x1_cost_price_high');
            $table->integer('x2_cost_price_low')->nullable()->default(0)->after('x2_cost_price_high');
            $table->integer('x3_cost_price_low')->nullable()->default(0)->after('x3_cost_price_high');
            $table->integer('x4_cost_price_low')->nullable()->default(0)->after('x4_cost_price_high');
            $table->integer('x5_cost_price_low')->nullable()->default(0)->after('x5_cost_price_high');
            $table->integer('x6_cost_price_low')->nullable()->default(0)->after('x6_cost_price_high');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('x1_cost_price_low');
            $table->dropColumn('x2_cost_price_low');
            $table->dropColumn('x3_cost_price_low');
            $table->dropColumn('x4_cost_price_low');
            $table->dropColumn('x5_cost_price_low');
            $table->dropColumn('x6_cost_price_low');
        });
    }

};
