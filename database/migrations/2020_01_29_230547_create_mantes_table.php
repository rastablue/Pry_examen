<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('dia_ingre');
            $table->datetime('dia_egre');
            $table->text('desc');
            $table->bigInteger('costo')->unsigned();
            $table->bigInteger('vehi_id')->unsigned();
            $table->bigInteger('estmante_id')->unsigned();
            $table->bigInteger('tipomantes_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantes');
    }
}
