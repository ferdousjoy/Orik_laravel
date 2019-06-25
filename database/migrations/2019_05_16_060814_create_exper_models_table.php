<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exper_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('year');
            $table->string('maintitle');
            $table->string('detail');
            $table->string('maintitle2');
            $table->string('detail2');  
            $table->string('title2');
            $table->string('year2');
            $table->string('maintitle3');
            $table->string('detail3');
            $table->string('maintitle4');
            $table->string('detail4');
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
        Schema::dropIfExists('exper_models');
    }
}
