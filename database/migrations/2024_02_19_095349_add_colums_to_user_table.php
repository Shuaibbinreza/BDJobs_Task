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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('profile_completed')->default(false);
            $table->string('gender');
            $table->string('user_main_skill');
            $table->string('phone_country_code');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile_completed');
            $table->dropColumn('gender');
            $table->dropColumn('user_main_skill');
            $table->dropColumn('phone');
            $table->dropColumn('phone_country_code');
        });
    }
};
