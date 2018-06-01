<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id');
            $table->string('category_name');
            $table->timestamps();
        });

        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer');
            $table->string('product_name');
            $table->text('product_description');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('price')->unsigned();
            $table->boolean('is_activated')->default(false);
            $table->timestamps();

            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
        });

        Schema::create('category_user', function(Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });

        Schema::create('images', function(Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->integer('product_id')->unsigned();
            $table->timestamps();

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
        Schema::table('products', function($table) {
            $table->dropForeign('products_category_id_foreign');
        });

        Schema::table('category_user', function($table) {
            $table->dropForeign('category_user_category_id_foreign');
            $table->dropForeign('category_user_user_id_foreign');
        });

        Schema::table('images', function($table) {
            $table->dropForeign('images_product_id_foreign');
        });

        Schema::dropIfExists('products');
        Schema::dropIfExists('category_user');
        Schema::dropIfExists('images');
        Schema::dropIfExists('categories');
    }
}
