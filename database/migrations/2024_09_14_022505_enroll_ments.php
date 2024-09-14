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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->integer('enrollment_id')->primary()->autoIncrement();
            $table->integer('students_id');
            $table->integer('source_id');
            $table->date('enrollments_date');
            $table->enum('status', ['active', 'completed', 'dropped']);
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
