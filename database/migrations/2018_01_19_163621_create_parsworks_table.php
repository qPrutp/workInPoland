<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParsworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parsworks', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name_vacancy',100)->nullable();
            $table->string('place_work',100)->nullable();
            $table->string('experience',100)->nullable();
            $table->string('pay',100)->nullable();
            $table->string('language',100)->nullable();
            $table->string('age',100)->nullable();
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
        Schema::dropIfExists('parsworks');
    }
}
