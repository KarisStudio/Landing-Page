@extends('layouts.app')

@section('content')
    <section
        class="min-h-screen py-8 sm:py-12 px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto space-y-8 sm:space-y-10 relative overflow-hidden font-['Raleway']">

        <!-- Top Back Navigation -->
        <div class="z-10 relative">
            <a href="{{ route('index') }}"
                class="inline-flex items-center gap-1.5 text-xs font-semibold text-teal-600 hover:text-teal-700 transition">
                <i class="fa-solid fa-arrow-left text-[10px]"></i>
                <span>Back to Karis Studio</span>
            </a>
        </div>

        <!-- HERO SECTION CARD -->
        <div
            class="bg-white/90 backdrop-blur-md p-6 sm:p-10 rounded-3xl border border-teal-100/60 shadow-sm relative overflow-hidden">
            <div class="max-w-2xl space-y-4">
                <span
                    class="inline-block bg-[#e0f7f3] text-[#17938b] text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                    CAREERS AT KARIS STUDIO
                </span>

                <h1
                    class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#315F60] tracking-tight font-['Baloo_2'] leading-[1.1]">
                    Create lovely worlds. <br class="hidden sm:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#ce6999] via-[#21a099] to-[#17938b]">
                        Work from anywhere.
                    </span>
                </h1>

                <p class="text-xs sm:text-sm text-slate-500 leading-relaxed max-w-xl pt-1">
                    We're looking for creative people who love making memorable Roblox experiences. All listed roles are
                    <strong class="text-slate-700 font-semibold">fully remote</strong>—collaborate with us from wherever you
                    feel inspired.
                </p>

                <!-- Feature Tags -->
                <div class="flex flex-wrap items-center gap-2 sm:gap-3 pt-3 text-[11px] font-semibold text-slate-600">
                    <div class="flex items-center gap-1.5 bg-slate-50 border border-slate-200/80 px-3 py-1.5 rounded-full">
                        <i class="fa-solid fa-wifi text-teal-500 text-[10px]"></i>
                        <span>100% Remote</span>
                    </div>
                    <div class="flex items-center gap-1.5 bg-slate-50 border border-slate-200/80 px-3 py-1.5 rounded-full">
                        <i class="fa-solid fa-globe text-teal-500 text-[10px]"></i>
                        <span>Work from anywhere</span>
                    </div>
                    <div class="flex items-center gap-1.5 bg-slate-50 border border-slate-200/80 px-3 py-1.5 rounded-full">
                        <i class="fa-regular fa-heart text-pink-400 text-[10px]"></i>
                        <span>Creative team</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- BANNER: YOUR NEXT CREATIVE QUEST -->
        <div
            class="relative bg-gradient-to-r from-[#ffd9eb] via-[#f0e6f7] to-[#d6f7f2] p-8 sm:p-12 rounded-[2.5rem] border border-white/60 shadow-sm overflow-hidden flex flex-col md:flex-row items-start md:items-center justify-between gap-8">

            <!-- SISI KIRI: TEKS & TOMBOL -->
            <div class="space-y-4 max-w-md z-10">
                <span class="text-[10px] font-extrabold text-[#23a099] uppercase tracking-[0.2em] font-['Raleway']">
                    YOUR NEXT CREATIVE QUEST
                </span>

                <h2
                    class="text-3xl sm:text-4xl font-extrabold text-[#315F60] font-['Baloo_2'] leading-[1.1] tracking-tight">
                    Make something <span class="text-[#C7659D]">players</span><br>
                    <span class="text-[#C7659D]">love.</span>
                </h2>

                <p class="text-xs text-[#63787d] leading-relaxed font-['Raleway'] max-w-sm">
                    Bring your skills, your ideas, and a little imagination. Let's build the next memorable Roblox
                    experience together.
                </p>

                <div class="pt-2">
                    <a href="#open-roles"
                        class="inline-flex items-center gap-2 bg-white text-[#23a099] text-xs font-bold px-6 py-3 rounded-full shadow-md hover:shadow-lg hover:scale-105 transition transform font-['Raleway']">
                        <span>Explore open roles</span>
                        <i class="fa-solid fa-arrow-down-long text-[11px] rotate-45"></i>
                    </a>
                </div>
            </div>

            <!-- SISI KANAN: GRAFIS ICON, ORBIT & FLOATING BADGES -->
            <div class="relative w-full md:w-auto flex items-center justify-center min-h-55 md:min-w-[320px] z-10">

                <!-- Lingkaran Orbit Bintang Background (Garis Tipis) -->
                <div
                    class="absolute w-56 h-56 rounded-full border border-white/60 pointer-events-none flex items-center justify-center">
                    <div class="w-44 h-44 rounded-full border border-white/40"></div>
                </div>

                <!-- Bintang Sparkle Kecil Kiri Bawah -->
                <i class="fa-solid fa-sparkles text-white/80 text-xs absolute left-4 bottom-6 pointer-events-none"></i>

                <!-- Bintang Sparkle Besar Kanan Atas -->
                <i class="fa-solid fa-sparkles text-white text-base absolute right-6 top-6 pointer-events-none"></i>

                <!-- Floating Badge: REMOTE (Kiri Atas) -->
                <div
                    class="absolute -top-1 left-2 sm:left-6 bg-white/90 backdrop-blur-md px-3.5 py-1.5 rounded-full shadow-md border border-white/80 flex items-center gap-1.5 z-20">
                    <i class="fa-solid fa-wifi text-[10px] text-[#23a099]"></i>
                    <span
                        class="text-[9px] font-extrabold text-[#23a099] uppercase tracking-wider font-['Raleway']">REMOTE</span>
                </div>

                <div
                    class="w-28 h-28 bg-gradient-to-br from-white/90 to-pink-50/80 backdrop-blur-md rounded-3xl shadow-xl border border-white/90 flex items-center justify-center relative rotate-[-12deg] z-10">
                    <div class="relative flex items-center justify-center">
                        <!-- Bayangan Bintang (Shadow Soft) -->
                        <svg class="w-12 h-12 fill-pink-200/80 absolute translate-x-1 translate-y-1" viewBox="0 0 24 24">
                            <path
                                d="M12 2C12 7.523 7.523 12 2 12c5.523 0 10 4.477 10 10 0-5.523 4.477-10 10-10-5.523 0-10-4.477-10-10z" />
                        </svg>

                        <!-- Bintang Utama (Pink Magenta) -->
                        <svg class="w-12 h-12 fill-[#C76DA7] relative z-10" viewBox="0 0 24 24">
                            <path
                                d="M12 2C12 7.523 7.523 12 2 12c5.523 0 10 4.477 10 10 0-5.523 4.477-10 10-10-5.523 0-10-4.477-10-10z" />
                        </svg>
                    </div>

                    <!-- 3 Akses Dot / Rounded Squircle di Sudut -->
                    <span class="w-3.5 h-3.5 rounded-lg bg-[#8BDCC7] absolute top-3 right-4 rotate-12"></span>
                    <span class="w-3.5 h-3.5 rounded-lg bg-[#C3B1EF] absolute bottom-4 left-4 -rotate-6"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-[#F3A8CA] absolute bottom-6 right-5"></span>
                </div>

                <div
                    class="absolute -bottom-1 right-2 sm:right-4 bg-white/90 backdrop-blur-md px-3.5 py-1.5 rounded-full shadow-md border border-white/80 flex items-center gap-1.5 z-20">
                    <i class="fa-solid fa-wand-magic-sparkles text-[10px] text-[#23a099]"></i>
                    <span
                        class="text-[9px] font-extrabold text-[#23a099] uppercase tracking-wider font-['Raleway']">CREATE</span>
                </div>

            </div>
        </div>

        <div id="open-roles" class="space-y-6 pt-4">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-2 border-b border-slate-200/60 pb-3">
                <div>
                    <span class="text-[9px] sm:text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                        THE OPPORTUNITY BOARD
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#315F60] font-['Baloo_2']">
                        Find your <span class="text-[#C7659D]">role.</span>
                    </h2>
                </div>
                <p class="text-xs text-slate-400">Four ways to bring your talent into our worlds.</p>
            </div>

            <!-- Role List -->
            <div class="space-y-3.5">
                <!-- Role 1: Roblox Builder -->
                <div
                    class="bg-white/80 backdrop-blur-sm p-4 sm:p-5 rounded-2xl border border-slate-200/70 hover:border-teal-300 transition shadow-sm hover:shadow flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="flex items-start gap-3.5">
                        <div
                            class="w-10 h-10 rounded-xl bg-pink-100/80 text-pink-500 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-cubes text-base"></i>
                        </div>
                        <div class="space-y-1">
                            <div class="flex flex-wrap items-center gap-2">
                                <h3 class="text-base font-extrabold text-[#315F60] font-['Baloo_2']">Roblox Builder</h3>
                                <span
                                    class="bg-teal-50 text-teal-700 border border-teal-100 text-[9px] font-semibold px-2 py-0.5 rounded-full font-['Raleway']">
                                    Environment Design
                                </span>
                            </div>
                            <p class="text-xs text-slate-500 leading-relaxed font-['Raleway']">
                                Build polished environments, detailed maps, and immersive worlds that bring each project's
                                vision to life.
                            </p>
                        </div>
                    </div>
                    <a href="#apply"
                        class="w-full sm:w-auto shrink-0 bg-slate-50 hover:bg-teal-500 hover:text-white text-slate-700 text-xs font-bold px-4 py-2 rounded-xl border border-slate-200/80 hover:border-teal-500 transition flex items-center justify-center gap-1.5 group font-['Raleway']">
                        <span>Apply</span>
                        <i
                            class="fa-solid fa-arrow-up-right-from-square text-[10px] group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                </div>

                <!-- Role 2: Roblox Scripter -->
                <div
                    class="bg-white/80 backdrop-blur-sm p-4 sm:p-5 rounded-2xl border border-slate-200/70 hover:border-teal-300 transition shadow-sm hover:shadow flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="flex items-start gap-3.5">
                        <div
                            class="w-10 h-10 rounded-xl bg-teal-100/80 text-teal-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-code text-base"></i>
                        </div>
                        <div class="space-y-1">
                            <div class="flex flex-wrap items-center gap-2">
                                <h3 class="text-base font-extrabold text-[#315F60] font-['Baloo_2']">Roblox Scripter</h3>
                                <span
                                    class="bg-teal-50 text-teal-700 border border-teal-100 text-[9px] font-semibold px-2 py-0.5 rounded-full font-['Raleway']">
                                    Gameplay Systems
                                </span>
                            </div>
                            <p class="text-xs text-slate-500 leading-relaxed font-['Raleway']">
                                Create reliable gameplay systems, interactive features, and smooth player experiences with
                                clean Luau code.
                            </p>
                        </div>
                    </div>
                    <a href="#apply"
                        class="w-full sm:w-auto shrink-0 bg-slate-50 hover:bg-teal-500 hover:text-white text-slate-700 text-xs font-bold px-4 py-2 rounded-xl border border-slate-200/80 hover:border-teal-500 transition flex items-center justify-center gap-1.5 group font-['Raleway']">
                        <span>Apply</span>
                        <i
                            class="fa-solid fa-arrow-up-right-from-square text-[10px] group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                </div>

                <!-- Role 3: 3D Modeler -->
                <div
                    class="bg-white/80 backdrop-blur-sm p-4 sm:p-5 rounded-2xl border border-slate-200/70 hover:border-teal-300 transition shadow-sm hover:shadow flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="flex items-start gap-3.5">
                        <div
                            class="w-10 h-10 rounded-xl bg-purple-100/80 text-purple-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-shapes text-base"></i>
                        </div>
                        <div class="space-y-1">
                            <div class="flex flex-wrap items-center gap-2">
                                <h3 class="text-base font-extrabold text-[#315F60] font-['Baloo_2']">3D Modeler</h3>
                                <span
                                    class="bg-teal-50 text-teal-700 border border-teal-100 text-[9px] font-semibold px-2 py-0.5 rounded-full font-['Raleway']">
                                    3D Assets & Visual Design
                                </span>
                            </div>
                            <p class="text-xs text-slate-500 leading-relaxed font-['Raleway']">
                                Design charming, game-ready 3D assets that match our art direction and make every world feel
                                special.
                            </p>
                        </div>
                    </div>
                    <a href="#apply"
                        class="w-full sm:w-auto shrink-0 bg-slate-50 hover:bg-teal-500 hover:text-white text-slate-700 text-xs font-bold px-4 py-2 rounded-xl border border-slate-200/80 hover:border-teal-500 transition flex items-center justify-center gap-1.5 group font-['Raleway']">
                        <span>Apply</span>
                        <i
                            class="fa-solid fa-arrow-up-right-from-square text-[10px] group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                </div>

                <!-- Role 4: UI/UX Designer -->
                <div
                    class="bg-white/80 backdrop-blur-sm p-4 sm:p-5 rounded-2xl border border-slate-200/70 hover:border-teal-300 transition shadow-sm hover:shadow flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="flex items-start gap-3.5">
                        <div
                            class="w-10 h-10 rounded-xl bg-amber-100/80 text-amber-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-pen-ruler text-base"></i>
                        </div>
                        <div class="space-y-1">
                            <div class="flex flex-wrap items-center gap-2">
                                <h3 class="text-base font-extrabold text-[#315F60] font-['Baloo_2']">UI/UX Designer</h3>
                                <span
                                    class="bg-teal-50 text-teal-700 border border-teal-100 text-[9px] font-semibold px-2 py-0.5 rounded-full font-['Raleway']">
                                    UI Design & Player Experience
                                </span>
                            </div>
                            <p class="text-xs text-slate-500 leading-relaxed font-['Raleway']">
                                Craft clear, playful interfaces and player-friendly flows for Roblox games, menus, shops,
                                and HUDs.
                            </p>
                        </div>
                    </div>
                    <a href="#apply"
                        class="w-full sm:w-auto shrink-0 bg-slate-50 hover:bg-teal-500 hover:text-white text-slate-700 text-xs font-bold px-4 py-2 rounded-xl border border-slate-200/80 hover:border-teal-500 transition flex items-center justify-center gap-1.5 group font-['Raleway']">
                        <span>Apply</span>
                        <i
                            class="fa-solid fa-arrow-up-right-from-square text-[10px] group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright Footnote -->
        <div class="text-center pt-2 text-[10px] text-slate-400">
            © Karis Studio · karis.info
        </div>

    </section>
@endsection
