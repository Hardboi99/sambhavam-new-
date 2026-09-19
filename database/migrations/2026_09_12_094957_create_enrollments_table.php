<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('reservation_number')->unique();
            $table->foreignId('course_id')->constrained();

            // Student Information
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('aadhar_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('previous_board')->nullable();
            $table->string('previous_school')->nullable();

            // Contact Information
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('address');
            $table->string('mobile_no');
            $table->string('whatsapp_number')->nullable();
            $table->string('email');
            $table->string('pincode')->nullable();

            // Fee Information
            $table->decimal('course_fee', 10, 2);
            $table->enum('payment_mode', ['full', 'installment'])->default('full');
            $table->enum('payment_method', ['online', 'offline'])->default('online');
            $table->decimal('amount_paid', 10, 2)->default(0);
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending');
            $table->string('razorpay_order_id')->nullable();
            $table->string('razorpay_payment_id')->nullable();

            $table->enum('admission_status', ['pending', 'confirmed', 'cancelled'])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};