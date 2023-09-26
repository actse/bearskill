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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('teacher_image')->nullable();
            $table->string('prefix')->nullable();
            $table->string('firs_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('birthday')->nullable();
            $table->string('phone')->nullable();
            $table->string('lineid')->nullable();
            $table->string('address')->nullable();
            $table->text('idcard_image')->nullable();
            $table->string('reference_person_name')->nullable();
            $table->string('reference_person_phone')->nullable();
            $table->string('reference_person_relationship')->nullable();
            $table->string('graduation_status')->nullable();
            $table->string('bachelor_status')->nullable();
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
            $table->string('education_level')->nullable();
            $table->string('location_teaching')->nullable();
            $table->string('teaching_experience')->nullable();
            $table->string('teaching_experience_year')->nullable();
            $table->string('teaching_experience_detail')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('we_more_detail')->nullable();
            $table->string('register_at')->nullable();
            $table->string('status_account')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
