<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditTrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_trails', function (Blueprint $table) {
            $table->id();
            $table->date('fechaProceso'); //Tipo Date
            $table->char('accion', 1);
            $table->char('campo', 2);
            $table->string('valorAntiguo', 100);
            $table->string('valorNuevo', 100);
            $table->string('motivo', 100)->nullable();
            
          //  $table->foreignId('idEstudio')->constrained('estudio');
            //$table->foreignId('idOperador')->constrained('operador');

            //FK
          $table->foreignId('idE')->references('id')->on('estudios');
          $table->foreignId('idU')->references('id')->on('users');
            $table->timestamps();
            //Hay que buscar otra forma de meter las FK porque no me dejó :V
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {
        Schema::dropIfExists('audit_trails');
    }

}