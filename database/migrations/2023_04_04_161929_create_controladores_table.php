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
        Schema::create('controladores', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->ipAddress('Ip');
            $table->unsignedBigInteger('id_gateway');
            $table->timestamps();

            $table->foreign('id_gateway')->references('id')->on('gateways');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('controladores');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
      
    }
};
