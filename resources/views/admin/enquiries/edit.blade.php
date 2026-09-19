@extends('admin.layouts.app')

@section('title', 'Update Enquiry')

@section('content')
<div class="bg-white rounded p-4">

    <h6 class="mb-3">Enquiry Details</h6>
    <table class="table table-sm mb-4">
        <tr><th style="width: 140px;">Name</th><td>{{ $enquiry->name }}</td></tr>
        <tr><th>Phone</th><td>{{ $enquiry->phone }}</td></tr>
        <tr><th>Email</th><td>{{ $enquiry->email ?? '—' }}</td></tr>
        <tr><th>Course / Interest</th><td>{{ $enquiry->course_title ?? '—' }}</td></tr>
        <tr><th>Message</th><td>{{ $enquiry->message ?? '—' }}</td></tr>
        <tr><th>Received</th><td>{{ $enquiry->created_at->format('d M Y, h:i A') }}</td></tr>
    </table>

    <form method="POST" action="{{ route('admin.enquiries.update', $enquiry) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="new" {{ $enquiry->status === 'new' ? 'selected' : '' }}>New</option>
                <option value="contacted" {{ $enquiry->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                <option value="interested" {{ $enquiry->status === 'interested' ? 'selected' : '' }}>Interested</option>
                <option value="not_interested" {{ $enquiry->status === 'not_interested' ? 'selected' : '' }}>Not Interested</option>
                <option value="admission_done" {{ $enquiry->status === 'admission_done' ? 'selected' : '' }}>Admission Done</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Notes (follow-up remarks)</label>
            <textarea name="notes" rows="4" class="form-control" placeholder="e.g. Called on 5 Sep, asked to call back next week">{{ old('notes', $enquiry->notes) }}</textarea>
        </div>

        <button class="btn btn-primary">Save Changes</button>
        <a href="{{ route('admin.enquiries.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>
@endsection