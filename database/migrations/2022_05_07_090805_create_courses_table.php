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
        Schema::create('courses', function (Blueprint $table) {

            $table->id();

            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->string('title');
            $table->string('slug');
            $table->string('description');
//
//
//            $table->foreignId('image_id')->nullable();
//            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
//
//            $table->foreignId('video_id')->nullable();
//            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');

            $table->unsignedBigInteger('actual_price');
            $table->unsignedBigInteger('discount_price')->nullable();

            $table->BigInteger('view_count')->nullable();
            $table->BigInteger('subscriber_count')->nullable();


            $table->boolean('is_active')->default(0);

            $table->string('course_lang');
            $table->string('course_time');
            $table->string('course_size');
            $table->string('course_kind');

            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
};
