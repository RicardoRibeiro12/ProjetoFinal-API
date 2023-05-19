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
        Schema::create('obs_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sensor');
            $table->float('valor');
            $table->string('unidade_medida');
            $table->timestamps();

            $table->foreign('id_sensor')->references('id')->on('sensors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('obs_data');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
};
