<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_options', function(Blueprint $table) {
            $table->increments('id');
            $table->string('delivery_type');
            $table->integer('cost')->unsigned();
            $table->boolean('is_flat')->default(false);
            $table->timestamps();
        });

        Schema::create('orders', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('delivery_option_id')->unsigned();
            $table->integer('total')->unsigned();
            $table->integer('qty')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('delivery_option_id')
                    ->references('id')
                    ->on('delivery_options')
                    ->onDelete('cascade');
        });

        Schema::create('order_product', function(Blueprint $table) {
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('qty')->unsigned();
            $table->integer('price')->unsigned();
            
            $table->foreign('order_id')
                    ->references('id')
                    ->on('orders')
                    ->onDelete('cascade');

            $table->foreign('product_id')
                    ->references('id')
                    ->on('products')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['delivery_option_id']);
            
        });

        Schema::table('order_product', function($table) {
            $table->dropForeign(['order_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('delivery_options');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_product');
    }
}
