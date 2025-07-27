<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('EnrollmentId');
            $table->string('StudentId', 15);
            $table->integer('ClassId');
            $table->timestamps();

            // Foreign keys (optional, uncomment if you want constraints)
            // $table->foreign('StudentId')->references('StudentId')->on('students');
            // $table->foreign('ClassId')->references('ClassId')->on('classes');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};