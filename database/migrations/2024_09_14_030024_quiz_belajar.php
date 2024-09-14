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
        Schema::create('quizBelajar', function (Blueprint $table) {
            $table->integer('attempt_id')->primary()->autoIncrement();
            $table->integer('quiz_id');
            $table->integer('student_id');
            $table->date('attempt_date');
            $table->decimal('score');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
