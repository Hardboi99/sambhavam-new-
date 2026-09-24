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

        <div class="mb-3 editor-wrapper" id="contentWrapper">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="form-label mb-0 fw-semibold">Full Content</label>
                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-outline-primary active btn-mode-visual" title="Visual Rich Text Editor">
                        <i class="fa fa-eye me-1"></i> Visual
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-mode-html" title="Raw HTML Code Editor">
                        <i class="fa fa-code me-1"></i> &lt;/&gt; HTML Code
                    </button>
                </div>
            </div>
            <div class="quill-editor-container">
                <div id="contentEditor" style="height: 300px; background: #fff;"></div>
            </div>
            <textarea name="content" id="contentInput" class="form-control html-code-textarea" style="display:none; min-height: 300px; font-family: 'Consolas', 'Fira Code', 'Courier New', monospace; font-size: 13.5px; background: #1e293b; color: #f8fafc; border-radius: 6px; padding: 12px; line-height: 1.6; resize: vertical;" placeholder="Enter or paste raw HTML code here, e.g. <p>...</p>">{{ old('content', $blog->content) }}</textarea>
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
    const toolbarOptions = [
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        ['bold', 'italic', 'underline', 'strike'],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'align': [] }],
        ['link', 'blockquote', 'code-block'],
        ['clean']
    ];

    const contentQuill = new Quill('#contentEditor', {
        theme: 'snow',
        modules: { toolbar: toolbarOptions }
    });

    const contentInput = document.getElementById('contentInput');
    const contentWrapper = document.getElementById('contentWrapper');
    let contentMode = 'visual';

    contentQuill.root.innerHTML = contentInput.value || '';

    if (contentWrapper) {
        const visualBtn = contentWrapper.querySelector('.btn-mode-visual');
        const htmlBtn = contentWrapper.querySelector('.btn-mode-html');
        const quillContainer = contentWrapper.querySelector('.quill-editor-container');

        visualBtn?.addEventListener('click', function () {
            if (contentMode === 'visual') return;
            contentQuill.root.innerHTML = contentInput.value;
            contentInput.style.display = 'none';
            quillContainer.style.display = 'block';
            visualBtn.classList.add('active');
            htmlBtn.classList.remove('active');
            contentMode = 'visual';
        });

        htmlBtn?.addEventListener('click', function () {
            if (contentMode === 'html') return;
            contentInput.value = contentQuill.root.innerHTML;
            quillContainer.style.display = 'none';
            contentInput.style.display = 'block';
            htmlBtn.classList.add('active');
            visualBtn.classList.remove('active');
            contentMode = 'html';
            contentInput.focus();
        });
    }

    document.getElementById('blogEditForm').addEventListener('submit', function () {
        if (contentMode === 'visual') {
            contentInput.value = contentQuill.root.innerHTML;
        }
    });
</script>
@endpush
@endsection