<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('project_id');

            // add foreign keys
            $table->BigInteger('city_id')->unsigned();
            $table->BigInteger('company_id')->unsigned();
            $table->BigInteger('user_id')->unsigned();

            $table->string('name');
            $table->date('execution_date');
            $table->boolean('is_active');
            $table->timestamps();

            // specify foreign keys
            $table->foreign('city_id')->references('city_id')->on('cities');
            $table->foreign('company_id')->references('company_id')->on('companies');
            $table->foreign('user_id')->references('user_id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
