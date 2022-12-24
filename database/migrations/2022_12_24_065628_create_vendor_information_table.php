<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('avatar')->nullable();
            $table->text('type');
            $table->text('main_products');
            $table->text('street');
            $table->text('city');
            $table->text('province');
            $table->text('zip_code');
            $table->string('contact');
            $table->string('website')->nullable();
            $table->longText('information');
            $table->json('galleries');
            $table->text('embed_google_map')->nullable();
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
        Schema::dropIfExists('vendor_information');
    }
}
