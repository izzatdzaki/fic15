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
            //menambhakan phone
            $table->string('phone')->nullable();
            //menambhakan role ('admin','doctor','users')
            $table->enum('role', ['users', 'doctor', 'admin'])->default('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone']);
            $table->dropColumn(['role']);
        });
    }
};
