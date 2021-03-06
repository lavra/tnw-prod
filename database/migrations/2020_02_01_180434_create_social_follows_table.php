<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_follows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('local', 100)->nullable();
            $table->string('region', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('zip_code', 100)->nullable();
            $table->unsignedBigInteger('social_network_id');
            $table->foreign('social_network_id')->references('id')->on('social_networks');
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
        Schema::dropIfExists('social_follows');
    }
}
