@extends('layouts.app')

@section('content')
<section class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto space-y-8 font-['Raleway']">

    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 bg-teal-50 hover:bg-teal-100 text-[#17938b] font-bold px-4 py-2 rounded-full text-xs transition border border-teal-100">
                <i class="fa-solid fa-arrow-left text-[10px]"></i>
                <span>Back ke Home</span>
            </a>
        </div>
        <div class="text-xs text-slate-400 font-semibold">
            &copy; Karis Studio &bull; News & Articles
        </div>
    </div>

    <!-- Grid News (1 Kolom Mobile, 2 Kolom Tablet/Desktop) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 pt-4">
        @foreach ($newsList as $news)
            @include('partials.news-card', ['news' => $news])
        @endforeach
    </div>

</section>
@endsection