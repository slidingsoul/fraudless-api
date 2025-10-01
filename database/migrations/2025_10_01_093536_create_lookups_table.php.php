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
        Schema::create('lookups', function (Blueprint $table) {
            $table->bigIncrements('lookupid');
            $table->unsignedBigInteger('lookupcategoryid');
            $table->string('lookupcode', 100);
            $table->string('lookupdescription', 255)->nullable();
            $table->string('lookupvalue', 255)->nullable();
            $table->timestamps();

            $table->foreign('lookupcategoryid')->references('lookupcategoryid')->on('lookup_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lookups');
    }
};
