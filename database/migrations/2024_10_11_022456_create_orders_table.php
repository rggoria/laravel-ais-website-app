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
            $table->id(); // Auto-incrementing primary key
            $table->string('serial_number')->unique(); // Unique serial number
            $table->string('order_id')->unique(); // Unique order ID
            $table->date('order_date'); // Date of order
            $table->string('candidate_name'); // Name of the candidate
            $table->string('candidate_email'); // Email of the candidate
            $table->string('requestor'); // Name of the requestor
            $table->string('status'); // Order status
            $table->string('status_icon')->nullable(); // Status icon
            $table->json('remarks')->nullable(); // Store remarks as a JSON array
            $table->timestamps(); // created_at and updated_at
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
