<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffeeMachineAndPodeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee_machines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku')->unique();
            $table->integer('product_type_id');
            $table->boolean('water_line');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('coffee_pods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku')->unique();
            $table->integer('product_type_id');
            $table->integer('flavor_type_id');
            $table->integer('size');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('coffee_machine_product_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
        });

        Schema::create('coffee_pod_product_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
        });

        Schema::create('coffee_pod_flavor_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
