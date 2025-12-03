@extends('layouts.master')

@section('title', 'Form Input')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Register</h5>

            <form action="{{ url('/welcome') }}" method="POST">
                @csrf

                {{-- First name --}}
                <div class="mb-3">
                    <label class="form-label" for="first_name">First name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>

                {{-- Last name --}}
                <div class="mb-3">
                    <label class="form-label" for="last_name">Last name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>

                {{-- Gender --}}
                <div class="mb-3">
                    <label class="form-label d-block">Gender:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>

                {{-- Nationality --}}
                <div class="mb-3">
                    <label class="form-label" for="nationality">Nationality:</label>
                    <select class="form-select" id="nationality" name="nationality">
                        <option value="Indonesian">Indonesian</option>
                        <option value="Singaporean">Singaporean</option>
                        <option value="Malaysian">Malaysian</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                {{-- Languages --}}
                <div class="mb-3">
                    <label class="form-label d-block">Language Spoken:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lang_id" name="languages[]" value="Bahasa Indonesia">
                        <label class="form-check-label" for="lang_id">Bahasa Indonesia</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lang_en" name="languages[]" value="English">
                        <label class="form-check-label" for="lang_en">English</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lang_other" name="languages[]" value="Other">
                        <label class="form-check-label" for="lang_other">Other</label>
                    </div>
                </div>

                {{-- Bio --}}
                <div class="mb-3">
                    <label class="form-label" for="bio">Bio:</label>
                    <textarea class="form-control" id="bio" name="bio" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>
@endsection