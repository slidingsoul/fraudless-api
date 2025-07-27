<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('presence', function (Blueprint $table) {
            $table->increments('PresenceId');
            $table->integer('SessionId');
            $table->string('StudentId', 15);
            $table->boolean('IsInCorrectLocation');
            $table->boolean('IsCorrectFace');
            $table->boolean('IsVerified');
            $table->timestamps();

            // Foreign keys (optional, uncomment if you want constraints)
            // $table->foreign('SessionId')->references('SessionId')->on('sessions');
            // $table->foreign('StudentId')->references('StudentId')->on('students');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('presence');
    }
};