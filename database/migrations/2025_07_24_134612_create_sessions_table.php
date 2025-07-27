<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('class_sessions', function (Blueprint $table) {
            $table->increments('SessionId');
            $table->integer('ClassId');
            $table->date('SessionDate');
            $table->string('RoomId', 10);
            $table->integer('SessionNumber');
            $table->integer('Shift');
            $table->timestamps();

            // Foreign keys (optional, uncomment if you want constraints)
            // $table->foreign('ClassId')->references('ClassId')->on('classes');
            // $table->foreign('RoomId')->references('RoomId')->on('rooms');
            // $table->foreign('Shift')->references('Shift')->on('shifts');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('class_sessions');
    }
};