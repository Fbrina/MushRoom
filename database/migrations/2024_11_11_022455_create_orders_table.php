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

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Links to users table
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Links to products table
            $table->string('tracking_number');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->enum('status', ['pending', 'approved', 'sent', 'canceled']);
            $table->timestamps();
        });

    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
