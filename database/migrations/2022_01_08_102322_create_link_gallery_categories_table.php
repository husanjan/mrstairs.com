<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkGalleryCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_gallery_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gallery_id')->unsigned();
            $table->bigInteger('gallery_category_id')->unsigned();

            $table->foreign('gallery_category_id')->references('id')->on('gallery_categories');
            $table->foreign('gallery_id')->references('id')->on('galleries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_gallery_categories');
    }
}
