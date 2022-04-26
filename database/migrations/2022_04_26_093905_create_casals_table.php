<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casals', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('data_inici');
            $table->date('data_final');
            $table->integer('n_places');
            $table->unsignedBigInteger('id_ciutat');
            $table->timestamps();
            $table->foreign('id_ciutat')->references('id')->on('ciutats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casals');
    }
}
