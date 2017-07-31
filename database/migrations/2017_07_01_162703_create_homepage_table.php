<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('job');
            $table->integer('age');
            $table->string('other_projects');
            $table->string('commitment1_title');
            $table->string('commitment1_content');
            $table->string('commitment2_title');
            $table->string('commitment2_content');
            $table->string('commitment3_title');
            $table->string('commitment3_content');
            $table->string('tech_title');
            $table->string('tech');
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
        Schema::dropIfExists('homepage');
    }
}
