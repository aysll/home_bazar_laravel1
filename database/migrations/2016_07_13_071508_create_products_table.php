<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductName',100);
            $table->string('ProductDescription',200);
            $table->integer('category_id')->unsigned();
            $table->decimal('UnitPrice',5,2);
            $table->integer('AvailableSize');
            $table->integer('AvailableColor');
            $table->decimal('Size',5,2);
            $table->string('Color',100);
            $table->decimal('Discount',5,2)->nullable();
            $table->decimal('UnitWeight',5,2);
            $table->string('WeightType',50);
            $table->integer('UnitInStock');
            $table->integer('UnitInOrder');
            $table->string('Picture',200);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
