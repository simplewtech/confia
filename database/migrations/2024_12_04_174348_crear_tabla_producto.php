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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('familia_id')->constrained(table:'familia', indexName:'fk_familia_pr')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('ubicacion_id')->constrained(table:'ubicacion', indexName:'fk_ubicacion_pr')->onDelete('cascade')->onUpdate('restrict');
            $table->string('nombre', 100);
            $table->string('codigo', 20);
            $table->bigInteger('valor_venta');
            $table->bigInteger('valor_compra');
            $table->bigInteger('iva');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
