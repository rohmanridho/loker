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
            $table->string('slug');
            $table->foreignId('categories_id')->nullable()->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('companies_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('type')->nullable();
            $table->integer('salary')->nullable();
            $table->string('schedule')->nullable();
            $table->text('description')->nullable();
            $table->integer('slot')->nullable();
            $table->string('status')->nullable()->default('Buka');

            $table->timestamps();
            // $table->softDeletes();
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