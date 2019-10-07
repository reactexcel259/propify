<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLocStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loc_states', function(Blueprint $table)
		{
			$table->foreign('country_id')->references('id')->on('loc_countries')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loc_states', function(Blueprint $table)
		{
			$table->dropForeign('loc_states_country_id_foreign');
		});
	}

}
