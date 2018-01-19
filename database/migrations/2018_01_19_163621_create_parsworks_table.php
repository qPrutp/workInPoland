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

            $table->string('name_vacancy',100);
            $table->string('place_work',100);
            $table->string('experience',100);
            $table->string('pay',100);
            $table->string('language',100);
            $table->string('age',100);
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
        Schema::dropIfExists('parsworks');
    }
}
