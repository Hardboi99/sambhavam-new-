<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'donation_number',
        'donor_name',
        'email',
        'mobile',
        'pan_number',
        'city',
        'state',
        'address',
        'pincode',
        'is_anonymous',
        'amount',
        'cause',
        'donation_frequency',
        'payment_method',
        'payment_status',
        'razorpay_order_id',
        'razorpay_payment_id',
        'razorpay_signature',
        'notes',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'is_anonymous' => 'boolean',
    ];
}
