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
        Schema::create('movimiento_detalle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained(table:'producto', indexName:'fk_movimientod_pr');
            $table->foreignId('movimiento_id')->constrained(table:'movimiento', indexName:'fk_movimientosd_mo');
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
        Schema::dropIfExists('movimiento_detalle');
    }
};
