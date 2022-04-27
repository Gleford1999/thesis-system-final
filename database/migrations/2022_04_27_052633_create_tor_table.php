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
        Schema::create('tor', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('school-year');
            $table->string('sem');
            $table->string('code');
            $table->string('subject');
            $table->string('credits');
            $table->string('grades');
            $table->string('remarks'); 
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
        Schema::dropIfExists('tor');
    }
};
