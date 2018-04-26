<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activation_codes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });

        Schema::table('users', function($table) {
            $table->boolean('activated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activation_codes', function($table) {
            $table->dropForeign('activation_codes_user_id_foreign');
        });

        Schema::dropIfExists('activation_codes');
    }
}
