<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilespecthreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobilespecthrees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned();
            $table->string('wlan_wifi_features_spc', 60)->nullable();
            $table->string('wlan_wifi_calling_spc_check', 5)->nullable();
            $table->string('wlan_wifi_calling_spc', 60)->nullable();
            $table->string('wlan_bluetooth_spc_check', 5)->nullable();
            $table->string('wlan_bluetooth_spc', 60)->nullable();
            $table->string('wlan_gps_spc_check', 5)->nullable();
            $table->string('wlan_gps_spc', 60)->nullable();
            $table->string('wlan_infrared_spc', 60)->nullable();
            $table->string('wlan_wifi_hotspot_spc', 60)->nullable();
            $table->string('wlan_nfc_spc', 60)->nullable();
            $table->string('wlan_usb_spc', 60)->nullable();
            $table->string('network_technology_spc', 200)->nullable();
            $table->string('network_network_support_spc', 200)->nullable();
            $table->string('network_speed_spc', 60)->nullable();
            $table->string('network_sim_spc', 60)->nullable();
            $table->string('network_volte_spc_check', 5)->nullable();
            $table->string('network_volte_spc', 60)->nullable();
            $table->string('network_sim_size_spc', 200)->nullable();
            $table->string('fm_radio_spc_check', 5)->nullable();
            $table->string('fm_radio_spc', 60)->nullable();
            $table->string('loudspeaker_spc_check', 5)->nullable();
            $table->string('loudspeaker_spc', 60)->nullable();
            $table->string('audio_player_spc_check', 5)->nullable();
            $table->string('audio_player_spc', 60)->nullable();
            $table->string('audio_jack_spc_check', 5)->nullable();
            $table->string('audio_jack_spc', 60)->nullable();
            $table->string('alert_types_spc', 200)->nullable();
            $table->string('ring_tones_spc', 60)->nullable();
            $table->string('stereo_speakers_spc', 5)->nullable();
            $table->string('fingerprint_sensor_spc', 5)->nullable();
            $table->string('fingerprint_sensor_position_spc', 60)->nullable();
            $table->string('fingerprint_sensor_type_spc', 60)->nullable();
            $table->string('other_sensors_spc', 60)->nullable();
            $table->string('manufactured_spc', 60)->nullable();
            $table->string('assembled_spc', 60)->nullable();
            $table->string('others_features_spc', 60)->nullable();
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
        Schema::dropIfExists('mobilespecthrees');
    }
}
