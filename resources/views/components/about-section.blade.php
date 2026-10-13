<style id="karis-unified-section-headings-v1">
  /* Unified section heading system: consistent type, gradient and underline */
  #about .about-title,
  #projects h2,
  #news h2,
  #community h2,
  #contact h2,
  .contact-heading {
    display: inline-block;
    position: relative;
    padding-bottom: 14px;
    margin-bottom: 16px;
    font-family: 'Baloo 2', 'Raleway', sans-serif !important;
    font-size: clamp(2.15rem, 4.6vw, 3.65rem) !important;
    font-weight: 800 !important;
    line-height: 1.12 !important;
    letter-spacing: -.04em !important;
    text-wrap: balance;
    color: #2f7f7f;
    background: linear-gradient(100deg, #287d7a 0%, #36aa9c 48%, #d978a8 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  #about .about-title:after,
  #projects h2:after,
  #news h2:after,
  #community h2:after,
  #contact h2:after,
  .contact-heading:after {
    content: '';
    display: block;
    position: absolute;
    left: 0;
    bottom: 0;
    width: 78%;
    height: 5px;
    margin: 0;
    border-radius: 999px;
    background: linear-gradient(90deg, #f5a8ce 0%, #c4b5fd 48%, #91e4d0 100%);
    box-shadow: 0 3px 10px rgba(74, 160, 149, .13);
    transition: width .3s ease;
    -webkit-text-fill-color: initial;
  }

  #about .about-title:hover:after,
  #projects h2:hover:after,
  #news h2:hover:after,
  #community h2:hover:after,
  #contact h2:hover:after,
  .contact-heading:hover:after {
    width: 100%
  }

  #about .about-title .about-highlight {
    background: none !important;
    -webkit-text-fill-color: transparent !important;
    color: transparent !important
  }

  #community h2 .community-script,
  .contact-heading span {
    background: none !important;
    color: transparent !important;
    -webkit-text-fill-color: transparent !important;
    font-style: inherit
  }

  @media(max-width:640px) {

    #about .about-title,
    #projects h2,
    #news h2,
    #community h2,
    #contact h2,
    .contact-heading {
      font-size: clamp(2rem, 8vw, 2.7rem) !important;
      padding-bottom: 11px;
      margin-bottom: 12px
    }

    #about .about-title:after,
    #projects h2:after,
    #news h2:after,
    #community h2:after,
    #contact h2:after,
    .contact-heading:after {
      height: 4px;
      width: 72%
    }
  }

  @media(prefers-reduced-motion:reduce) {

    #about .about-title:after,
    #projects h2:after,
    #news h2:after,
    #community h2:after,
    #contact h2:after,
    .contact-heading:after {
      transition: none
    }
  }
</style>

<style>
  /* Creative About section refresh */
  #about{overflow:hidden;isolation:isolate;background:radial-gradient(circle at 8% 12%,rgba(255,190,218,.34),transparent 27%),radial-gradient(circle at 92% 48%,rgba(159,235,218,.34),transparent 28%),linear-gradient(145deg,#fff 0%,#fff7fb 52%,#f2fffb 100%)!important}
  #about:before{content:"";position:absolute;width:260px;height:260px;border:1px dashed rgba(95,157,151,.28);border-radius:50%;top:7%;left:-115px;pointer-events:none;z-index:-1}
  #about:after{content:"✦";position:absolute;right:6%;top:10%;font-size:42px;color:#f3a9cb;opacity:.7;transform:rotate(12deg);pointer-events:none;z-index:-1}
  #about .about-eyebrow{box-shadow:0 8px 24px rgba(74,139,132,.12);border:1px solid rgba(112,197,177,.5);background:rgba(225,255,245,.78);backdrop-filter:blur(10px)}
  #about .about-title{letter-spacing:-.045em;text-wrap:balance}
  #about .about-title .about-highlight{background:linear-gradient(100deg,#e58ab5,#5eb6a5 72%);-webkit-background-clip:text;background-clip:text;color:transparent}
  #about .about-intro{background:rgba(255,255,255,.68);border:1px solid rgba(255,255,255,.9);box-shadow:0 12px 36px rgba(63,111,105,.07);border-radius:22px;padding:20px 24px;backdrop-filter:blur(12px)}
  #about .about-card{position:relative;overflow:hidden;min-height:100%;border-radius:28px;padding:30px 28px!important;box-shadow:0 12px 30px rgba(53,94,94,.07);transition:transform .3s ease,box-shadow .3s ease,border-color .3s ease}
  #about .about-card:before{content:"";position:absolute;width:130px;height:130px;border-radius:50%;right:-55px;top:-58px;background:rgba(255,255,255,.48);transition:transform .35s ease}
  #about .about-card:hover{transform:translateY(-7px) rotate(-.4deg);box-shadow:0 22px 44px rgba(53,94,94,.13)}
  #about .about-icon{position:relative;z-index:1;border:1px solid rgba(255,255,255,.85);box-shadow:0 9px 20px rgba(52,100,94,.13);transition:transform .3s ease}
  #about .about-card:hover .about-icon{transform:rotate(-7deg) scale(1.06)}
  #about .about-card h3{letter-spacing:-.02em}
  #about .about-mini-label{display:inline-flex;align-items:center;gap:6px;font-size:10px;letter-spacing:.14em;text-transform:uppercase;font-weight:800;opacity:.68;margin-bottom:12px}
  #about .about-pill{display:inline-flex;align-items:center;gap:7px;padding:8px 12px;border-radius:999px;border:1px solid rgba(255,255,255,.9);background:rgba(255,255,255,.7);font-size:12px;font-weight:700;color:#316a65}
  #about .about-cta{position:relative;overflow:hidden;box-shadow:0 18px 40px rgba(204,139,174,.13);border-radius:30px}
  #about .about-cta:after{content:"";position:absolute;width:180px;height:180px;border:1px solid rgba(224,151,188,.25);border-radius:50%;right:-65px;bottom:-105px;box-shadow:0 0 0 18px rgba(255,255,255,.22),0 0 0 38px rgba(255,255,255,.14);pointer-events:none}
  #about .about-cta a{box-shadow:0 8px 18px rgba(38,88,84,.2)}
  @media(max-width:640px){#about .about-intro{padding:17px}#about .about-card{padding:25px 22px!important}#about:after{right:5%;top:5%;font-size:30px}}
  @media(prefers-reduced-motion:reduce){#about .about-card,#about .about-icon,#about .about-card:before{transition:none!important}#about .about-card:hover{transform:none}}
</style>

<section id="about" class="py-20 bg-white relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span
        class="about-eyebrow inline-flex items-center gap-2 rounded-full px-4 py-2 text-sm font-semibold text-deep-teal mb-4">
      </span>
      <h2 class="about-title font-heading text-3xl sm:text-5xl font-bold text-deep-teal mb-4 font-['Baloo_2']">About</h2>

      <p class="about-intro text-slate-600 font-medium leading-relaxed font-['raleway']">
        Karis Studio is an independent Roblox development studio creating engaging digital experiences through
        thoughtful design, reliable scripting, and polished builds. We partner with creators, brands, and businesses to
        turn ideas into interactive worlds.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="about-card bg-pale-mint/40 border border-pale-mint/80 text-center">
        <div
          class="about-icon w-16 h-16 bg-mint-green rounded-2xl flex items-center justify-center mx-auto mb-6 text-deep-teal">
          <i data-lucide="sparkles" class="w-8 h-8"></i>
        </div>
        <span class="about-mini-label"><i data-lucide="heart" class="w-3 h-3 font-['Baloo_2']"></i> Our vibe</span>
        <h3 class="font-heading text-xl font-bold text-deep-teal mb-3 font-['Baloo_2']">Our Identity</h3>
        <p class="text-slate-600 text-sm leading-relaxed font-['Raleway']">
          Creative, detail-oriented, and player-focused. Our pastel-inspired visual style pairs playful character with
          purposeful design to help every project feel distinctive and memorable.
        </p>
      </div>

      <div class="about-card bg-cotton-candy/40 border border-cotton-candy/80 text-center">
        <div
          class="about-icon w-16 h-16 bg-pastel-pink rounded-2xl flex items-center justify-center mx-auto mb-6 text-white">
          <i data-lucide="layers-3" class="w-8 h-8"></i>
        </div>
        <span class="about-mini-label"><i data-lucide="wand-sparkles" class="w-3 h-3 font-['Baloo_2']"></i> Our craft</span>
        <h3 class="font-heading text-xl font-bold text-deep-teal mb-3 font-['Baloo_2']">What We Do</h3>
        <p class="text-slate-600 text-sm leading-relaxed font-['Raleway']">
          We deliver Roblox game development, environment and map building, UI/UX design, and gameplay scripting—with a
          focus on usability, performance, and a cohesive player experience.
        </p>
      </div>

      <div class="about-card bg-milky-white border border-aqua-sky/70 text-center">
        <div
          class="about-icon w-16 h-16 bg-aqua-sky rounded-2xl flex items-center justify-center mx-auto mb-6 text-white">
          <i data-lucide="handshake" class="w-8 h-8"></i>
        </div>
        <span class="about-mini-label"><i data-lucide="users" class="w-3 h-3 font-['Baloo_2']"></i> Work together</span>
        <h3 class="font-heading text-xl font-bold text-deep-teal mb-3 font-['Baloo_2']">B2B Partnerships</h3>
        <p class="text-slate-600 text-sm leading-relaxed font-['Raleway']">
          We collaborate with studios, agencies, brands, and organizations on commissioned projects, co-development,
          branded experiences, and ongoing production support. Clear communication, agreed milestones, and dependable
          delivery guide every partnership.
        </p>
      </div>
    </div>

    <div class="flex flex-wrap justify-center gap-2.5 mt-8 mb-2" aria-label="Karis Studio capabilities">
      <span class="about-pill"><i data-lucide="gamepad-2" class="w-4 h-4"></i> Roblox Experiences</span>
      <span class="about-pill"><i data-lucide="blocks" class="w-4 h-4"></i> Creative Builds</span>
      <span class="about-pill"><i data-lucide="code-2" class="w-4 h-4"></i> Gameplay Scripting</span>
      <span class="about-pill"><i data-lucide="palette" class="w-4 h-4"></i> UI/UX Design</span>
    </div>


  </div>
</section>