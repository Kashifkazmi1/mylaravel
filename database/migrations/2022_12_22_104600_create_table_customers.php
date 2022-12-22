<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_customers', function (Blueprint $table) {
            $table->id('customer_id'); // customer_id
            $table->string('name',60);
            $table->enum('gender',['M','F','O'])->nullable(); //ager koe gender enter nahi kerna chahta
            $table->text('address');
            $table->date('dob');
            $table->string('password');
            $table->boolean('status')->default(1); // assigning default value
            $table->integer('points')->default(0);
            $table->timestamps(); // create_at update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_customers');
    }
}
