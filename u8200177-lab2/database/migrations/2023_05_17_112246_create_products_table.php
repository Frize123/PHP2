<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('symbol_code')->unique();
            $table->text('detailed_content');
            $table->timestamps();
            $table->float('price');
            $table->string('image')->nullable();
            $table->integer('amount');
            $table->date('creation_date');
            $table->unsignedBigInteger('category_id')->nullable();
        });


        Schema::table(
            'products',
            function (Blueprint $table) {
                // $table->index('category_id','product_category_idx');
                $table->foreign('category_id', 'product_category_fk')->on('categories')->references('id')->onDelete('cascade')->onUpdate('cascade');
            }
        );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
