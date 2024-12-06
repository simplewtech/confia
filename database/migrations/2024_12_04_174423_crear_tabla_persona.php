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
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_persona_id')->constrained(table:'tipo_persona', indexName:'fk_tipop_persona')->onDelete('cascade')->onUpdate('restrict');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('documento', 20);
            $table->string('celular', 10);
            $table->string('email', 100);
            $table->string('password', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
