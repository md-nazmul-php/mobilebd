<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilespeconesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobilespecones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned();
            $table->string('device_type_spc', 30)->nullable();
            $table->string('brand_spc', 30)->nullable();
            $table->string('model_spc', 40)->nullable();
            $table->date('released_spc')->nullable();
            $table->string('g_colours_spc', 30)->nullable();
            $table->string('display_type_spc', 60)->nullable();
            $table->string('screen_size_spc', 60)->nullable();
            $table->string('aspect_ratio_spc', 60)->nullable();
            $table->string('bezel_less_spc_check', 5)->nullable();
            $table->string('bezel_less_spc', 60)->nullable();
            $table->string('brightness_spc', 60)->nullable();
            $table->string('resolution_spc', 60)->nullable();
            $table->string('refresh_rate_spc', 60)->nullable();
            $table->string('display_colors_spc', 60)->nullable();
            $table->string('pixel_density_spc', 60)->nullable();
            $table->string('touch_screen_spc_check', 5)->nullable();
            $table->string('touch_screen_spc', 60)->nullable();
            $table->string('display_protection_spc', 200)->nullable();
            $table->string('multitouch_spc', 60)->nullable();
            $table->string('operating_system_spc', 60)->nullable();
            $table->string('chipset_spc', 200)->nullable();
            $table->string('cpu_spc', 200)->nullable();
            $table->string('architecture_spc', 60)->nullable();
            $table->string('fabrication_spc', 60)->nullable();
            $table->string('no_of_cores_spc', 60)->nullable();
            $table->string('graphics_spc', 60)->nullable();
            $table->string('height_spc', 60)->nullable();
            $table->string('width_spc', 60)->nullable();
            $table->string('thickness_spc', 60)->nullable();
            $table->string('weight_spc', 60)->nullable();
            $table->string('colours_spc', 60)->nullable();
            $table->string('waterproof_spc_check', 5)->nullable();
            $table->string('waterproof_spc', 60)->nullable();
            $table->string('ruggedness_spc', 60)->nullable();
            $table->string('build_spc', 60)->nullable();
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('mobileposts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobilespecones');
    }
}
