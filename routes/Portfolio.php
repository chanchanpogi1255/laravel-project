<!-- resources/views/portfolio.blade.php -->
@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<div class="container-fluid" style="min-height: 100vh; display: flex; background-color: #2E5D63;">
    <!-- Left side -->
    <div class="col-md-6 p-5 text-white d-flex flex-column justify-content-center">
        <h1 class="mb-3">Gregory P. Perreault</h1>
        <p class="mb-4">Scholar, Author, Professor</p>
        <p class="mb-4">
            Gregory P. Perreault (Ph.D., M.A.) is a scholar of digital journalism, focusing on journalism, computational methods, and journalism ethics.
        </p>

        <div class="mt-4">
            <a href="#" class="btn btn-light me-2">ResearchGate</a>
            <a href="#" class="btn btn-light">OSF</a>
        </div>
    </div>

    <!-- Right side -->
    <div class="col-md-6 d-flex justify-content-center align-items-center p-5">
        <img src="{{ asset('images/profile.png') }}" alt="Profile Image" class="img-fluid rounded shadow">
    </div>
</div>
@endsection
