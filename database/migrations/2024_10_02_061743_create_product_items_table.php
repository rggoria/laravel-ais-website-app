<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('product_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->json('details');
            $table->text('disclaimer');
            $table->json('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_items');
    }
};
