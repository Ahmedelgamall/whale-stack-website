<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->string('display_name');
            $table->string('key');
            $table->string('type');
            $table->string('order');
            $table->tinyInteger('is_static')->default(0);
            $table->longText('static_value')->nullable();
            $table->timestamps();
        });

        Schema::create('setting_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('setting_id')->nullable()->constrained();
            $table->longText('value')->nullable();
            $table->string('locale')->index();
            $table->unique(['setting_id', 'locale']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
