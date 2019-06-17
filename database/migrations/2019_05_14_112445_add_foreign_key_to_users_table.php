<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->foreign('group_id')->references('id')->on('group_names');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropForeign('group_id');
            $table->dropForeign('city_id');
            $table->dropForeign('user_attributes_id');
            $table->dropForeign('role_id');
        });
    }
}
