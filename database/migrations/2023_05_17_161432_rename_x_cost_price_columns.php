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
            $table->renameColumn('x1_cost_price', 'x1_cost_price_high');
            $table->renameColumn('x2_cost_price', 'x2_cost_price_high');
            $table->renameColumn('x3_cost_price', 'x3_cost_price_high');
            $table->renameColumn('x4_cost_price', 'x4_cost_price_high');
            $table->renameColumn('x5_cost_price', 'x5_cost_price_high');
            $table->renameColumn('x6_cost_price', 'x6_cost_price_high');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->renameColumn('x1_cost_price_high', 'x1_cost_price');
            $table->renameColumn('x2_cost_price_high', 'x2_cost_price');
            $table->renameColumn('x3_cost_price_high', 'x3_cost_price');
            $table->renameColumn('x4_cost_price_high', 'x4_cost_price');
            $table->renameColumn('x5_cost_price_high', 'x5_cost_price');
            $table->renameColumn('x6_cost_price_high', 'x6_cost_price');
        });
    }

};
