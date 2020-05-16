<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiddingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidding', function (Blueprint $table) {
            $table->unsignedBigInteger('mission_id');
            $table->unsignedBigInteger('user_id');
            $table->string('status', 20)->default(\App\Enums\BidStatus::WAITING);
            $table->index(['mission_id', 'user_id']);
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
        Schema::dropIfExists('bidding');
    }
}
