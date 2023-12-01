<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buyproduct', function (Blueprint $table) {
            $table->id();
            $table->integer('buyer_id');
            $table->string('buyer');
            $table->integer('seller_id');
            $table->string('seller');
            $table->integer('product_id');
            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
