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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->foreignId('lecture_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('faculty_id')->nullable()->constrained()->onDelete('cascade');
            $table->timestamp('start_at');
            $table->string('place');
            $table->text('body');
            $table->text('image_url')->nullable();
            $table->boolean('teacher_welcome');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
