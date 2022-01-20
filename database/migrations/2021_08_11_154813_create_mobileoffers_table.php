<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobileoffers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned();
            $table->string('offer_store')->nullable();
            $table->string('offer_title')->nullable();
            $table->string('offer_price')->nullable();
            $table->string('offter_url')->nullable();
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
        Schema::dropIfExists('mobileoffers');
    }
}
