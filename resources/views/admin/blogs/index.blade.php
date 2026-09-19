@extends('admin.layouts.app')

@section('title', 'Manage Blogs')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">All Blog Posts</h5>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
        <i class="fa fa-plus"></i> Add Blog Post
    </a>
</div>

<div class="table-responsive bg-white rounded p-3">
    <table class="table align-middle">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Published</th>
                <th>Status</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category ?? '—' }}</td>
                <td>{{ $blog->published_date ? \Carbon\Carbon::parse($blog->published_date)->format('d M Y') : '—' }}</td>
                <td>
                    <span class="badge {{ $blog->is_active ? 'bg-success' : 'bg-secondary' }}">
                        {{ $blog->is_active ? 'Published' : 'Hidden' }}
                    </span>
                </td>
                <td class="text-end">
                    <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Delete this blog post?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="text-center text-muted py-4">No blog posts yet. Add your first one.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">{{ $blogs->links('pagination::bootstrap-5') }}</div>
@endsection