<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishLists', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('customer_id')->unsigned();
          $table->integer('product_id')->unsigned();
          $table->timestamps();
          $table->foreign('customer_id')->references('id')->on('customers');
          $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wishLists');
    }
}
k