@extends('admin.layouts.app')

@section('title', 'Edit Course')

@section('content')
<div class="bg-white rounded p-4">
    <form method="POST" action="{{ route('admin.courses.update', $course) }}" enctype="multipart/form-data" id="courseEditForm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-select">
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Course Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $course->title) }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Course Image</label>

            @if($course->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" style="max-width: 200px; border-radius: 8px;">
                    <div><small class="text-muted">Current image — upload a new one below only if you want to replace it.</small></div>
                </div>
            @endif

            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="text-muted">Recommended size: 600x400px. Max 2MB.</small>
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Overview / Description</label>
            <div id="descriptionEditor" style="height: 180px; background: #fff;"></div>
            <textarea name="description" id="descriptionInput" style="display:none;">{{ old('description', $course->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Curriculum / Subjects Covered</label>
            <div id="curriculumEditor" style="height: 180px; background: #fff;"></div>
            <textarea name="curriculum" id="curriculumInput" style="display:none;">{{ old('curriculum', $course->curriculum) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Key Features of the Batch</label>
            <div id="keyFeaturesEditor" style="height: 180px; background: #fff;"></div>
            <textarea name="key_features" id="keyFeaturesInput" style="display:none;">{{ old('key_features', $course->key_features) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Eligibility &amp; Fees</label>
            <div id="eligibilityFeesEditor" style="height: 180px; background: #fff;"></div>
            <textarea name="eligibility_fees" id="eligibilityFeesInput" style="display:none;">{{ old('eligibility_fees', $course->eligibility_fees) }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Duration</label>
                <input type="text" name="duration" class="form-control" value="{{ old('duration', $course->duration) }}">
                @error('duration') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Mode</label>
                <select name="mode" class="form-select">
                    <option value="offline" {{ old('mode', $course->mode) === 'offline' ? 'selected' : '' }}>Offline</option>
                    <option value="online" {{ old('mode', $course->mode) === 'online' ? 'selected' : '' }}>Online</option>
                </select>
                @error('mode') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1"
                   {{ old('is_active', $course->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active (visible on website)</label>
        </div>

        <div class=" mb-3">
            <label class="form-label">Sort Order (within category)</label>
            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $course->sort_order) }}" min="1">
            <small class="text-muted">If you change this to a number already used, other courses in this category shift automatically.</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Course Fee (₹)</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $course->price ?? '') }}" placeholder="e.g. 63000">
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.snow.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.min.js"></script>
<script>
    const descriptionQuill = new Quill('#descriptionEditor', { theme: 'snow' });
    const curriculumQuill = new Quill('#curriculumEditor', { theme: 'snow' });
    const keyFeaturesQuill = new Quill('#keyFeaturesEditor', { theme: 'snow' });
    const eligibilityFeesQuill = new Quill('#eligibilityFeesEditor', { theme: 'snow' });

    // Pre-load existing content into each editor
    descriptionQuill.root.innerHTML = document.getElementById('descriptionInput').value;
    curriculumQuill.root.innerHTML = document.getElementById('curriculumInput').value;
    keyFeaturesQuill.root.innerHTML = document.getElementById('keyFeaturesInput').value;
    eligibilityFeesQuill.root.innerHTML = document.getElementById('eligibilityFeesInput').value;

    // Copy each editor's HTML into its hidden textarea right before submitting
    document.getElementById('courseEditForm').addEventListener('submit', function () {
        document.getElementById('descriptionInput').value = descriptionQuill.root.innerHTML;
        document.getElementById('curriculumInput').value = curriculumQuill.root.innerHTML;
        document.getElementById('keyFeaturesInput').value = keyFeaturesQuill.root.innerHTML;
        document.getElementById('eligibilityFeesInput').value = eligibilityFeesQuill.root.innerHTML;
    });
</script>
@endpush
@endsection

