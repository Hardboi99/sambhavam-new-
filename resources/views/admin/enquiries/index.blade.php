@extends('admin.layouts.app')

@section('title', 'Enquiries')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">All Enquiries</h5>

    <form method="GET" class="d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Search name, phone, course"
               value="{{ request('search') }}">

        <select name="status" class="form-select" onchange="this.form.submit()">
            <option value="">All Statuses</option>
            <option value="new" {{ request('status') === 'new' ? 'selected' : '' }}>New</option>
            <option value="contacted" {{ request('status') === 'contacted' ? 'selected' : '' }}>Contacted</option>
            <option value="interested" {{ request('status') === 'interested' ? 'selected' : '' }}>Interested</option>
            <option value="not_interested" {{ request('status') === 'not_interested' ? 'selected' : '' }}>Not Interested</option>
            <option value="admission_done" {{ request('status') === 'admission_done' ? 'selected' : '' }}>Admission Done</option>
        </select>

        <button class="btn btn-outline-secondary"><i class="fa fa-search"></i></button>
    </form>
</div>

<div class="table-responsive bg-white rounded p-3">
    <table class="table align-middle">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Course / Interest</th>
                <th>Status</th>
                <th>Received</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($enquiries as $enquiry)
            @php
                $statusColors = [
                    'new' => 'bg-secondary',
                    'contacted' => 'bg-info',
                    'interested' => 'bg-warning text-dark',
                    'not_interested' => 'bg-danger',
                    'admission_done' => 'bg-success',
                ];
                $statusLabels = [
                    'new' => 'New',
                    'contacted' => 'Contacted',
                    'interested' => 'Interested',
                    'not_interested' => 'Not Interested',
                    'admission_done' => 'Admission Done',
                ];
            @endphp
            <tr>
                <td>{{ $enquiry->name }}</td>
                <td><a href="tel:{{ $enquiry->phone }}">{{ $enquiry->phone }}</a></td>
                <td>{{ $enquiry->email ?? '—' }}</td>
                <td>{{ $enquiry->course_title ?? '—' }}</td>
                <td>
                    <span class="badge {{ $statusColors[$enquiry->status] ?? 'bg-secondary' }}">
                        {{ $statusLabels[$enquiry->status] ?? ucfirst($enquiry->status) }}
                    </span>
                </td>
                <td>{{ $enquiry->created_at->format('d M Y, h:i A') }}</td>
                <td class="text-end">
                    <a href="{{ route('admin.enquiries.edit', $enquiry) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.enquiries.destroy', $enquiry) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Delete this enquiry?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="7" class="text-center text-muted py-4">No enquiries yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">{{ $enquiries->links('pagination::bootstrap-5') }}</div>
@endsection