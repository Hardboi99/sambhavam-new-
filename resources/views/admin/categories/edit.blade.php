@extends('admin.layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="bg-white rounded p-4">
    <form method="POST" action="{{ route('admin.categories.update', $category) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tagline</label>
            <input type="text" name="tagline" class="form-control" value="{{ old('tagline', $category->tagline) }}" placeholder="e.g. Prepare to Serve. Learn to Lead.">
        </div>

        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" rows="2" class="form-control" placeholder="One or two sentences shown on the homepage card">{{ old('short_description', $category->short_description) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Sort Order</label>
            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $category->sort_order) }}" min="1">
            <small class="text-muted">If you change this to a number already used, other categories will shift automatically.</small>
            @error('sort_order') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1"
                   {{ old('is_active', $category->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active (visible on website)</label>
        </div>

        <button class="btn btn-primary">Save Changes</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>
@endsection