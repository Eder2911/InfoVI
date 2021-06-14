<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 200);
            $table->date('fechaRealizacion'); //Tipo Date
            $table->char('asistencia', 1)->nullable();
            $table->date('fechaEntrega')->nullable();
            $table->date('fechaProximo')->nullable();
            $table->date('fechaRevision')->nullable();
            $table->string('resultado', 100)->nullable();
            $table->string('documento', 500)->nullable(); //tipo archivo no encontré en la documentación de laravel :S
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
        Schema::dropIfExists('estudios');
    }
}
