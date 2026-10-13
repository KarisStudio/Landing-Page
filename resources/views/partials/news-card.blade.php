<div class="bg-white rounded-[2rem] p-6 sm:p-8 shadow-xl relative flex flex-col justify-between space-y-6 border border-slate-100 hover:shadow-2xl transition duration-300">
    
    <div class="space-y-4">
        <!-- Category Badge & Date -->
        <div class="flex items-center gap-3">
            <span class="text-[10px] font-extrabold text-pink-500 bg-pink-50 border border-pink-100 px-2.5 py-1 rounded-full uppercase tracking-wider font-['Raleway']">
                {{ $news['category'] ?? 'NEWS' }}
            </span>
            <span class="text-xs font-semibold text-slate-400 font-['Raleway']">
                {{ $news['date'] ?? '' }}
            </span>
        </div>

        <!-- Title -->
        <h2 class="text-2xl font-extrabold text-[#315F60] font-['Baloo_2'] leading-snug tracking-tight">
            {{ $news['title'] }}
        </h2>

        <!-- Subtitle -->
        @if(!empty($news['subtitle']))
            <p class="text-xs font-bold text-slate-600 leading-relaxed font-['Raleway']">
                {{ $news['subtitle'] }}
            </p>
        @endif

        <!-- Content -->
        <p class="text-xs text-slate-500 leading-relaxed font-['Raleway']">
            {{ $news['content'] ?? '' }}
        </p>
    </div>

    <!-- Footer Direct Link Button -->
    <div class="pt-4 border-t border-slate-100">
        <a href="{{ $news['link'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-teal-50 hover:bg-[#17938b] text-[#17938b] hover:text-white font-bold px-5 py-2.5 rounded-full text-xs transition duration-300 border border-teal-100 font-['Raleway']">
            <span>Read More / Visit Site</span>
            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
        </a>
    </div>
</div>