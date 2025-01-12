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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('rank')->default(1);
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::create('testimonial_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('testimonial_id');
            $table->string('name')->nullable();
            $table->string('job_title')->nullable();
            $table->mediumText('description');
            $table->string('locale')->index();
            $table->unique(['locale', 'testimonial_id']);
            $table->foreign('testimonial_id')->references('id')->on('testimonials')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
