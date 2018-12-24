<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_maps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_map_id')->default(0);
            $table->string('link');
            $table->string('label')->nullable();
            $table->text('meta')->nullable();
            $table->text('styles')->nullable();
            $table->text('scripts')->nullable();
            $table->text('template')->nullable();
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
        Schema::dropIfExists('site_maps');
    }
}
