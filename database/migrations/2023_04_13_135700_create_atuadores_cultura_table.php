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
        Schema::create('atuadores_cultura', function (Blueprint $table) {
            $table->id();        
            $table->unsignedBigInteger('id_atuador');
            $table->foreign('id_atuador')
                  ->references('id')
                  ->on('atuadores')->onDelete('cascade');
            $table->unsignedBigInteger('id_cultura');
            $table->foreign('id_cultura')
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
        Schema::dropIfExists('atuadores_cultura');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
};
