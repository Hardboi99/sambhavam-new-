<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('donation_number')->unique();
            $table->string('donor_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('pan_number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('pincode')->nullable();
            $table->boolean('is_anonymous')->default(false);

            $table->decimal('amount', 12, 2);
            $table->string('cause')->default('Sambhavam Foundation General Impact Fund');
            $table->enum('donation_frequency', ['one_time', 'monthly'])->default('one_time');
            $table->enum('payment_method', ['online', 'bank_transfer'])->default('online');
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending');

            $table->string('razorpay_order_id')->nullable();
            $table->string('razorpay_payment_id')->nullable();
            $table->string('razorpay_signature')->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
