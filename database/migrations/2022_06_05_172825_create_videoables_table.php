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
        Schema::create('videoables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('video_id');
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->Integer('videoable_id');
            $table->string('videoable_type');
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
        Schema::dropIfExists('videoables');
    }
};
