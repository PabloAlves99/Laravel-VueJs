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
        Schema::table('users', function (Blueprint $table) {
            // Renomeia a coluna 'telefone' para 'phone'
            $table->renameColumn('telefone', 'phone');

            // Renomeia a coluna 'perfil' para 'profile'
            $table->renameColumn('perfil', 'profile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Reverte a renomeação de 'phone' para 'telefone'
            $table->renameColumn('phone', 'telefone');

            // Reverte a renomeação de 'profile' para 'perfil'
            $table->renameColumn('profile', 'perfil');
        });
    }
};
