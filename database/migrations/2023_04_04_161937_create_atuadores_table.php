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
        Schema::create('atuadores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_controlador');
            $table->string('type');
            $table->string('descricao');
            $table->string('port');
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
        Schema::dropIfExists('atuadores');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
};
