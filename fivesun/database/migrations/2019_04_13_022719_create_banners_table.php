<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bannerItem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('city_id');
            $table->integer('banner_id');
            $table->string('url');
            $table->integer('order');
            $table->integer('navigate_to');
            $table->string('description');
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
        Schema::dropIfExists('bannerItem');
    }
}
