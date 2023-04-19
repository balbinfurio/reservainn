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
        Schema::create('reservations', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('reservation_number')->unique()->nullable(false);
            $table->date('purchase_date')->nullable();
            $table->unsignedBigInteger('agency_id')->nullable();
            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->string('client_name', 256)->nullable();
            $table->unsignedBigInteger('document_number')->nullable();
            $table->datetime('check_in')->nullable();
            $table->datetime('check_out')->nullable();          
            $table->string('season')->nullable();
            $table->string('email')->unique()->email()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
