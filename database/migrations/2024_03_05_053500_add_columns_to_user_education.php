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
        Schema::table('user_education', function (Blueprint $table) {
            $table->string('major')->nullable()->after('education_title');
            $table->string('education_level')->nullable()->after('id');
            $table->string('board')->nullable()->after('major');
            $table->boolean('foreign_institute')->default(false)->after('education_institute');
            $table->double('year_of_passing')->nullable()->after('education_end');
            $table->string('resulttype')->nullable()->after('year_of_passing');
            $table->double('cgpa')->nullable()->after('resulttype');
            $table->double('marks')->nullable()->after('cgpa');
            $table->double('duration')->nullable()->after('marks');
            $table->text('achievement')->nullable()->after('duration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_education', function (Blueprint $table) {
            $table->dropColumn('major');
            $table->dropColumn('education_level');
            $table->dropColumn('board');
            $table->dropColumn('foreign_institute');
            $table->dropColumn('year_of_passing');
            $table->dropColumn('resulttype');
            $table->dropColumn('cgpa');
            $table->dropColumn('marks');
            $table->dropColumn('duration');
            $table->dropColumn('achievement');
        });
    }
};
