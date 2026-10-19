<!-- resources/views/components/about.blade.php -->
<section id="about" class="relative isolate overflow-hidden py-[clamp(4.5rem,8vw,7rem)] text-[#285f60]">
    
    <!-- Background Image dengan Efek Blur & Overlay Gradasi Tema -->
    <div class="absolute inset-0 z-[-2]">
        <img src="{{ asset('image/news.png') }}" alt="Background Karis Studio" class="w-full h-full object-cover filter blur-[8px] scale-105" />
    </div>
    <div class="absolute inset-0 z-[-1] bg-[radial-gradient(circle_at_8%_12%,rgba(255,190,218,0.45)_0%,transparent_27%),radial-gradient(circle_at_92%_48%,rgba(159,235,218,0.45)_0%,transparent_28%),linear-gradient(180deg,rgba(255,255,255,0.85)_0%,rgba(255,247,251,0.85)_52%,rgba(242,255,251,0.85)_100%)]"></div>

    <!-- Dekorasi Opsional -->
    <div class="absolute w-[260px] h-[260px] border border-dashed border-[rgba(95,157,151,0.28)] rounded-full top-[7%] -left-[115px] pointer-events-none z-[-1]"></div>
    <div class="absolute content-['✦'] right-[6%] top-[10%] text-[42px] text-[#f3a9cb] opacity-70 rotate-[12deg] pointer-events-none z-[-1]">✦</div>

    <div class="flex flex-col items-center justify-center w-full max-w-full px-[clamp(1.25rem,7vw,6px)] mx-auto relative z-10">
        <div class="w-full max-w-[900px] mx-auto text-center relative z-10">
            <h2 class="about-title inline-block relative pb-[14px] mb-[16px] font-['Baloo_2','Raleway',sans-serif] text-[clamp(2.15rem,4.6vw,3.65rem)] font-extrabold leading-[1.12] tracking-[-0.04em] text-transparent bg-clip-text bg-[image:linear-gradient(180deg,#F472B6_0%,#A5185F_100%)] w-fit max-w-full mx-auto text-center after:content-[''] after:block after:absolute after:left-0 after:bottom-0 after:w-full after:max-w-none after:h-[5px] after:m-0 after:rounded-full after:bg-[image:linear-gradient(180deg,#f5a8ce_0%,#c4b5fd_48%,#91e4d0_100%)] after:shadow-[0_3px_10px_rgba(74,160,149,0.13)] hover:after:w-full transition-all duration-300">
                About Us
            </h2>
            <p class="about-intro max-w-[820px] mx-auto font-['Raleway'] text-center text-[#476d70] text-[clamp(1.05rem,1.35vw,1.25rem)] leading-[1.85] font-medium m-0 bg-[rgba(255,255,255,0.75)] border border-[rgba(255,255,255,0.9)] shadow-[0_12px_36px_rgba(63,111,105,0.07)] rounded-[22px] p-[20px_24px] backdrop-blur-[12px]">
                Karis Studio is an independent Roblox development studio creating engaging digital experiences through thoughtful design, reliable scripting, and polished builds. We partner with creators, brands, and businesses to turn ideas into interactive worlds.
            </p>
            <p class="about-emphasis relative text-[#2f7f7f] font-['Raleway'] text-[clamp(1rem,1.2vw,1.15rem)] leading-[1.75] font-bold max-w-[760px] mx-auto mt-[1.5rem] p-[1rem_1.25rem] text-center bg-[rgba(255,255,255,0.82)] border border-[rgba(108,235,197,0.6)] rounded-[8px_24px_24px_24px] shadow-[0_12px_32px_rgba(47,127,127,0.08)] backdrop-blur-[12px]">
                We bring together builders, designers, scripters, and creators to craft engaging experiences for both players and brands.
            </p>
        </div>
        <div aria-label="Karis Studio character artwork" class="about-art hidden">
            <img src="{{ asset('image/member-aida.png') }}" alt="Illustration representing the Karis Studio team" loading="lazy" class="relative block w-[min(100%,500px)] max-h-[490px] object-contain object-center drop-shadow-[0_16px_18px_rgba(47,127,127,0.13)] transition-transform duration-350 hover:-translate-y-[6px] hover:rotate-[1deg]" />
        </div>
    </div>
</section>