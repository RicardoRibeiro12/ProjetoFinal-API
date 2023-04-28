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
        Schema::create('sensores_cultura', function (Blueprint $table) {
            $table->id();        
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')
                  ->references('id')
                  ->on('sensors')->onDelete('cascade');
            $table->unsignedBigInteger('cultura_id');
            $table->foreign('cultura_id')
                  ->references('id')
                  ->on('culturas')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('sensores_cultura');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    
    }
};
