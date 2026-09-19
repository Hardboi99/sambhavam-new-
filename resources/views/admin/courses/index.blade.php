@extends('admin.layouts.app')

@section('title', 'Manage Courses')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">All Courses</h5>
    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">
        <i class="fa fa-plus"></i> Add Course
    </a>
</div>

<div class="table-responsive bg-white rounded p-3">
    <table class="table align-middle">
        <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Category</th>
        <th>Duration</th>
        <th>Mode</th>
        <th>Status</th>
        <th class="text-end">Actions</th>
    </tr>
</thead>
<tbody>
    @forelse($courses as $course)
    <tr>
        <td>{{ $course->sort_order }}</td>
        <td>{{ $course->title }}</td>
        <td>{{ $course->category->name ?? '—' }}</td>
        <td>{{ $course->duration ?? '—' }}</td>
        <td>
            <span class="badge {{ $course->mode === 'offline' ? 'bg-primary' : 'bg-info' }}">
                {{ ucfirst($course->mode) }}
            </span>
        </td>
        <td>
            <span class="badge {{ $course->is_active ? 'bg-success' : 'bg-secondary' }}">
                {{ $course->is_active ? 'Active' : 'Inactive' }}
            </span>
        </td>
        <td class="text-end">
            <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-sm btn-outline-primary">
                <i class="fa fa-pen"></i>
            </a>
            <form action="{{ route('admin.courses.destroy', $course) }}" method="POST" class="d-inline"
                  onsubmit="return confirm('Delete this course?')">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @empty
    <tr><td colspan="7" class="text-center text-muted py-4">No courses yet. Add your first one.</td></tr>
    @endforelse
</tbody>
    </table>
</div>

<div class="mt-3">{{ $courses->links('pagination::bootstrap-5') }}</div>
@endsection