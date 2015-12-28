<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(\PR::getConfig()['tables']['roles'], function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer(\PR::getConfig()['link']['id'])->unsigned();
            $table->foreign(\PR::getConfig()['link']['id'])->references('id')->on(\PR::getConfig()['link']['table'])->onDelete('cascade');

            $table->integer(\PR::getConfig()['tables']['profiles'] . '_id')->unsigned();
			$table->foreign(\PR::getConfig()['tables']['profiles'] . '_id')->references('id')->on(\PR::getConfig()['tables']['profiles'])->onDelete('cascade');

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
