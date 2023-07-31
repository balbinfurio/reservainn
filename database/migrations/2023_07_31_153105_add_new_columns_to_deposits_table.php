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
        Schema::table('deposits', function (Blueprint $table) {
            $table->integer('deposit_4')->nullable()->after('deposit_3');
            $table->integer('deposit_5')->nullable()->after('deposit_4');
            $table->integer('deposit_6')->nullable()->after('deposit_5');
            $table->integer('deposit_7')->nullable()->after('deposit_6');
            $table->integer('deposit_8')->nullable()->after('deposit_7');
            $table->integer('deposit_9')->nullable()->after('deposit_8');
            $table->integer('deposit_10')->nullable()->after('deposit_9');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('deposits', function (Blueprint $table) {
            $table->dropColumn(['deposit_4', 'deposit_5', 'deposit_6', 'deposit_7', 'deposit_8', 'deposit_9', 'deposit_10']);
        });
    }
};
