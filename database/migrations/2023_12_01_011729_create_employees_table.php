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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('individual_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('job_title');
            $table->string('email');
            $table->string('password');
            $table->string('street');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('language');
            $table->string('timezone');
            $table->string('landline')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('fax_number')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
