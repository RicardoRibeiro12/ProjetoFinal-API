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
        Schema::create('culturas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->float('latitude');
            $table->float('longitude');
            $table->timestamps();
            $table->unsignedBigInteger('id_user');

            
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('culturas');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
};
