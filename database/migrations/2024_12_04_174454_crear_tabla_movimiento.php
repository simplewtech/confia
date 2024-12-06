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
        Schema::create('movimiento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_movimiento_id')->constrained(table:'tipo_movimiento', indexName:'fk_tipom_mv')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('persona_id')->constrained(table:'persona', indexName:'fk_persona_mv')->onDelete('cascade')->onUpdate('restrict');
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
        Schema::dropIfExists('movimiento');
    }
};
