<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->longText("description");
            $table->integer("price");
            $table->integer("quantity");
            $table->integer("status");
            $table->string("screen");
            $table->string("ram");
            $table->string("rom");
            $table->string("pin");
            $table->longText("imageUrl");
            $table->datetime("date");
            $table->unsignedBigInteger("providerId");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
