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
        /*Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });*/
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->date('fechanaci');
            $table->string('correo');
            $table->integer('activo');
            $table->unsignedBigInteger('id_departamento');
            $table->timestamps();
            $table->foreign('id_departamento')->references('id')->on('departamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
