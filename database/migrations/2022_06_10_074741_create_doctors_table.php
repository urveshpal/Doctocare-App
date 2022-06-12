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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('doctor_id');
            $table->timestamps();
            $table->string('name',50);
            $table->string('email',100);
            $table->string('number',12);
            $table->string('experience',10);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('category');
            $table->string('profile_photo',200);
            $table->string('addhar_number',20);
            $table->string('addhar_photo',200);
            $table->string('lisence_no',50);
            $table->string('lisence_photo',200);
            $table->string('prescription',200);
            $table->integer('fees');
            $table->unsignedInteger('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
