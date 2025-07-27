<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('ClassId');
            $table->string('LecturerId', 255);
            $table->string('CourseId', 25);
            $table->string('ClassCode', 10);
            $table->integer('LecturerRoleId');
            $table->integer('ClassYear');
            $table->integer('Semester');
            $table->integer('NumberOfSession');
            $table->string('CourseCategory', 5);
            $table->timestamps();

            // Foreign keys (optional, uncomment if you want constraints)
            // $table->foreign('LecturerId')->references('LecturerId')->on('lecturers');
            // $table->foreign('CourseId')->references('CourseId')->on('courses');
            // $table->foreign('LecturerRoleId')->references('LecturerRoleId')->on('lecturer_roles');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};