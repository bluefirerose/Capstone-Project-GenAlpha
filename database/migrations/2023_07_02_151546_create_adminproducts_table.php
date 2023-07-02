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
        Schema::create('adminproducts', function (Blueprint $table) {
            $table->id();
            $table->string('productname');
            $table->decimal('productprice', 8, 2);
            $table->string('productcategory');
            $table->text('productdescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminproducts');
    }
};
