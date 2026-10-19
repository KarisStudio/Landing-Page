<style id="hero-banner-background">
  #home {
    isolation: isolate;
    background-color: #F9F3F4;
    background-image:
      radial-gradient(ellipse at 7% 18%, rgba(246, 187, 213, .88) 0%, rgba(246, 187, 213, 0) 34%),
      radial-gradient(ellipse at 85% 12%, rgba(127, 213, 213, .72) 0%, rgba(127, 213, 213, 0) 38%),
      radial-gradient(ellipse at 62% 100%, rgba(217, 244, 232, .95) 0%, rgba(217, 244, 232, 0) 43%),
      linear-gradient(180deg, #F9F3F4 0%, #FCE7F3 43%, #E0F7FA 72%, #E6FFF5 100%);
  }

  .hero-roblox-art-wrap {
    min-width: 0;
  }

  .hero-roblox-art-frame {
    position: relative;
    width: min(100%, 540px);
    border-radius: 32px;
    overflow: visible;
    transform: rotate(1deg);
    transition: transform .35s ease;
    filter: drop-shadow(0 22px 34px rgba(38, 159, 154, .18));
  }

  .hero-roblox-art-frame:hover {
    transform: rotate(0deg) translateY(-4px);
  }

  .hero-roblox-art {
    display: block;
    width: 100%;
    aspect-ratio: 0.987;
    object-fit: cover;
    object-position: center;
    border-radius: 30px;
    border: 5px solid rgba(255, 255, 255, .82);
    box-shadow: 0 0 0 1px rgba(127, 213, 213, .22);
  }

  .hero-float-tag {
    position: absolute;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 11px 16px;
    border: 1px solid rgba(255, 255, 255, .9);
    border-radius: 999px;
    font-size: 13px;
    font-weight: 800;
    white-space: nowrap;
    box-shadow: 0 10px 24px rgba(38, 159, 154, .16);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
  }

  .hero-float-tag-pink {
    top: 13%;
    right: -12px;
    color: #F472B6;
    background: rgba(255, 220, 239, .94);
  }

  .hero-float-tag-mint {
    bottom: 13%;
    left: -20px;
    color: #2F7F7F;
    background: rgba(213, 255, 246, .95);
  }

  @media (max-width: 1023px) {
    .hero-roblox-art-frame {
      width: min(100%, 570px);
    }

    .hero-float-tag-pink {
      right: 4px;
    }

    .hero-float-tag-mint {
      left: 4px;
    }
  }

  @media (max-width: 640px) {
    .hero-roblox-art-frame {
      width: 100%;
      border-radius: 24px;
    }

    .hero-roblox-art {
      border-radius: 22px;
      border-width: 3px;
    }

    .hero-float-tag {
      padding: 8px 11px;
      font-size: 11px;
    }
  }

  #home::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: 0;
    pointer-events: none;
    background-image: radial-gradient(rgba(38, 159, 154, .23) 1.3px, transparent 1.5px);
    background-size: 25px 25px;
    opacity: .28;
    -webkit-mask-image: linear-gradient(180deg, #000 0%, transparent 52%, #000 100%);
    mask-image: linear-gradient(180deg, #000 0%, transparent 52%, #000 100%);
  }

  #home::after {
    content: "";
    position: absolute;
    z-index: 0;
    pointer-events: none;
    width: 360px;
    height: 360px;
    right: -110px;
    top: -150px;
    border: 1px solid rgba(255, 255, 255, .75);
    border-radius: 50%;
    box-shadow: 0 0 0 28px rgba(255, 255, 255, .13), 0 0 0 58px rgba(246, 187, 213, .09);
  }

  @media (max-width: 640px) {
    #home::after {
      width: 230px;
      height: 230px;
      right: -110px;
      top: -90px;
    }

    #home::before {
      opacity: .18;
    }
  }
</style>

<style id="karis-card-sparkles">
  .rounded-3xl[class*="border"] {
    position: relative;
    isolation: isolate;
    overflow: visible;
    animation: karisCardGlow 3.2s ease-in-out infinite;
  }

  .rounded-3xl[class*="border"]::before,
  .rounded-3xl[class*="border"]::after {
    position: absolute;
    z-index: 3;
    pointer-events: none;
    font-family: Arial, sans-serif;
    line-height: 1;
    text-shadow: 0 0 5px currentColor, 0 0 12px currentColor;
    animation: karisTwinkle 1.8s ease-in-out infinite;
  }

  .rounded-3xl[class*="border"]::before {
    content: "✦";
    color: #F472B6;
    top: -10px;
    right: 13px;
    font-size: 19px;
  }

  .rounded-3xl[class*="border"]::after {
    content: "✧";
    color: #00B3B4;
    bottom: -9px;
    left: 13px;
    font-size: 23px;
    animation-delay: .8s;
  }

  .rounded-3xl[class*="border"]:hover {
    box-shadow: 0 0 0 1px rgba(255, 119, 200, .35), 0 0 18px rgba(255, 119, 200, .28), 0 0 28px rgba(57, 217, 210, .2);
  }

  @keyframes karisTwinkle {

    0%,
    100% {
      opacity: .45;
      transform: scale(.75) rotate(0deg);
    }

    50% {
      opacity: 1;
      transform: scale(1.18) rotate(18deg);
    }
  }

  @keyframes karisCardGlow {

    0%,
    100% {
      box-shadow: 0 0 0 rgba(255, 119, 200, 0);
    }

    50% {
      box-shadow: 0 0 13px rgba(255, 119, 200, .13), 0 0 16px rgba(57, 217, 210, .10);
    }
  }

  @media (prefers-reduced-motion: reduce) {

    .rounded-3xl[class*="border"],
    .rounded-3xl[class*="border"]::before,
    .rounded-3xl[class*="border"]::after {
      animation: none;
    }
  }
</style>

<style id="karis-original-mascots">
  .hero-roblox-art-frame {
    width: min(100%, 610px);
    transform: none;
  }

  .hero-roblox-art-frame:hover {
    transform: translateY(-3px);
  }

  .hero-mascot-pair {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: clamp(8px, 1.5vw, 18px);
    width: 100%;
    position: relative;
  }

  .hero-mascot {
    position: relative;
    flex: 1 1 0;
    min-width: 0;
    margin: 0;
    overflow: hidden;
    border-radius: 28px;
    padding: 7px;
    background: linear-gradient(180deg, rgba(255, 255, 255, .96), rgba(255, 238, 249, .9));
    border: 2px solid rgba(255, 255, 255, .95);
    box-shadow: 0 0 0 1px rgba(127, 213, 213, .32), 0 12px 32px rgba(38, 159, 154, .18), 0 0 24px rgba(246, 187, 213, .42);
    animation: mascot-float 4.5s ease-in-out infinite;
  }

  .hero-mascot-boy {
    animation-delay: -2.25s;
  }

  .hero-mascot img {
    display: block;
    width: 100%;
    height: clamp(290px, 37vw, 455px);
    object-fit: cover;
    object-position: center 22%;
    border-radius: 20px;
  }

  .hero-mascot figcaption {
    position: absolute;
    left: 50%;
    bottom: 14px;
    transform: translateX(-50%);
    white-space: nowrap;
    padding: 7px 13px;
    border-radius: 999px;
    color: #2F7F7F;
    background: rgba(255, 255, 255, .9);
    border: 1px solid rgba(255, 255, 255, .95);
    font-size: 12px;
    font-weight: 800;
    box-shadow: 0 4px 14px rgba(38, 159, 154, .13);
  }

  .hero-mascot-girl figcaption {
    color: #F472B6;
  }

  @keyframes mascot-float {

    0%,
    100% {
      transform: translateY(0) rotate(-1deg);
    }

    50% {
      transform: translateY(-7px) rotate(1deg);
    }
  }

  @media(max-width:1023px) {
    .hero-roblox-art-frame {
      width: min(100%, 600px);
    }

    .hero-mascot img {
      height: clamp(280px, 58vw, 420px);
    }
  }

  @media(max-width:640px) {
    .hero-mascot-pair {
      gap: 8px;
    }

    .hero-mascot {
      padding: 4px;
      border-radius: 18px;
    }

    .hero-mascot img {
      height: clamp(225px, 70vw, 330px);
      border-radius: 14px;
    }

    .hero-mascot figcaption {
      bottom: 8px;
      padding: 5px 8px;
      font-size: 10px;
    }
  }

  @media(prefers-reduced-motion:reduce) {
    .hero-mascot {
      animation: none;
    }
  }
</style>

<section id="home" class="relative bg-cloud-pattern pt-12 pb-24 lg:pt-20 lg:pb-32 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <!-- Hero Text -->
      <div class="lg:col-span-7 text-center md:text-center lg:text-left">
        <div
          class="inline-flex items-center gap-2 bg-cotton-candy/60 border border-pastel-pink text-deep-teal px-4 py-1.5 rounded-full font-heading text-sm font-semibold mb-6 shadow-sm">
          <span>Welcome to</span>
        </div>

        <h1
          class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-deep-teal tracking-tight leading-tight mb-4 font-['Baloo_2']">
          KARIS <br />
          <span class="text-transparent bg-clip-text bg-gradient-to-b from-soft-blush via-pastel-pink to-aqua-sky">
            STUDIO
          </span>
        </h1>

        <p class="text-base sm:text-lg text-[raleway] text-slate-600 mb-8 max-w-2xl mx-auto lg:mx-0 font-medium leading-relaxed">
          Bring your ideas to life on Roblox! We help you create high-quality, creative Roblox games, maps, and
          experiences tailored to your vision.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
          <a href="{{ route('contact.index') }}"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-pastel-pink hover:bg-soft-blush text-white font-heading text-lg px-8 py-3.5 rounded-full shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1">
            <i data-lucide="newspaper" class="w-5 h-5"></i>
            Contact Us &rarr;
          </a>
          <a href="{{ route('projects.index') }}"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white/80 hover:bg-white text-deep-teal border-2 border-mint-green font-heading text-lg px-8 py-3.5 rounded-full shadow-sm hover:shadow transition-all">
            <i data-lucide="eye" class="w-5 h-5"></i>
            View Our Portfolio
          </a>
        </div>

        <!-- Quick Stats Badge -->
        <div class="mt-10 pt-6 border-t border-pastel-pink/30 flex items-center justify-center lg:justify-start gap-8">
          <div class="text-center lg:text-left">
            <p class="font-heading text-2xl font-bold text-deep-teal">50+</p>
            <p class="text-xs text-slate-500 font-medium">Projects Completed</p>
          </div>
          <div class="h-8 w-px bg-pastel-pink/40"></div>
          <div class="text-center lg:text-left">
            <p class="font-heading text-2xl font-bold text-deep-teal">4.9★</p>
            <p class="text-xs text-slate-500 font-medium">Rating Client</p>
          </div>
          <div class="h-8 w-px bg-pastel-pink/40"></div>
          <div class="text-center lg:text-left">
            <p class="font-heading text-2xl font-bold text-deep-teal">100%</p>
            <p class="text-xs text-slate-500 font-medium">Responsive & Friendly</p>
          </div>
        </div>
      </div>

      <!-- HD Roblox girl + boy banner art -->
      <div class="lg:col-span-5 relative flex justify-center items-center hero-roblox-art-wrap">
        <div class="hero-roblox-art-frame">
          <div class="hero-mascot-pair" role="group" aria-label="Maskot Karis Studio: dua karakter Roblox asli">
            <figure class="hero-mascot hero-mascot-girl">
              <img src="./image/f2.png" alt="Maskot Roblox perempuan Karis Studio, karakter asli tanpa perubahan"
                loading="eager" decoding="async" />

            </figure>
            <figure class="hero-mascot hero-mascot-boy">
              <img src="./image/f1.png" alt="Maskot Roblox perempuan berbusana pink, karakter asli tanpa perubahan"
                loading="eager" decoding="async" />

            </figure>
          </div>
          <span class="hero-float-tag hero-float-tag-pink">🎮 Game Dev</span>
          <span class="hero-float-tag hero-float-tag-mint">✦ Creative Build</span>
        </div>
      </div>
    </div>
  </div>
</section>
