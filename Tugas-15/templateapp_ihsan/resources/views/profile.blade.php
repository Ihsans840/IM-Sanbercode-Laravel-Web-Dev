@extends('layouts.master')

@section('title', 'Profile')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="mb-4">My Profile</h4>

            <p><strong>First name:</strong> {{ $first_name ?? '-' }}</p>
            <p><strong>Last name:</strong> {{ $last_name ?? '-' }}</p>
            <p><strong>Gender:</strong> {{ $gender ?? '-' }}</p>
            <p><strong>Nationality:</strong> {{ $nationality ?? '-' }}</p>
            <p><strong>Languages:</strong>
                @if(!empty($languages))
                    {{ is_array($languages) ? implode(', ', $languages) : $languages }}
                @else
                    -
                @endif
            </p>
            <p><strong>Bio:</strong> {{ $bio ?? '-' }}</p>
        </div>
    </div>
@endsection