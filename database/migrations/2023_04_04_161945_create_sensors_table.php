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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_controlador');
            $table->string('type');
            $table->string('port');
            $table->string('descricao');
            $table->timestamps();
            

            $table->foreign('id_controlador')->references('id')->on('controladores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('sensors');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
     
    }
};
