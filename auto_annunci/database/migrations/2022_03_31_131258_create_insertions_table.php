<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsertionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insertions', function (Blueprint $table) {
            $table->id();
            $table->char('stato',255);
            $table->char('titolo',255);
            $table->decimal('prezzo',10,2);
            $table->bigInteger('chilometraggio');
            $table->date('immatricolazione');
            $table->bigInteger('potenza');
            $table->char('cilindrata',255);
            $table->char('colore',255);
            $table->char('alimentazione',255);
            $table->char('carrozzeria',255);
            $table->text('descrizione');
            $table->char('indirizzo',255);
            $table->timestamps();
            $table->bigInteger('user_id');
            $table->bigInteger('modello_id');
            $table->bigInteger('comune_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('modello_id')->references('id')->on('car_models');
            $table->foreign('comune_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insertions');
    }
}
