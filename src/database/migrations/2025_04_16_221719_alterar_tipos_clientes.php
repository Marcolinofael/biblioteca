<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterarTiposClientes extends Migration
{
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('cpf')->change();
            $table->string('celular')->change();
            $table->string('cep')->change();
            $table->string('numero')->change();
        });
    }

    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->integer('cpf')->change();
            $table->integer('celular')->change();
            $table->integer('cep')->change();
            $table->integer('numero')->change();
        });
    }
};
