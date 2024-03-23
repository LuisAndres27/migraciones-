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
        Schema::create('camion', function (Blueprint $table) {
            $table->id("id_camion");
            $table -> string ("placa",8);
            $table -> string ("codigo_interno",8);
            $table -> string ("color", 35);
            $table -> date ("modelo");
            $table -> string ("capacidad_toneladas",45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camion');
    }
};
