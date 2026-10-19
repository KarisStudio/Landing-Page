@extends('layouts.app')

@section('title', 'Karis Studio - Roblox Development Agency')

@section('content')
  <main>
    <!-- Hero Section -->
    @include('components.hero-section')

    <!-- About Section -->
    @include('components.about-section')

    <!-- Services Section -->
    @include('components.services')

    <!-- Project Showcase Section -->
    @include('components.project-section')

    <!-- News Section -->
    @include('components.news-section')
    
    <!-- Contact Section -->
    @include('components.members')

    <!-- Community Section -->
    @include('components.community-section')

  </main>
@endsection