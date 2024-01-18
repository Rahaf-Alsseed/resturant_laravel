<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->datetime("order_date");
            $table->unsignedBigInteger("food_id");
            $table->unsignedBigInteger("user_id");
            $table->foreign("food_id")->on("food")->references("id");
            $table->foreign("user_id")->on("users")->references("id");
            $table->unique(["order_date","food_id","user_id"]);
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
        Schema::dropIfExists('orders');
    }
};
