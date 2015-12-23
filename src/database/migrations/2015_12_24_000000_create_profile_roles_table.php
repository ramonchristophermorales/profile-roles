<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurant_roles', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('restaurant_id')->unsigned();
//            $table->foreign('restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');

            $table->integer('restaurant_profile_id')->unsigned();
			$table->foreign('restaurant_profile_id')->references('id')->on('restaurant_profile_roles')->onDelete('cascade');

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
