<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_post', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('detail_work');
            $table->string('location_teaching');
            $table->string('date_teaching');
            $table->integer('amount_stu')->unsigned()->default(0);
            $table->integer('price')->unsigned()->default(0);
            $table->string('status_post')->nullable();
            $table->string('addpost_at')->timestamps();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_post');
    }
};
