<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offers', function(Blueprint $table)
		{
			$table->increments('id');
			
			// fields
			$table->integer('start_id')
				->unsigned()
				->index();
			$table->datetime('start_time');
			
			$table->integer('end_id')
				->unsigned()
				->index();
			$table->datetime('end_time');
			
			$table->decimal('price', 5, 2);
			$table->integer('price_type');
			
			$table->integer('seats_total');
			$table->integer('seats_available');
			
			$table->integer('user_id')
				->unsigned()
				->index();
			
			// timestamps
			$table->timestamps();
			$table->softDeletes();
			
			// foreign keys
			$table->foreign('start_id')
				->references('id')
				->on('cities');
			
			$table->foreign('end_id')
				->references('id')
				->on('cities');
			
			$table->foreign('user_id')
				->references('id')
				->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('offers');
	}

}
