<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileAccessTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(\PR::getConfig()['tables']['access'], function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer(\PR::getConfig()['tables']['profiles'] . '_id')->unsigned();
			$table->foreign(\PR::getConfig()['tables']['profiles'] . '_id')->references('id')->on(\PR::getConfig()['tables']['profiles'])->onDelete('cascade');

			$table->string('route_action');
			$table->string('route_name');
			$table->string('route_path');

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
		Schema::dropIfExists('restaurant_roles');
	}

}
