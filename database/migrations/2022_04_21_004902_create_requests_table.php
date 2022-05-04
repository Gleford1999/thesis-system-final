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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code');
            $table->string('student_id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('address');
            $table->string('course');
            $table->string('elementary_school');
            $table->string('elementary_yg');
            $table->string('high_school');
            $table->string('highschool_yg');
            $table->string('purpose');
            $table->string('transaction_mode');
            $table->string('receipt_num');
            $table->string('payment_amount');
            $table->string('payment_date');
            $table->string('status')->default('pending');
            $table->string('schedule')->nullable();
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
        Schema::dropIfExists('requests');
    }
};
