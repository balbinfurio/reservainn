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
        Schema::table('agencies', function (Blueprint $table) {
            $table->string('phone_op')->nullable()->after('phone');
            $table->string('mail_op')->nullable()->after('mail');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('agencies', function (Blueprint $table) {
            $table->dropColumn('phone_op');
            $table->dropColumn('mail_op');
        });
    }
};
