@extends('admin.layouts.app')

@section('title', 'Add Blog Post')

@section('content')
<div class="bg-white rounded p-4" >
    <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data" id="blogCreateForm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Category / Tag</label>
                <input type="text" name="category" class="form-control" value="{{ old('category') }}" placeholder="e.g. Education, Career Guidance">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Published Date</label>
                <input type="date" name="published_date" class="form-control" value="{{ old('published_date', date('Y-m-d')) }}">
                <small class="text-muted">Leave as-is to publish with today's date.</small>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Featured Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="text-muted">Recommended size: 800x500px. Max 2MB.</small>
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Full Content</label>
            <div id="contentEditor" style="height: 300px; background: #fff;"></div>
            <textarea name="content" id="contentInput" style="display:none;">{{ old('content') }}</textarea>
        </div>

        <hr class="my-4">
        <h6 class="mb-3">SEO Settings</h6>

        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}" placeholder="Shown in Google search results — can differ from the page title above">
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" rows="2" class="form-control" maxlength="255">{{ old('meta_description') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords') }}" placeholder="comma, separated, keywords">
        </div>

        <button type="submit" class="btn btn-primary">Save Blog Post</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.snow.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.min.js"></script>
<script>
    const contentQuill = new Quill('#contentEditor', { theme: 'snow' });

    contentQuill.root.innerHTML = document.getElementById('contentInput').value;

    document.getElementById('blogCreateForm').addEventListener('submit', function () {
        document.getElementById('contentInput').value = contentQuill.root.innerHTML;
    });
</script>
@endpush
@endsection