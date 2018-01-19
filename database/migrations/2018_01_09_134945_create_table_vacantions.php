<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVacantions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name_vacancy',100)->nullable();
            $table->string('place_work',100)->nullable();
            $table->string('industry',100)->nullable();
            $table->string('company_name',100)->nullable();
            $table->string('experience',100)->nullable();
            $table->string('qualifications',100)->nullable();
            $table->string('other_requirements',100)->nullable();
            $table->string('working_hours',100)->nullable();
            $table->string('number_of_vacancies',100)->nullable();
            $table->string('contract',100)->nullable();
            $table->string('rate_per_hour',100)->nullable();
            $table->string('food',100)->nullable();
            $table->string('accommodation',100)->nullable();
            $table->string('probation',100)->nullable();
            $table->string('education',100)->nullable();
            $table->string('language',100)->nullable();
            $table->string('age',100)->nullable();
            $table->text('tasks')->nullable();
            $table->text('other')->nullable();
            $table->string('images',100)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacantions');
    }
}
