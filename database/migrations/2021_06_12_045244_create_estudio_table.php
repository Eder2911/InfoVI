<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudio', function (Blueprint $table) {
            $table->id('idEstudio');
            $table->char('tipo', 3);
            $table->date('fechaRealizacion'); //Tipo Date
            $table->char('asistencia', 1)->nullable();
            $table->date('fechaEntrega')->nullable();
            $table->date('fechaProximo')->nullable();
            $table->date('fechaRevision')->nullable();
            $table->string('resultado', 100)->nullable();
            $table->char('documento', 1)->nullable(); //tipo archivo no encontré en la documentación de laravel :S
            $table->timestamps(); //Debemos agregarlalo en el diagrama?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudio');
    }
}
