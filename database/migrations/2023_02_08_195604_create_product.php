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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('feature_image')->nullable();
            $table->text('specification')->nullable();
            $table->text('things_to_know')->nullable();
            $table->text('props_cons')->nullable();
            $table->text('review')->nullable();
            $table->string('video_link')->nullable();
            $table->string('faq')->nullable();
            $table->integer('loved')->default(0);
            $table->string('official_price')->nullable();
            $table->string('unofficial_price')->nullable();
            $table->string('featured_data')->nullable();
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->string('schedule')->nullable();
            $table->enum('status',['published','drafted'])->default('published');
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
        Schema::dropIfExists('product');
    }
};
