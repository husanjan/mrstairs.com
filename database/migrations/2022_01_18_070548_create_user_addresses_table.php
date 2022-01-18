<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->enum('addres_type', ['billing', 'shipping'])->unique();
            $table->string('street_address');
            $table->string('street_address_2')->nullable();
            $table->string('company_name')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('region')->nullable()->default('GB');
            $table->string('city');
            $table->string('county')->nullable();
            $table->string('post_code');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
}
