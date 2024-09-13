<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('title');
            $table->text('description');
            $table->text('content');
            $table->text('imageCover');
            $table->integer('category');
            $table->string('status')->default('pending');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moduls');
    }
};
