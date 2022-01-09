<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigInteger('gallery_item_id')->unsigned();
            $table->bigInteger('gallery_item_category_id')->unsigned();
            $table->timestamps();

            $table->foreign('gallery_item_category_id')->references('id')->on('gallery_item_categories');
            $table->foreign('gallery_item_id')->references('id')->on('gallery_items');
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
