@extends('admin.layouts.app')

@section('title', 'Add Course')

@section('content')
<div class="bg-white rounded p-4" >
    <form method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data" id="courseForm">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-select">
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Course Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. UPSC Civil Services Examination">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Course Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="text-muted">Recommended size: 600x400px. Max 2MB.</small>
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Overview / Description</label>
            <div id="descriptionEditor" style="height: 180px; background: #fff;"></div>
            <textarea name="description" id="descriptionInput" style="display:none;">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Curriculum / Subjects Covered</label>
            <div id="curriculumEditor" style="height: 180px; background: #fff;"></div>
            <textarea name="curriculum" id="curriculumInput" style="display:none;">{{ old('curriculum') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Key Features of the Batch</label>
            <div id="keyFeaturesEditor" style="height: 180px; background: #fff;"></div>
            <textarea name="key_features" id="keyFeaturesInput" style="display:none;">{{ old('key_features') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Eligibility &amp; Fees</label>
            <div id="eligibilityFeesEditor" style="height: 180px; background: #fff;"></div>
            <textarea name="eligibility_fees" id="eligibilityFeesInput" style="display:none;">{{ old('eligibility_fees') }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Duration</label>
                <input type="text" name="duration" class="form-control" value="{{ old('duration') }}" placeholder="e.g. 12 Months">
                @error('duration') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Mode</label>
                <select name="mode" class="form-select">
                    <option value="offline" {{ old('mode', 'offline') === 'offline' ? 'selected' : '' }}>Offline</option>
                    <option value="online" {{ old('mode') === 'online' ? 'selected' : '' }}>Online</option>
                </select>
                @error('mode') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Sort Order (within category)</label>
                <input type="number" name="sort_order" class="form-control" min="1" placeholder="Leave blank to add at the end">
                <small class="text-muted">If you enter a number already used, other courses in this category shift automatically.</small>
            </div>

            <div class="mb-3">
                <label class="form-label">Course Fee (₹)</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $course->price ?? '') }}" placeholder="e.g. 63000">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Course</button>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.snow.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.min.js"></script>
<script>
    const editors = [
        { id: 'descriptionEditor', input: 'descriptionInput' },
        { id: 'curriculumEditor', input: 'curriculumInput' },
        { id: 'keyFeaturesEditor', input: 'keyFeaturesInput' },
        { id: 'eligibilityFeesEditor', input: 'eligibilityFeesInput' },
    ];

    const quillInstances = editors.map(e => {
        const quill = new Quill('#' + e.id, { theme: 'snow' });
        quill.root.innerHTML = document.getElementById(e.input).value;
        return { quill, inputId: e.input };
    });

    document.getElementById('courseForm').addEventListener('submit', function () {
        quillInstances.forEach(({ quill, inputId }) => {
            document.getElementById(inputId).value = quill.root.innerHTML;
        });
    });
</script>
@endpush
@endsection