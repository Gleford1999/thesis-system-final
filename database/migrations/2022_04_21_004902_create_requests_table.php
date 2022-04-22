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
            $table->string('purpose');
            $table->string('transaction_mode');
            $table->string('receipt');
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
