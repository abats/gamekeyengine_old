<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments ('id')->index();
            $table->integer('igdb_id')->unsigned()->nullable();
			$table->integer('tgdb_id')->unsigned()->nullable();
			$table->integer('gb_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('release_date');
            $table->string('rating');
            $table->string('unique_name');
            $table->string('poster');
            $table->string('banner');
            $table->string('fanart');
            $table->timestamps();
        });
    }

    //todo: platform tran

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('games');
    }
}
