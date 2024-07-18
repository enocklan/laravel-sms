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
            // Common user fields
            $table->uuid('id')->primary();
            $table->string('student_id')->unique()->nullable();
            $table->string('name');
            $table->string('phoneNumber')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_otp_verified')->default(false);
            $table->boolean('has_to_change_password')->default(false);
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
            // Student-specific fields
            $table->string('course')->nullable();
            $table->string('department')->nullable();
            $table->string('year_of_study')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address')->nullable();
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
