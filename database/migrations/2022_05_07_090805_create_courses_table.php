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
        Schema::create('courses', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->string('title');
            $table->string('slug');
            $table->string('description');

            $table->string('photo')->nullable();
            $table->string('promo_video')->nullable();

            $table->unsignedBigInteger('actual_price');
            $table->unsignedBigInteger('discount_price')->nullable();

            $table->BigInteger('view_count')->nullable();
            $table->BigInteger('subscriber_count')->nullable();

            $table->boolean('creator_status')->default(0);
            $table->boolean('admin_status')->default(0);

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
