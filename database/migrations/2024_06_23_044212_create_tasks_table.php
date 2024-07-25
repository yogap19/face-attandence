<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('codeTask', 100)->default('0000');
            $table->string('taskName', 100)->default('Daily task');
            $table->string('slug', 255);
            $table->string('subject', 100);
            $table->string('teacher', 100);
            $table->string('status')->default('active');
            $table->dateTime('deadline')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('description', 255)->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
