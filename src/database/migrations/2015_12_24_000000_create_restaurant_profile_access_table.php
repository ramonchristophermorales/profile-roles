<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantProfileAccessTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurant_profile_access', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('restaurant_profile_id')->unsigned();
			$table->foreign('restaurant_profile_id')->references('id')->on('restaurant_profile_roles')->onDelete('cascade');

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
