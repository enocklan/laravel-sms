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
        Schema::create('teachers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phoneNumber');
            $table->string('password');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_otp_verified')->default(false);
            $table->boolean('has_to_change_password')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('employee_id')->unique();
            $table->string('department');
            $table->date('date_of_employment');
            $table->string('address');
            $table->string('profile_picture')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
