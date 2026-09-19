@extends('admin.layouts.app')

@section('title', 'Edit Blog Post')

@section('content')
<div class="bg-white rounded p-4" >
    <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data" id="blogEditForm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Category / Tag</label>
                <input type="text" name="category" class="form-control" value="{{ old('category', $blog->category) }}">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Published Date</label>
                <input type="date" name="published_date" class="form-control"
                       value="{{ old('published_date', $blog->published_date ? \Carbon\Carbon::parse($blog->published_date)->format('Y-m-d') : '') }}">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Featured Image</label>

            @if($blog->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" style="max-width: 200px; border-radius: 8px;">
                    <div><small class="text-muted">Current image — upload a new one below only if you want to replace it.</small></div>
                </div>
            @endif

            <input type="file" name="image" class="form-control" accept="image/*">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Full Content</label>
            <div id="contentEditor" style="height: 300px; background: #fff;"></div>
            <textarea name="content" id="contentInput" style="display:none;">{{ old('content', $blog->content) }}</textarea>
        </div>

        <hr class="my-4">
        <h6 class="mb-3">SEO Settings</h6>

        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" rows="2" class="form-control" maxlength="255">{{ old('meta_description', $blog->meta_description) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $blog->meta_keywords) }}">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1"
                   {{ old('is_active', $blog->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Published (visible on website)</label>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.snow.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.min.js"></script>
<script>
    const contentQuill = new Quill('#contentEditor', { theme: 'snow' });

    contentQuill.root.innerHTML = document.getElementById('contentInput').value;

    document.getElementById('blogEditForm').addEventListener('submit', function () {
        document.getElementById('contentInput').value = contentQuill.root.innerHTML;
    });
</script>
@endpush
@endsection