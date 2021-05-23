<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name'); 
            $table->string('gender'); 
            $table->string('year'); 
            $table->string('month'); 
            $table->string('day'); 
            $table->string('school'); 
            $table->string('zipcode');
            $table->string('address');
            $table->string('tel'); 
            $table->string('corse'); 
            $table->string('week'); 
            $table->string('time'); 
            $table->string('color'); 
            $table->string('remarks')->nullable();
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
