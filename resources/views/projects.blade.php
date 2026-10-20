@extends('layouts.app')

@section('content')
    <section
        class="min-h-screen py-8 sm:py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto space-y-8 relative overflow-hidden font-['Raleway']"
        x-data="projectModal()">

        <!-- Header Section -->

        <!-- Top Back Navigation -->
        <div class="z-10 relative">
            <a href="{{ route('index') }}"
                class="inline-flex items-center gap-1.5 text-xs font-semibold text-teal-600 hover:text-teal-700 transition">
                <i class="fa-solid fa-arrow-left text-[10px]"></i>
                <span>Back to Karis Studio</span>
            </a>
        </div>
        <div class="space-y-2">
            <span class="text-[10px] font-extrabold text-[#23a099] uppercase tracking-[0.2em]">
                KARIS / PROJECT ARCHIVE
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Baloo_2'] tracking-tight">
                <span
                    style="background: linear-gradient(94deg, #287D7A 0%, #36AA9C 48%, #D978A8 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent; display: inline-block;">
                    Projects
                </span>
            </h1>
            <p class="text-xs sm:text-sm text-slate-500 max-w-md">
                A showcase of the best work created by Karis Studio
            </p>
        </div>

        <!-- Grid Projects (3 Kolom per Baris di Desktop) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 pt-4">
            @foreach ($projects as $project)
                @include('partials.project-card', ['project' => $project])
            @endforeach
        </div>

        <!-- Partial Pop-Up Modal -->
        @include('partials.project-modal')

    </section>
@endsection

@push('scripts')
@endpush
