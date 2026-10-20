<div @click="openModal({{ \Illuminate\Support\Js::from($project) }}, '{{ asset($project['image'][0] ?? $project['images'][0] ?? '') }}')"
    class="group cursor-pointer relative bg-gradient-to-br from-pink-200 via-teal-100 to-teal-300 p-1.5 rounded-[2rem] shadow-sm hover:shadow-xl transition transform hover:-translate-y-1.5 duration-300">
    
    <div class="relative aspect-square rounded-[1.75rem] overflow-hidden bg-slate-100">
        <img src="{{ asset($project['image'][0] ?? $project['images'][0] ?? 'images/default.jpg') }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
        
        <div class="absolute inset-0 bg-linear-to-t from-teal-950/85 via-teal-900/30 to-teal-900/0 p-5 flex flex-col justify-between">
            <div class="flex justify-between items-start">
                <span class="text-[10px] font-bold text-white/80 bg-black/20 backdrop-blur-md px-2.5 py-1 rounded-full">{{ $project['id'] }}</span>
                <div class="w-8 h-8 rounded-full bg-white/90 text-[#23a099] flex items-center justify-center shadow-md group-hover:bg-[#23a099] group-hover:text-white transition">
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                </div>
            </div>
            
            <div class="bg-[#F5A6BA]/30 backdrop-blur-md p-3 rounded-2xl border border-white/30 mt-2 shadow-md">
                <span class="text-[9px] font-bold text-teal-200 tracking-wider uppercase bg-white/10 backdrop-blur-md px-2 py-0.5 rounded-md">{{ $project['category'] }}</span>
                <h3 class="text-xl font-extrabold text-white font-['Baloo_2'] mt-1">{{ $project['title'] }}</h3>
            </div>
        </div>
    </div>
    <i class="fa-solid fa-sparkles text-teal-400 text-xs absolute -bottom-1 -left-1"></i>
</div>