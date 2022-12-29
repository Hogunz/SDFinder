<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phones', function (Blueprint $table) {
            $table->string('body_description')->nullable()->after('frame_material');
            $table->string('display_description')->nullable()->after('resolution');
            $table->string('camera_description')->nullable()->after('camera_resolutions');
            $table->string('selfie_cameras_description')->nullable()->after('selfie_camera_resolutions');
            $table->string('battery_type')->nullable()->after('removable_battery');
            $table->string('battery_description')->nullable()->after('removable_battery');
            $table->json('features')->nullable()->after('description');
            $table->json('misc')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phones', function (Blueprint $table) {
            $table->dropColumn('body_description');
            $table->dropColumn('display_description');
            $table->dropColumn('camera_description');
            $table->dropColumn('selfie_cameras_description');
            $table->dropColumn('battery_type');
            $table->dropColumn('battery_description');
            $table->dropColumn('features');
            $table->dropColumn('misc');
        });
    }
}
