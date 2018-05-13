<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function(Blueprint $table) {
            $table->increments('id');
            $table->string('address_line_one');
            $table->string('address_line_two')->nullable();
            $table->string('postcode');
            $table->string('suburb');
            $table->string('state');
            $table->string('country');
            $table->timestamps();
        });

        Schema::table('users', function($table) {
            $table->string('contact_number')->nullable();
        });

        Schema::create('address_user', function(Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('address_id')->unsigned();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('address_id')
                    ->references('id')
                    ->on('addresses')
                    ->onDelete('cascade');
        });

        Schema::create('roles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();            
        });

        Schema::create('permissions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        Schema::create('permission_role', function(Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->integer('permission_id')->unsigned();

            $table->foreign('role_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('cascade');

            $table->foreign('permission_id')
                    ->references('id')
                    ->on('permissions')
                    ->onDelete('cascade');

            $table->primary(['role_id','permission_id']);
        });

        Schema::create('role_user', function(Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('role_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('cascade');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->primary(['role_id','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('address_user', function($table) {
            $table->dropForeign('address_user_user_id_foreign');
            $table->dropForeign('address_user_address_id_foreign');
        });

        Schema::table('role_user', function($table) {
            $table->dropForeign('role_user_user_id_foreign');
            $table->dropForeign('role_user_role_id_foreign');
        });

        Schema::table('permission_role', function($table) {
            $table->dropForeign('permission_role_role_id_foreign');
            $table->dropForeign('permission_role_permission_id_foreign');
        }); 

        Schema::dropIfExists('addresses');
        Schema::dropIfExists('address_user');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('role_user');
    }
}
