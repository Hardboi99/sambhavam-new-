@extends('admin.layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="bg-white rounded p-4">
    <form method="POST" action="{{ route('admin.categories.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="e.g. Civil Services & Public Leadership">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tagline</label>
            <input type="text" name="tagline" class="form-control" value="{{ old('tagline') }}" placeholder="e.g. Prepare to Serve. Learn to Lead.">
        </div>

        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" rows="2" class="form-control" placeholder="One or two sentences shown on the homepage card">{{ old('short_description') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Sort Order</label>
            <small class="text-muted">Auto-filled with the next available position. If you type a number that's already used, existing categories from that point onward will shift down automatically.</small>
            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $nextSortOrder) }}" min="1">
            <small class="text-muted">Lower numbers appear first on the website.</small>
            @error('sort_order') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-primary">Save Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>
@endsection