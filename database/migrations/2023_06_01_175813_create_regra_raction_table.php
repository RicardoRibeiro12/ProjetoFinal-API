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
        Schema::create('regra_raction', function (Blueprint $table) {
            $table->id();
            $table->integer('regra_id')->unsigned();

            $table->integer('raction_id')->unsigned();
        
            $table->foreign('regra_id')->references('id')->on('regras')
        
                ->onDelete('cascade');
        
            $table->foreign('raction_id')->references('id')->on('ractions')
        
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regra_raction');
    }
};
