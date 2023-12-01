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
        Schema::create('clientes', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('empresa_id')->unsigned();
            $table->string('nombre');
            $table->bigInteger('tipo_id')->unsigned();
            $table->bigInteger('ciudad_id')->unsigned();
            $table->bigInteger('depa_id')->unsigned();
            $table->string('cupo_credito');
            $table->bigInteger('saldo');
            $table->bigInteger('pagos');
            $table->bigInteger('compras');
            $table->timestamps();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('tclientes')->onDelete('cascade');
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->foreign('depa_id')->references('id')->on('departamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
