<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('profileID');
            $table->string('profileLname');
            $table->string('profileFname');
            $table->string('profileMname');
            $table->string('profileGender');
            $table->string('profileAddress');
            $table->date('profileBirthDate');
            $table->binary('profilePicture');
            $table->string('profileReligion');
            $table->string('profileCivilStatus');
            $table->string('profileZipCode');
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
        Schema::dropIfExists('profiles');
    }
}
