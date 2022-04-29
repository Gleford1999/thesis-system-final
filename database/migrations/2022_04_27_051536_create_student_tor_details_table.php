<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tor_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('admission_date');
            $table->string('credentials');
            $table->string('elementary');
            $table->string('elem_year');
            $table->string('highschool');
            $table->string('hs_year');
            $table->string('degree');
            $table->string('major');
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
        Schema::dropIfExists('student_tor_details');
    }
};
