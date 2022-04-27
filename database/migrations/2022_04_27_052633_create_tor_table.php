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
            $table->string('sem1');
            $table->string('code1');
            $table->string('subject1');
            $table->string('credits1');
            $table->string('grades1');
            $table->string('remarks1'); 
            $table->string('sem2');
            $table->string('code2');
            $table->string('subject2');
            $table->string('credits2');
            $table->string('grades2');
            $table->string('remarks2'); 
            $table->string('sem3');
            $table->string('code3');
            $table->string('subject3');
            $table->string('credits3');
            $table->string('grades3');
            $table->string('remarks3'); 
            $table->string('sem4');
            $table->string('code4');
            $table->string('subject4');
            $table->string('credits4');
            $table->string('grades4');
            $table->string('remarks4'); 
            $table->string('sem5');
            $table->string('code5');
            $table->string('subject5');
            $table->string('credits5');
            $table->string('grades5');
            $table->string('remarks5'); 
            $table->string('sem6');
            $table->string('code6');
            $table->string('subject6');
            $table->string('credits6');
            $table->string('grades6');
            $table->string('remarks6'); 
            $table->string('sem7');
            $table->string('code7');
            $table->string('subject7');
            $table->string('credits7');
            $table->string('grades7');
            $table->string('remarks7'); 
            $table->string('sem8');
            $table->string('code8');
            $table->string('subject8');
            $table->string('credits8');
            $table->string('grades8');
            $table->string('remarks8');
            $table->string('sem9');
            $table->string('code9');
            $table->string('subject9');
            $table->string('credits9');
            $table->string('grades9');
            $table->string('remarks9');  
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
