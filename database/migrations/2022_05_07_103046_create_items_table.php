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
        Schema::create('items', function (Blueprint $table) {
            $table->id();

//            $table->foreignId('course_id');
//            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
//
//            $table->string('title');
//            $table->string('description');
//
//            $table->string('media_url')->nullable();
//            $table->string('file_url')->nullable();
//
//            $table->boolean('is_free')->default(0);
//
//            $table->softDeletes();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
