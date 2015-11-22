<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlgasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alga', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('uuid');
            $table->float('total_chla');
            $table->float('cyano_chla');
            $table->float('sd_value');
            $table->float('do_value');
            $table->float('lux');
            $table->float('pbot');
            $table->float('depth');
            $table->float('surtemp');
            $table->float('bottemp');
            $table->float('lat');
            $table->float('long');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('algas');
    }
}
