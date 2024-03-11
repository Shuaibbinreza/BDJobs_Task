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
        Schema::dropIfExists('personal_details');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('dob');
            $table->string('gender');
            $table->string('religion')->nullable();
            $table->string('maritial_status')->nullable();
            $table->string('primary_mobile');
            $table->string('secondary_mobile'); 
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nationality')->nullable();
            $table->string('national_id')->nullable();
            $table->string('passport_number')->nullable();
            $table->date('passport_issue_date')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->timestamps();
        });
    }
};
