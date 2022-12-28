<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('brand_id');
            $table->string('img');
            $table->json('galleries');
            $table->json('networks');
            $table->float('length');
            $table->float('width');
            $table->float('thickness');
            $table->float('weight');
            $table->string('front_material')->nullable();
            $table->string('back_material')->nullable();
            $table->string('frame_material')->nullable();
            $table->integer('sim_count');
            $table->json('sims');
            $table->string('display_type');
            $table->float('size');
            $table->integer('display_width');
            $table->integer('display_height');
            $table->string('resolution');
            $table->foreignId('operating_system_version_id');
            $table->foreignId('chipset_id');
            $table->boolean('card_slot')->default(0);
            $table->json('variants');
            $table->integer('camera_count');
            $table->json('camera_resolutions');
            $table->string('video_quality');
            $table->integer('selfie_camera_count');
            $table->boolean('selfie_pop_up')->default(0);
            $table->json('selfie_camera_resolutions');
            $table->boolean('loud_speaker')->default(0);
            $table->boolean('jack')->default(0);
            $table->integer('battery_capacity');
            $table->integer('wired_charging_power');
            $table->integer('wireless_charging_power')->nullable();
            $table->boolean('removable_battery')->default(0);
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('phones');
    }
}
