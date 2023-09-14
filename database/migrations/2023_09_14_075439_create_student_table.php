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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('stu_image')->nullable();
            $table->string('prefix')->nullable();
            $table->string('firs_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('birthday')->nullable();
            $table->string('lineid')->nullable();
            $table->string('address')->nullable();
            $table->string('register_at')->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
