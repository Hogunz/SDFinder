<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->string('name');
            $table->string('img');
            $table->json('galleries');
            $table->foreignId('processor_id');
            $table->foreignId('graphics_card_id')->nullable();
            $table->float('screen_size');
            $table->integer('display_width');
            $table->integer('display_height');
            $table->string('display_type');
            $table->string('display_resolution');
            $table->string('display_description')->nullable();
            $table->boolean('camera')->default(0);
            $table->string('camera_description')->nullable();
            $table->integer('ram')->nullable();
            $table->integer('storage')->nullable();
            $table->text('storage_description')->nullable();
            $table->longText('description')->nullable();
            $table->integer('battery_capacity');
            $table->text('battery_description')->nullable();
            $table->json('features')->nullable();
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
        Schema::dropIfExists('laptops');
    }
}
