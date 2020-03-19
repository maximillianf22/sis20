<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cruce_id');
            $table->foreign('cruce_id')->references('id')->on('cruces');
            $table->string('tipo_grupo');
            $table->tinyInteger('principal');
            $table->string('lat');
            $table->string('long');
            $table->timestamps();
            $table->tinyInteger('estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
