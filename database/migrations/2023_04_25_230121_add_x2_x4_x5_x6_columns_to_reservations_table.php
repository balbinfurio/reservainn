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
        Schema::table('reservations', function (Blueprint $table) {
            $table->tinyInteger('x2')->nullable()->default(0)->after('x1');
            $table->tinyInteger('x4')->nullable()->default(0)->after('x3');
            $table->tinyInteger('x5')->nullable()->default(0)->after('x4');
            $table->tinyInteger('x6')->nullable()->default(0)->after('x5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('x2');
            $table->dropColumn('x4');
            $table->dropColumn('x5');
            $table->dropColumn('x6');
        });
    }
};
