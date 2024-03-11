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
        Schema::table('addresses', function (Blueprint $table) {
            $table->string('district');
            $table->string('thana');
            $table->string('houseno');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('alt_mobile');
            $table->string('post_office');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn('district');
            $table->dropColumn('thana');
            $table->dropColumn('alt_mobile');
            $table->dropColumn('post_office');
            $table->dropColumn('user_id');
            $table->dropColumn('houseno');
        });
    }
};
