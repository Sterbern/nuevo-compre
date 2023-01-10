<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {

            $table->engine="InnoDB"; 
            $table->id();
            $table->string('cuit');
            $table->string('razon_social', 60);            
            $table->string('localidad');
            $table->string('telefono');
            $table->string('email')->nullable();
            $table->date('fec_ven');
            $table->text('productos');
            $table->string('chapa_sticker')->nullable();
            $table->bigInteger('id_tipo')->unsigned();
            $table->tinyInteger('nuevo')->default(1);
            $table->date('fec_reg');
            $table->tinyInteger('estatus')->default(1);
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('id_tipo')->references('id')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
};
