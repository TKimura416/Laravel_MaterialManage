<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('location', 40);
                        $table->string('inventoryno', 5);
                        $table->string('tag', 10);
                        $table->char('depcode', 2);
                        $table->char('itemcode', 3);
                        $table->string('oldcode', 30);
                        $table->string('newcode', 30);
                        $table->string('brand', 50);
                        $table->string('model', 20);
                        $table->string('serial', 30);
                        $table->text('description');
                        $table->string('quantity', 10);
                        $table->text('documents');
                        $table->date('purchased');
                        $table->string('deliveryrcpt', 10);
                        $table->string('invoicercpt', 10);
                        $table->string('nameunder', 10);
                        $table->string('reference', 10);
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
		Schema::drop('items');
	}

}
