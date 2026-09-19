@extends('layouts.app')

@section('title', 'Enroll Now | Sambhavam Academy')

@section('content')
<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Enrollment Form</h1>
        </div>
    </div>
</section>

<section class="pt-80 pb-80">
    <div class="container">
        <form method="POST" action="{{ route('enroll.store') }}" class="bg-white rounded shadow-sm p-4" id="enrollForm">
            @csrf
            <input type="hidden" name="course_id" value="{{ $course->id }}">

            <!-- Course Info (read-only, auto-filled) -->
            <div class="enroll-section-header">Selected Course</div>
            <div class="row mb-4">
                <div class="col-md-6 mb-2">
                    <label class="form-label fw-bold">Course Name</label>
                    <input type="text" class="form-control" value="{{ $course->title }}" readonly>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label fw-bold">Category</label>
                    <input type="text" class="form-control" value="{{ $course->category->name }}" readonly>
                </div>
            </div>

            <!-- Student Information -->
            <div class="enroll-section-header">Student Information</div>
            <div class="row mb-4">
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Student Name *</label>
                    <input type="text" name="student_name" class="form-control" required>
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Father Name *</label>
                    <input type="text" name="father_name" class="form-control" required>
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Mother Name *</label>
                    <input type="text" name="mother_name" class="form-control" required>
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Gender *</label>
                    <select name="gender" class="form-select" required>
                        <option value="">--Select--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Aadhar Number</label>
                    <input type="text" name="aadhar_number" class="form-control">
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Date of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control">
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Previous Board</label>
                    <input type="text" name="previous_board" class="form-control">
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Previous School/College</label>
                    <input type="text" name="previous_school" class="form-control">
                </div>
            </div>

            <!-- Contact Information -->
            <div class="enroll-section-header">Contact Information</div>
            <div class="row mb-4">
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">State</label>
                    <input type="text" name="state" class="form-control">
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">District</label>
                    <input type="text" name="district" class="form-control">
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label fw-bold">Address *</label>
                    <input type="text" name="address" class="form-control" required>
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Mobile No *</label>
                    <input type="tel" name="mobile_no" class="form-control" required>
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">WhatsApp Number</label>
                    <input type="tel" name="whatsapp_number" class="form-control">
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Email Address *</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-bold">Pincode</label>
                    <input type="text" name="pincode" class="form-control">
                </div>
            </div>

            <!-- Fee Information -->
            <div class="enroll-section-header">Fee Information</div>
            <div class="row mb-4">
                <div class="col-md-4 mb-2">
                    <label class="form-label fw-bold">Course Fee (₹)</label>
                    <input type="text" class="form-control" value="{{ number_format($course->price ?? 0) }}" readonly>
                </div>
                <div class="col-md-4 mb-2">
                    <label class="form-label fw-bold">Payment Mode *</label>
                    <select name="payment_mode" id="paymentMode" class="form-select" required>
                        <option value="full">Full Payment (Online)</option>
                        <option value="installment">Installment (Visit Centre)</option>
                    </select>
                </div>
                <div class="col-md-4 mb-2" id="paymentNote">
                    <div class="alert alert-info mb-0 mt-4 py-2 px-3" style="font-size: 0.85rem;">
                        Full payment can be completed online via Razorpay right after submitting this form.
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary px-4">Cancel</a>
                <button type="submit" class="ed-primary-btn px-4">Proceed</button>
            </div>
        </form>
    </div>
</section>

<style>
    .enroll-section-header {
        background: #016d77;
        color: #fff;
        font-weight: 600;
        padding: 10px 16px;
        border-radius: 6px;
        margin-bottom: 20px;
    }
</style>

<script>
    document.getElementById('paymentMode').addEventListener('change', function () {
        const note = document.getElementById('paymentNote').querySelector('.alert');
        if (this.value === 'installment') {
            note.textContent = 'Installment plans require an in-person visit to complete admission at your nearest centre.';
        } else {
            note.textContent = 'Full payment can be completed online via Razorpay right after submitting this form.';
        }
    });
</script>
@endsection