<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        Schema::create('about_us_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('about_us_id');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('locale')->index();
            $table->unique(['locale', 'about_us_id']);
            $table->foreign('about_us_id')->references('id')->on('about_us')->cascadeOnDelete();
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
        Schema::dropIfExists('about_us');
        Schema::dropIfExists('about_us_translations');
    }
};
