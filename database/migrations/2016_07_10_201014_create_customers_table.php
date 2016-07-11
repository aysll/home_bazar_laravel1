<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
          $table->increments('id');
          $table->string('FirstName',200);
          $table->string('LastName',200);
          $table->dateTime('BirthDate');
          $table->string('Address',300)->nullable();
          $table->string('Country',200);
          $table->string('City',200);
          $table->string('Phone',100);
          $table->string('Email',200);
          $table->string('Password',200);
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
        Schema::drop('customers');
    }
}
