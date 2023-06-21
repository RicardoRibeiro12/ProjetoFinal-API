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
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sensor');
            $table->unsignedBigInteger('id_regra');
            $table->float('valor');
            $table->string('condicao');
            $table->timestamps();

            $table->foreign('id_sensor')->references('id')->on('sensors');
            $table->foreign('id_regra')->references('id')->on('regras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('conditions');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
