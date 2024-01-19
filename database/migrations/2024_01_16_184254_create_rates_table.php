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
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("resturant_id");
            $table->enum("rate",[0,1,2,3,4,5])->default(0);
            $table->string("comment")->nullable();
            $table->foreign("user_id")->on("users")->references("id")->onDelete("cascade");
            $table->foreign("resturant_id")->on("resturants")->references("id")->onDelete("cascade");
            $table->unique(["user_id","resturant_id"]);
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
        Schema::dropIfExists('rates');
    }
};
