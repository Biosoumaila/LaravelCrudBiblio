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
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id('oeuvre_id');
            $table->string('nom');
            $table->text('description');
            $table->year('annee')->nullable();
            $table->foreignId('artiste_id')->nullable()->references('artiste_id')->on('artistes');
            $table->foreignId('categorie_id')->nullable()->references('categorie_id')->on('categories');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oeuvres');
    }
};
