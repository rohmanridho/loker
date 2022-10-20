<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('address')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->integer('zip_code')->nullable()->change();
            $table->integer('phone_number')->nullable()->change();
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
            $table->string('address')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->integer('zip_code')->nullable()->change();
            $table->integer('phone_number')->nullable()->change();
        });
    }
}