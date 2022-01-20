<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilepostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobileposts', function (Blueprint $table) {
            $table->id();
            $table->string('added_by',20);
            $table->string('title',200);
            $table->string('description', 6000);
            $table->string('brand_name', 30)->nullable();
            $table->string('category_name', 200)->nullable();
            $table->string('meta_title', 70)->nullable();
            $table->string('meta_description', 170)->nullable();
            $table->string('key_words', 200)->nullable();
            $table->string('market_status', 30)->nullable();
            $table->date('released')->nullable();
            $table->string('official_price', 10)->nullable();
            $table->date('price_updated_on')->nullable();
            $table->string('official_website')->nullable();
            $table->string('g_5g_check', 5)->nullable();
            $table->string('g_5g', 40)->nullable();
            $table->string('g_volte_check', 5)->nullable();
            $table->string('g_volte', 40)->nullable();
            $table->string('g_fingerprint_check', 5)->nullable();
            $table->string('g_fingerprint', 40)->nullable();
            $table->string('g_usb_check', 5)->nullable();
            $table->string('g_usb', 40)->nullable();
            $table->string('g_wireless_check', 5)->nullable();
            $table->string('g_wireless', 40)->nullable();
            $table->string('g_waterproof_check', 5)->nullable();
            $table->string('g_waterproof', 40)->nullable();
            $table->string('os', 60)->nullable();
            $table->string('display', 60)->nullable();
            $table->string('main_camera', 60)->nullable();
            $table->string('front_camera', 60)->nullable();
            $table->string('ram', 60)->nullable();
            $table->string('storage', 60)->nullable();
            $table->string('battery_capacity', 60)->nullable();
            $table->string('average_rating', 5)->nullable();
            $table->string('product_type', 20)->nullable();
            $table->string('post_type', 20)->nullable();
            $table->string('post_img', 500)->nullable();
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
        Schema::dropIfExists('mobileposts');
    }
}
