@extends('layouts.app')

@section('title', 'Karis Studio - Roblox Development Agency')

@section('content')
  <main>
    <!-- Hero Section -->
    @include('components.hero-section')

    <!-- About Section -->
    @include('components.about-section')

    <!-- Project Showcase Section -->
    @include('components.project-section')

    <!-- News Section -->
    @include('components.news-section')

    <!-- Community Section -->
    @include('components.community-section')

  </main>
@endsection