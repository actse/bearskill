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
        Schema::create('teacher_addsubjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('type_subject_id');
            $table->string('detail');
            $table->string('location_teaching');
            $table->string('date_teaching');
            $table->string('type_teaching');
            $table->string('subjects');
            $table->integer('price')->unsigned()->default(0);
            $table->string('status')->nullable();
            $table->string('addsubjects_at')->timestamps();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('type_subject_id')->references('id')->on('type_subject');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_addsubjects');
    }
};
