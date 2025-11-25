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
        Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('category_id');
        $table->string('title');
        $table->string('slug')->unique();
        $table->longText('description');
        $table->decimal('price', 10, 2);
        $table->decimal('sale_price', 10, 2)->nullable();
        $table->string('sku')->nullable();
        $table->integer('stock_qty')->default(0);
        $table->enum('stock_status', ['in_stock', 'out_of_stock'])->default('in_stock');
        $table->string('thumbnail')->nullable();
        $table->string('brand')->nullable();
        $table->string('tags')->nullable();
        $table->timestamps();

        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
