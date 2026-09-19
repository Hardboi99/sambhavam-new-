@extends('admin.layouts.app')

@section('title', 'Manage Modules')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">Government / External Module Links</h5>
    <a href="{{ route('admin.modules.create') }}" class="btn btn-primary">
        <i class="fa fa-plus"></i> Add Module Link
    </a>
</div>

<div class="table-responsive bg-white rounded p-3">
    <table class="table align-middle">
        <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th>Sort Order</th>
                <th>Status</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($modules as $module)
            <tr>
                <td>{{ $module->title }}</td>
                <td><a href="{{ $module->url }}" target="_blank">{{ Str::limit($module->url, 40) }}</a></td>
                <td>{{ $module->sort_order }}</td>
                <td>
                    <span class="badge {{ $module->is_active ? 'bg-success' : 'bg-secondary' }}">
                        {{ $module->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="text-end">
                    <a href="{{ route('admin.modules.edit', $module) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.modules.destroy', $module) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Delete this module link?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="text-center text-muted py-4">No module links yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">{{ $modules->links('pagination::bootstrap-5') }}</div>
@endsection