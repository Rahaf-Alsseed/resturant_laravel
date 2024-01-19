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
        Schema::create('book_orders', function (Blueprint $table) {
            $table->id();
            $table->datetime("date_book");
            $table->unsignedBigInteger("order_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("resturant_id");
            $table->foreign("order_id")->on("orders")->references("id")->onDelete('cascade');
            $table->foreign("user_id")->on("users")->references("id")->onDelete('cascade');
            $table->foreign("resturant_id")->on("resturants")->references("id")->onDelete('cascade');
            $table->unique(["date_book","order_id","user_id","resturant_id"]);
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
        Schema::dropIfExists('book_orders');
    }
};
