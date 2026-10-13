<div x-show="isOpen" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 scale-95"
     x-transition:enter-end="opacity-100 scale-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 scale-100"
     x-transition:leave-end="opacity-0 scale-95"
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
     style="display: none;">
     
    <div @click.away="isOpen = false" class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 shadow-2xl relative space-y-4 border border-pink-100">
        <!-- Close Button -->
        <button @click="isOpen = false" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-slate-100 hover:bg-rose-100 hover:text-rose-600 text-slate-500 flex items-center justify-center transition font-bold text-sm z-20">
            &times;
        </button>

        <!-- Preview Gambar Utama -->
        <div class="aspect-video w-full rounded-2xl overflow-hidden bg-slate-100 border border-slate-200 relative group">
            <img :src="activeImage" 
                 :alt="activeProject.title" 
                 class="w-full h-full object-cover transition-all duration-300">

            <!-- Tombol Prev/Next -->
            <template x-if="(activeProject.image || activeProject.images) && (activeProject.image || activeProject.images).length > 1">
                <div>
                    <button @click="nextImage()" 
                            class="absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-black/40 hover:bg-black/70 text-white flex items-center justify-center backdrop-blur-md transition shadow-md z-10">
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </button>
                </div>
            </template>
        </div>

        <!-- Galeri Thumbnail Kecil -->
        <template x-if="(activeProject.image || activeProject.images) && (activeProject.image || activeProject.images).length > 1">
            <div class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-thin">
                <template x-for="(img, index) in (activeProject.image || activeProject.images)" :key="index">
                    <button @click="activeImage = '{{ asset('') }}' + img.replace(/^\//, '')" 
                            :class="activeImage === ('{{ asset('') }}' + img.replace(/^\//, '')) ? 'ring-2 ring-[#23a099] opacity-100' : 'opacity-60 hover:opacity-100'"
                            class="w-16 h-12 rounded-lg overflow-hidden shrink-0 border border-slate-200 transition">
                        <img :src="'{{ asset('') }}' + img.replace(/^\//, '')" class="w-full h-full object-cover">
                    </button>
                </template>
            </div>
        </template>

        <!-- Details Info -->
        <div class="space-y-3 pt-1">
            <div class="flex items-center gap-2">
                <span class="text-[9px] font-bold text-[#23a099] bg-teal-50 border border-teal-100 px-2.5 py-0.5 rounded-full uppercase" x-text="activeProject.category"></span>
                <span class="text-xs text-slate-400" x-text="activeProject.date"></span>
            </div>

            <h2 class="text-2xl font-extrabold text-slate-800 font-['Baloo_2']" x-text="activeProject.title"></h2>

            <p class="text-xs text-slate-600 leading-relaxed" x-text="activeProject.description"></p>

            <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                <div>
                    <span class="font-semibold text-slate-700">Client:</span> 
                    <span x-text="activeProject.client"></span>
                </div>
                <a href="{{ route('contact.index') }}" class="inline-flex items-center gap-1.5 bg-[#17938b] hover:bg-[#12726c] text-white font-bold px-4 py-2 rounded-xl text-xs transition">
                    <span>Book Similar Project</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>
        </div>
    </div>
</div>