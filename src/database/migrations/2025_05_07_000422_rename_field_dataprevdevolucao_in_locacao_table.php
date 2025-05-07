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
        Schema::table('locacoes', function (Blueprint $table) {
            $table->renameColumn('data_prev_devolucao', 'data_prevista_devolucao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('locacao', function (Blueprint $table) {
            $table->renameColumn('data_prevista_devolucao', 'data_prev_devolucao');
        });
    }
};
