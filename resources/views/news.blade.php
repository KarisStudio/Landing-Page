@extends('layouts.app')

@section('content')
<section class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto space-y-8 font-['Raleway']">

    
    <!-- Top Back Navigation -->
        <div class="z-10 relative">
            <a href="{{ route('index') }}"
                class="inline-flex items-center gap-1.5 text-xs font-semibold text-teal-600 hover:text-teal-700 transition">
                <i class="fa-solid fa-arrow-left text-[10px]"></i>
                <span>Back to Karis Studio</span>
            </a>
        </div>

    <!-- Grid News (1 Kolom Mobile, 2 Kolom Tablet/Desktop) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 pt-4">
        @foreach ($newsList as $news)
            @include('partials.news-card', ['news' => $news])
        @endforeach
    </div>

</section>
@endsection