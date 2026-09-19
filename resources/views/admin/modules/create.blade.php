@extends('admin.layouts.app')

@section('title', 'Add Module Link')

@section('content')
<div class="bg-white rounded p-4" >
    <form method="POST" action="{{ route('admin.modules.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. UPSC Official Notifications">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">URL</label>
            <input type="url" name="url" class="form-control" value="{{ old('url') }}" placeholder="https://www.upsc.gov.in">
            @error('url') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description (optional)</label>
            <textarea name="description" rows="2" class="form-control" maxlength="500">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Sort Order</label>
            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $nextSortOrder) }}" min="1">
            <small class="text-muted">Auto-filled with the next available position.</small>
        </div>

        <button class="btn btn-primary">Save Module Link</button>
        <a href="{{ route('admin.modules.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>
@endsection