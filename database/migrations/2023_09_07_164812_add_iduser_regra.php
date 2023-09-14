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
        Schema::table('regras', function (Blueprint $table) {
            $table->foreignId('id_user')
              ->constrained('users')
              ->onDelete('cascade'); // or 'restrict', 'set null', etc.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('regras', function (Blueprint $table) {
            $table->dropForeign('regras_id_user_foreign');
            $table->dropColumn('id_user');
        });
    }
};
