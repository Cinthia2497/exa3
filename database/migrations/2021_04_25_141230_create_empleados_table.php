<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres',20);
            $table->string('Apellidos',50);
            $table->string('Cargo',50);
            $table->string('Salario',50);
            $table->string('Fechaingreso',50);
            $table->string('Fechasalida',50);
            $table->string('Motivosalida',50);
            $table->timestamps();
            $table->softdeletes();
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
