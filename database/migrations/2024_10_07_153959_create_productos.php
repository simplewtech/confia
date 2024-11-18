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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('familias_id');
            $table->foreign('ubicaciones_id', 'fk_productos_fm')->references('id')->on('familias')->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('ubicaciones_id');
            $table->foreign('ubicaciones_id', 'fk_productos_ub')->references('id')->on('ubicaciones')->onDelete('cascade')->onUpdate('restrict');
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
        Schema::dropIfExists('productos');
    }
};
