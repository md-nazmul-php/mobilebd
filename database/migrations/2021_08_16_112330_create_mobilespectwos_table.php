<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilespectwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobilespectwos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned();
            $table->string('rear_camera_setup_spc', 60)->nullable();
            $table->string('rear_image_resolution_spc', 60)->nullable();
            $table->string('rear_resolution_spc', 200)->nullable();
            $table->string('rear_sensor_spc', 200)->nullable();
            $table->string('rear_settings_spc', 200)->nullable();
            $table->string('rear_shooting_modes_spc', 200)->nullable();
            $table->string('rear_autofocus_spc_check', 5)->nullable();
            $table->string('rear_autofocus_spc', 60)->nullable();
            $table->string('rear_flash_spc_check', 5)->nullable();
            $table->string('rear_flash_spc', 60)->nullable();
            $table->string('rear_ois_spc', 5)->nullable();
            $table->string('rear_features_spc', 200)->nullable();
            $table->string('rear_video_resolution_spc', 200)->nullable();
            $table->string('selfie_camera_setup_spc', 60)->nullable();
            $table->string('selfie_autofocus_spc_check', 5)->nullable();
            $table->string('selfie_autofocus_spc', 60)->nullable();
            $table->string('selfie_resolution_spc', 200)->nullable();
            $table->string('selfie_video_recording_spc', 200)->nullable();
            $table->string('selfie_features_spc', 200)->nullable();
            $table->string('selfie_image_resolution_spc', 200)->nullable();
            $table->string('selfie_flash_spc_check', 5)->nullable();
            $table->string('selfie_flash_spc', 60)->nullable();
            $table->string('ram_type_spc', 60)->nullable();
            $table->string('ram_size_spc', 60)->nullable();
            $table->string('ram_available_space_spc', 60)->nullable();
            $table->string('rom_type_spc', 60)->nullable();
            $table->string('rom_size_spc', 60)->nullable();
            $table->string('rom_available_space_spc', 60)->nullable();
            $table->string('rom_card_slot_spc_check', 5)->nullable();
            $table->string('rom_card_slot_spc', 60)->nullable();
            $table->string('battery_type_spc', 60)->nullable();
            $table->string('capacity_spc', 60)->nullable();
            $table->string('wireless_charging_spc_check', 5)->nullable();
            $table->string('wireless_charging_spc', 60)->nullable();
            $table->string('charging_spc', 200)->nullable();
            $table->string('quick_charging_spc_check', 5)->nullable();
            $table->string('quick_charging_spc', 60)->nullable();
            $table->string('placement_spc', 60)->nullable();
            $table->string('talk_time_spc', 60)->nullable();
            $table->string('music_play_spc', 60)->nullable();
            $table->string('usb_type_c_spc_check', 5)->nullable();
            $table->string('usb_type_c_spc', 60)->nullable();
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
        Schema::dropIfExists('mobilespectwos');
    }
}
