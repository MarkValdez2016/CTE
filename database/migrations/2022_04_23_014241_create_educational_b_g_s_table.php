<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalBGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_b_g_s', function (Blueprint $table) {
            $table->id('educationalID');
            $table->string('educationalschool');
            $table->string('educationalCourse');
            $table->string('educationalfromDate');
            $table->string('educationalschooltoDate');
            $table->string('educationalattainment');
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
        Schema::dropIfExists('educational_b_g_s');
    }
}
