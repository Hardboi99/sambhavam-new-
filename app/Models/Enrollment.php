<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'reservation_number', 'course_id', 'student_name', 'father_name', 'mother_name',
        'gender', 'aadhar_number', 'date_of_birth', 'previous_board', 'previous_school',
        'state', 'district', 'address', 'mobile_no', 'whatsapp_number', 'email', 'pincode',
        'course_fee', 'payment_mode', 'payment_method', 'amount_paid', 'payment_status',
        'razorpay_order_id', 'razorpay_payment_id', 'admission_status',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}