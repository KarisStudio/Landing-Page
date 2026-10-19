<template x-teleport="body">
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="fixed inset-0 min-h-screen w-screen z-[99999] flex items-center justify-center p-4 sm:p-6 bg-slate-900/60 backdrop-blur-md overflow-y-auto"
        style="display: none;">

        <div @click.away="isOpen = false"
            class="bg-white rounded-3xl max-w-5xl w-full p-6 sm:p-8 shadow-2xl relative border border-pink-100 my-auto max-h-[90vh] flex flex-col justify-between">

            <!-- Close Button -->
            <button @click="isOpen = false"
                class="absolute top-4 right-4 w-9 h-9 rounded-full bg-slate-100 hover:bg-rose-100 hover:text-rose-600 text-slate-500 flex items-center justify-center transition font-bold text-sm z-30">
                &times;
            </button>

            <!-- Layout 2 Kolom (Grid) dengan items-end agar footer kiri & tombol kanan sejajar di bawah -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-end">

                <!-- KOLOM KIRI: Detail Info (Lebar 5/12) -->
                <div class="lg:col-span-5 order-2 lg:order-1 flex flex-col justify-start h-full">

                    <!-- 1. FIXED HEADER (Category, Date, & Title) -->
                    <div class="space-y-2 shrink-0 pr-2">
                        <div class="flex items-center gap-2">
                            <span
                                class="text-[9px] font-bold text-[#23a099] bg-teal-50 border border-teal-100 px-2.5 py-0.5 rounded-full uppercase"
                                x-text="activeProject.category"></span>
                            <span class="text-xs text-slate-400 font-['Raleway']" x-text="activeProject.date"></span>
                        </div>

                        <h2 class="text-2xl sm:text-3xl font-extrabold text-[#315F60] font-['Baloo_2'] leading-snug"
                            x-text="activeProject.title"></h2>
                    </div>

                    <!-- 2. SCROLLABLE AREA (Menempel langsung di bawah judul) -->
                    <div class="max-h-[35vh] lg:max-h-[40vh] overflow-y-auto pr-2 scrollbar-thin my-3">
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-['Raleway'] whitespace-pre-line text-justify"
                            x-text="activeProject.description"></p>
                    </div>

                    <!-- 3. FIXED FOOTER (Tetap di paling bawah dengan mt-auto) -->
                    <div
                        class="pt-4 border-t border-slate-100 font-['Raleway'] shrink-0 flex items-center justify-between gap-3 mt-auto">
                        <div class="text-xs text-slate-500">
                            <span
                                class="font-semibold text-slate-700 block text-[10px] uppercase tracking-wider text-slate-400">Client</span>
                            <span class="font-bold text-slate-800" x-text="activeProject.client"></span>
                        </div>

                        <a href="{{ route('contact.index') }}"
                            class="inline-flex items-center justify-center gap-2 bg-[#F5A6BA] hover:bg-[#f87998] text-white font-bold px-4 py-2.5 rounded-xl text-xs transition shadow-md hover:shadow-lg shrink-0">
                            <span>Book Similar Project</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>

                </div>

                <!-- KOLOM KANAN: Preview Gambar, Galeri & Tombol Play (Lebar 7/12) -->
                <div class="lg:col-span-7 space-y-3 order-1 lg:order-2 flex flex-col justify-between h-full">
                    <div class="space-y-3">
                        <!-- Preview Gambar Utama -->
                        <div
                            class="aspect-video w-full rounded-2xl overflow-hidden bg-slate-100 border border-slate-200 relative group shadow-sm">
                            <img :src="activeImage" :alt="activeProject.title"
                                class="w-full h-full object-cover transition-all duration-300">

                            <!-- Tombol Prev/Next -->
                            <template
                                x-if="(activeProject.image || activeProject.images) && (activeProject.image || activeProject.images).length > 1">
                                <div>
                                    <button @click="nextImage()"
                                        class="absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-black/40 hover:bg-black/70 text-white flex items-center justify-center backdrop-blur-md transition shadow-md z-10">
                                        <i class="fa-solid fa-chevron-right text-xs"></i>
                                    </button>
                                </div>
                            </template>
                        </div>

                        <!-- Galeri Thumbnail Kecil -->
                        <template
                            x-if="(activeProject.image || activeProject.images) && (activeProject.image || activeProject.images).length > 1">
                            <div class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-thin">
                                <template x-for="(img, index) in (activeProject.image || activeProject.images)"
                                    :key="index">
                                    <button @click="activeImage = '{{ asset('') }}' + img.replace(/^\//, '')"
                                        :class="activeImage === ('{{ asset('') }}' + img.replace(/^\//, '')) ?
                                            'ring-2 ring-[#F5A6BA] opacity-100 scale-105' :
                                            'opacity-60 hover:opacity-100'"
                                        class="w-16 h-12 rounded-lg overflow-hidden shrink-0 border border-slate-200 transition duration-200">
                                        <img :src="'{{ asset('') }}' + img.replace(/^\//, '')"
                                            class="w-full h-full object-cover">
                                    </button>
                                </template>
                            </div>
                        </template>
                    </div>

                    <!-- Tombol Play Roblox (Tetap di kanan, tapi sejajar paling bawah) -->
                    <template x-if="activeProject.link || activeProject.url || activeProject.map_url">
                        <a :href="activeProject.link || activeProject.url || activeProject.map_url" target="_blank"
                            rel="noopener noreferrer"
                            style="background: linear-gradient(180deg, #F5A6BA 0%, #A5185F 100%);"
                            class="w-full inline-flex items-center justify-center gap-2 text-white font-bold px-4 py-2.5 rounded-xl text-xs transition shadow-md hover:opacity-90 hover:shadow-lg font-['Raleway'] mt-auto">
                            <i class="fa-solid fa-gamepad text-sm"></i>
                            <span>Play / Open Roblox Map</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px] ml-1 opacity-80"></i>
                        </a>
                    </template>
                </div>

            </div>
        </div>
    </div>
</template>
