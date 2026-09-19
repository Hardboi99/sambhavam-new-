@extends('admin.layouts.app')

@section('title', 'Edit Module Link')

@section('content')
<div class="bg-white rounded p-4">
    <form method="POST" action="{{ route('admin.modules.update', $module) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $module->title) }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">URL</label>
            <input type="url" name="url" class="form-control" value="{{ old('url', $module->url) }}">
            @error('url') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description (optional)</label>
            <textarea name="description" rows="2" class="form-control" maxlength="500">{{ old('description', $module->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Sort Order</label>
            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $module->sort_order) }}" min="1">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1"
                   {{ old('is_active', $module->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active (visible on website)</label>
        </div>

        <button class="btn btn-primary">Save Changes</button>
        <a href="{{ route('admin.modules.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>
@endsection