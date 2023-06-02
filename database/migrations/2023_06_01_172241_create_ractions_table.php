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
        Schema::create('ractions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atuador_id');
            $table->string('descricao');
            $table->string('acao');
            $table->timestamps();

            $table->foreign('atuador_id')->references('id')->on('atuadores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ractions');
    }
};