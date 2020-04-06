<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->timestamps();
            $table->bigInteger('hadiah_id')->unsigned()->nullable();
            $table->foreign('hadiah_id')
                    ->references('id')
                    ->on('hadiahs')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->bigInteger('poin_id')->unsigned()->nullable();
             $table->foreign('poin_id')
                    ->references('id')
                    ->on('poins')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masyarakats');
    }
}
