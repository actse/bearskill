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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('teacher_image')->nullable();
            $table->string('birthday')->nullable();
            $table->string('lineid')->nullable();
            $table->string('instagram')->nullable();
            $table->string('address')->nullable();
            $table->text('idcard_image')->nullable();
            $table->string('graduation_status')->nullable();
            $table->string('graduation_year')->nullable();
            $table->string('graduation_univercity')->nullable();
            $table->string('graduation_faculty')->nullable();
            $table->string('graduation_major')->nullable();
            $table->string('graduation_gpax')->nullable();
            $table->string('graduation_reference_documents')->nullable();
            $table->string('education_level')->nullable();
            $table->string('location_teaching')->nullable();
            $table->string('teaching_experience')->nullable();
            $table->string('teaching_experience_year')->nullable();
            $table->string('teaching_experience_detail')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('we_more_detail')->nullable();
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};
