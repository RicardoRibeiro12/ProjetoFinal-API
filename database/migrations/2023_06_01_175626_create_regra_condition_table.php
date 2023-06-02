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
        Schema::create('regra_condition', function (Blueprint $table) {
            $table->id();
            $table->integer('regra_id')->unsigned();

            $table->integer('condition_id')->unsigned();
        
            $table->foreign('regra_id')->references('id')->on('regras')
        
                ->onDelete('cascade');
        
            $table->foreign('condition_id')->references('id')->on('conditions')
        
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regra_condition');
    }
};
