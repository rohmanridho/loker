<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->foreignId('companies_id')->constrained();
            $table->foreignId('categories_id')->constrained();
            $table->string('slug');
            $table->string('type')->nullable();
            $table->integer('salary')->nullable();
            $table->string('schedule')->nullable();
            $table->text('description');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
