@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Dashboard</h5>

            <h2 class="fw-bold">
                Selamat Datang
                {{ $first_name ?? '' }} {{ $last_name ?? '' }}
            </h2>

            <p class="mt-3 fs-5">
                Terima kasih telah bergabung di SanberBook. Social media kita bersama!
            </p>

            {{-- optional: tampilkan info lain --}}
            @if(!empty($gender) || !empty($nationality) || !empty($languages) || !empty($bio))
                <hr>
                <h5 class="fw-semibold mb-3">Data yang kamu kirim:</h5>
                <ul>
                    <li>Gender: {{ $gender ?? '-' }}</li>
                    <li>Nationality: {{ $nationality ?? '-' }}</li>
                    <li>
                        Language Spoken:
                        @if(!empty($languages))
                            {{ implode(', ', $languages) }}
                        @else
                            -
                        @endif
                    </li>
                    <li>Bio: {{ $bio ?? '-' }}</li>
                </ul>
            @endif
        </div>
    </div>
@endsection