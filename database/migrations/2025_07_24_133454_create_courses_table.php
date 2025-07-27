<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('CourseId', 25);
            $table->string('CourseName', 255);
            $table->string('CourseCategory', 5);
            $table->integer('Credit');
            $table->timestamps();

            $table->primary(['CourseId', 'CourseCategory']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};