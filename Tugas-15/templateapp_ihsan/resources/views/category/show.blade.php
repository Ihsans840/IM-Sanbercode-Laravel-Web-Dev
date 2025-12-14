@extends('layouts.master')

@section('title', 'Category Detail')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Category Detail</h5>

                <p><strong>ID:</strong> {{ $category->id }}</p>
                <p><strong>Name:</strong> {{ $category->name }}</p>
                <p><strong>Description:</strong> {{ $category->description }}</p>

                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">
                    Edit
                </a>
                <a href="{{ route('category.index') }}" class="btn btn-secondary">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>
@endsection