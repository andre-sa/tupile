<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServersConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('server_connections', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('server_id')->unsigned();
            $table->foreign('server_id')->references('id')->on('servers');
            $table->integer('connection_type_id')->unsigned();
            $table->foreign('connection_type_id')->references('id')->on('connection_types');
            $table->integer('protocol_id')->unsigned();
            $table->foreign('protocol_id')->references('id')->on('protocols');
            $table->string('address', 200);
            $table->string('port', 10);
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
		Schema::drop('server_connections');
	}

}
