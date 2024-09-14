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
        Schema::create('submissions', function (Blueprint $table) {
            $table->integer('submission_id') -> primary() -> autoIncrement();
            $table->integer('assignment_id');
            $table->integer('student_id');
            $table->date('submission_date');
            $table->decimal('grade');
            $table->text('feedback');
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
