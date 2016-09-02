<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('idc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->integer('album_id');
            $table->string('region', 64);
            $table->string('zone', 64);
            $table->string('location', 128);
            $table->text('desc', 128);
            $table->tinyInteger('is_hot', 1)->default(0);
            $table->tinyInteger('status', 1)->default(1);
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
        //
        Schema::drop('idc');
    }
}
