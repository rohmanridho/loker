<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');
            $table->string('photo')->nullable();
            $table->string('address')->nullable();

            $table->foreignId('users_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('industries_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('provinces_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();

            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->text('description')->nullable();
            $table->string('document')->nullable();
            $table->string('status')->default('Belum Disetujui');

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
        Schema::dropIfExists('companies');
    }
}