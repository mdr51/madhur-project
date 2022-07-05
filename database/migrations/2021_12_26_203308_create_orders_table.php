<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->id();
            $table->integer('cart_id')->nullable(true);
            $table->integer('user_id')->nullable(true);
            $table->integer('cake_id')->nullable(true);
            $table->string('price',191)->nullable(true);
            $table->string('name',191)->nullable(true);
            $table->string('mobile',191)->nullable(true);
            $table->text('address')->nullable(true);
            $table->string('pincode',191)->nullable(true);
            $table->string('status',191)->default('pending');

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
        Schema::dropIfExists('orders');
    }
}
