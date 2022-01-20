<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilecategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobilecategories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('category_name');
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('mobileposts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('mobicatnames')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobilecategories');
    }
}
