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

            $table->string('name_vacancy',100);
            $table->string('place_work',100);
            $table->string('industry',100);
            $table->string('company_name',100);
            $table->string('experience',100);
            $table->string('qualifications',100);
            $table->string('other_requirements',100);
            $table->string('working_hours',100);
            $table->string('number_of_vacancies',100);
            $table->string('contract',100);
            $table->string('rate_per_hour',100);
            $table->string('food',100);
            $table->string('accommodation',100);
            $table->string('probation',100);
            $table->string('education',100);
            $table->string('language',100);
            $table->string('age',100);
            $table->text('tasks');
            $table->text('other');
            $table->string('images',100);

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
