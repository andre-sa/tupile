<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('applications', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('application_type_id')->unsigned();
            $table->foreign('application_type_id')->references('id')->on('application_types');
            $table->string('name', 100);
            $table->string('address', 200);
            $table->string('port', 10);
            $table->string('username', 50);
            $table->string('password', 100);
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
		Schema::drop('applications');
	}

}
