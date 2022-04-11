<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsertionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insertion_details', function (Blueprint $table) {
            $table->id();
            $table->integer('proprietari');
            $table->char('cambio',255);
            $table->char('vernice',255);
            $table->char('rivestimenti',255);
            $table->integer('posti');
            $table->integer('porte');
            $table->text('consumi');
            $table->text('emissioni');
            $table->text('equipaggiamento');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insertion_details');
    }
}
