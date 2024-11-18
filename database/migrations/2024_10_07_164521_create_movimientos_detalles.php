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
        Schema::create('movimientos_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movimientos_id');
            $table->unsignedBigInteger('productos_id');
            $table->foreign('movimientos_id', 'fk_movimientosd_mo')->references('id')->on('movimientos')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('productos_id', 'fk_movimientosd_pr')->references('id')->on('productos')->onDelete('cascade')->onUpdate('restrict');
            $table->string('nombre', 100);
            $table->bigInteger('cantidad');
            $table->bigInteger('valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos_detalles');
    }
};
