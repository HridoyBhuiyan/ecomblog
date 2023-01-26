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
        Schema::create('blog_post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('blog_content');
            $table->string('category');
            $table->string('schedule')->nullable();
            $table->string('slug')->unique();
            $table->string('tag')->nullable();
            $table->enum('status',['published','draft'])->default('published');
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
        Schema::dropIfExists('blog_pos');
    }
};
