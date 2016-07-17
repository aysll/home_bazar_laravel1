<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',200);
            $table->string('last_name',200);
            $table->string('email',200);
            $table->string('password',200);
            $table->boolean('type')->default(0);
            $table->dateTime('birth_date');
            $table->string('address',300)->nullable();
            $table->string('country',200)->nullable();
            $table->string('city',200)->nullable();
            $table->string('phone',100)->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
