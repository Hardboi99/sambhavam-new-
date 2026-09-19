@extends('admin.layouts.app')

@section('title', 'Manage Categories')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">All Categories</h5>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
        <i class="fa fa-plus"></i> Add Category
    </a>
</div>

<div class="table-responsive bg-white rounded p-3">
    <table class="table align-middle">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Sort Order</th>
                <th>Status</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->sort_order }}</td>
                <td>
                    <span class="badge {{ $category->is_active ? 'bg-success' : 'bg-secondary' }}">
                        {{ $category->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="text-end">
                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Delete this category? Courses inside it will also be deleted.')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="text-center text-muted py-4">No categories yet. Add your first one.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">{{ $categories->links() }}</div>
@endsection