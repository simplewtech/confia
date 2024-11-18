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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_movimientos_id');
            $table->unsignedBigInteger('personas_id');
            $table->foreign('tipo_movimientos_id', 'fk_movimientos_tm')->references('id')->on('tipo_movimientos')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('personas_id', 'fk_movimientos_pe')->references('id')->on('personas')->onDelete('cascade')->onUpdate('restrict');
            $table->string('nombre', 100);
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
