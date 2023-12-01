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
        Schema::create('facturas', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->date('fecha')->default(now());
            $table->bigInteger('tfactura_id')->unsigned();
            $table->bigInteger('cliente_id')->unsigned();
            $table->string('total');
            $table->bigInteger('descuento');
            $table->string('iva');
            $table->bigInteger('subtotal');
            $table->bigInteger('saldo');
            $table->bigInteger('estado');
            $table->timestamps();
            $table->foreign('tfactura_id')->references('id')->on('tfacturas')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
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