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
        Schema::create('teacher', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confirm_password');
            $table->string('teacher_image')->nullable();
            $table->string('prefix');
            $table->string('firs_name');
            $table->string('last_name');
            $table->string('nickname');
            $table->string('birthday');
            $table->string('phone');
            $table->string('lineid');
            $table->string('address');
            $table->text('idcard_image');
            $table->string('reference_person_name');
            $table->string('reference_person_phone');
            $table->string('reference_person_relationship');
            $table->string('graduation_status');
            $table->string('bachelor_status');
            $table->string('bachelor_year')->nullable();
            $table->string('bachelor_univercity')->nullable();
            $table->string('bachelor_faculty')->nullable();
            $table->string('bachelor_major')->nullable();
            $table->string('bachelor_gpax')->nullable();
            $table->string('bachelor_reference_documents')->nullable();
            $table->string('master_status')->nullable();
            $table->string('master_year')->nullable();
            $table->string('master_univercity')->nullable();
            $table->string('master_faculty')->nullable();
            $table->string('master_major')->nullable();
            $table->string('master_gpax')->nullable();
            $table->string('master_reference_documents')->nullable();
            $table->string('doctoral_status')->nullable();
            $table->string('doctoral_year')->nullable();
            $table->string('doctoral_univercity')->nullable();
            $table->string('doctoral_faculty')->nullable();
            $table->string('doctoral_major')->nullable();
            $table->string('doctoral_gpax')->nullable();
            $table->string('doctoral_reference_documents')->nullable();
            $table->string('education_level');
            $table->string('location_teaching');
            $table->string('teaching_experience');
            $table->string('teaching_experience_year')->nullable();
            $table->string('teaching_experience_detail')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('we_more_detail')->nullable();
            $table->string('register_at')->timestamps();
            $table->string('status_account')->nullable();
            // $table->string('school_name');
            // $table->string('study_plan');
            // $table->string('gpa_score');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher');
    }
};
