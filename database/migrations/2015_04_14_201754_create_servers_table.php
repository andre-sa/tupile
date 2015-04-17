<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('servers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('address', 200);
            $table->string('username', 50);
            $table->string('password', 100);
            $table->integer('server_type_id')->unsigned()->nullable();
            $table->foreign('server_type_id')->references('id')->on('server_types');
            $table->text('notes');
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
		Schema::drop('servers');
	}

}
