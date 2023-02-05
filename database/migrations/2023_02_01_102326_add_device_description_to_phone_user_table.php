<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeviceDescriptionToPhoneUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phone_user', function (Blueprint $table) {

            $table->text('device_description')->nullable();
        });
        Schema::table('laptop_user', function (Blueprint $table) {
            $table->text('device_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phone_user', function (Blueprint $table) {
            $table->dropColumn('device_description');
        });
        Schema::table('laptop_user', function (Blueprint $table) {
            $table->dropColumn('device_description');
        });
    }
}
