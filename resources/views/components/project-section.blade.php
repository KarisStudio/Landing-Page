<style id="project-code-editable-horizontal-carousel">
  /* Project cards: horizontal scroll */
  .project-carousel {
    display: flex;
    gap: 1.5rem;
    overflow-x: auto;
    overflow-y: hidden;
    padding: .35rem .2rem 1.25rem;
    scroll-snap-type: x mandatory;
    scroll-padding-inline: .5rem;
    -webkit-overflow-scrolling: touch;
    overscroll-behavior-inline: contain;
  }

  .project-carousel::-webkit-scrollbar {
    height: 8px
  }

  .project-carousel::-webkit-scrollbar-track {
    background: rgba(47, 127, 127, .08);
    border-radius: 99px
  }

  .project-carousel::-webkit-scrollbar-thumb {
    background: rgba(47, 127, 127, .32);
    border-radius: 99px
  }

  .project-carousel .project-image-card {
    flex: 0 0 clamp(260px, 31vw, 360px);
    width: clamp(260px, 31vw, 360px);
    scroll-snap-align: start;
  }

  .project-art {
    overflow: hidden;
  }

  .project-card-image {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
    transition: transform .45s ease;
  }

  .project-image-card:hover .project-card-image {
    transform: scale(1.045)
  }

  .project-art-label {
    z-index: 2
  }

  .project-view-more {
    z-index: 3
  }

  @media(max-width:640px) {
    .project-carousel {
      gap: 1rem;
      margin-right: -1rem;
      padding-right: 1rem
    }

    .project-carousel .project-image-card {
      flex-basis: 82vw;
      width: 82vw;
    }
  }

  @media(prefers-reduced-motion:reduce) {
    .project-card-image {
      transition: none
    }
  }
</style>

<style id="project-carousel-autoscroll-refined">
  /* Compact, softly concave project cards */
  .project-carousel {
    display: flex;
    gap: 1rem;
    overflow-x: auto;
    overflow-y: hidden;
    padding: 1rem .35rem 1.25rem;
    margin-inline: -.15rem;
    scroll-snap-type: x proximity;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    overscroll-behavior-inline: contain;
    scrollbar-width: thin;
    scrollbar-color: rgba(47, 127, 127, .28) transparent;
    border-radius: 2.5rem;
    mask-image: linear-gradient(to right, transparent 0, #000 2%, #000 98%, transparent 100%);
  }

  .project-carousel .project-image-card {
    flex: 0 0 clamp(190px, 22vw, 255px) !important;
    width: clamp(190px, 22vw, 255px) !important;
    border-radius: 2rem !important;
    overflow: hidden;
    scroll-snap-align: start;
    transform: translateZ(0);
    box-shadow: 0 8px 22px rgba(47, 127, 127, .09);
  }

  .project-carousel .project-art {
    height: 175px !important;
    min-height: 175px;
    position: relative;
    border-radius: 1.85rem;
    overflow: hidden;
  }

  .project-carousel .project-card-image {
    border-radius: inherit;
    object-fit: cover;
  }

  .project-carousel .project-art-label {
    bottom: 12px;
    left: 12px;
    right: 12px;
    border-radius: 999px;
  }

  .project-carousel .project-view-more {
    border-radius: 999px;
  }

  @media(max-width:640px) {
    .project-carousel {
      gap: .8rem;
      margin-right: -1rem;
      padding-right: 1rem;
    }

    .project-carousel .project-image-card {
      flex-basis: 58vw !important;
      width: 58vw !important;
    }

    .project-carousel .project-art {
      height: 150px !important;
      min-height: 150px;
    }
  }

  @media(prefers-reduced-motion:reduce) {
    .project-carousel {
      scroll-behavior: auto !important
    }
  }
</style>

<style id="project-carousel-alignment-fix">
  #project-carousel.project-carousel {
    display: flex !important;
    flex-flow: row nowrap !important;
    align-items: stretch !important;
    gap: 14px !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    min-height: 0 !important;
    padding: 14px 8px 22px !important;
    scroll-behavior: auto !important;
    scroll-snap-type: none !important;
    mask-image: linear-gradient(to right, transparent, #000 3%, #000 97%, transparent) !important;
  }

  #project-carousel .project-image-card {
    display: flex !important;
    flex: 0 0 220px !important;
    width: 220px !important;
    min-width: 220px !important;
    max-width: 220px !important;
    height: 205px !important;
    min-height: 205px !important;
    align-self: stretch !important;
    flex-direction: column !important;
    position: relative !important;
    border-radius: 25px !important;
    overflow: hidden !important;
    box-sizing: border-box !important;
  }

  #project-carousel .project-art {
    position: relative !important;
    display: flex !important;
    flex: 1 1 auto !important;
    width: 100% !important;
    height: 100% !important;
    min-height: 0 !important;
    overflow: hidden !important;
    border-radius: 23px !important;
  }

  #project-carousel .project-card-image {
    position: absolute !important;
    inset: 0 !important;
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
  }

  #project-carousel .project-art-label {
    position: absolute !important;
    bottom: 10px !important;
    left: 10px !important;
    right: 10px !important;
    white-space: nowrap !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
  }

  #project-carousel .project-view-more {
    position: absolute !important;
    right: 10px !important;
    top: 10px !important;
  }

  #project-carousel .project-card-fallback {
    position: relative;
    z-index: 0
  }

  #project-carousel::-webkit-scrollbar {
    display: none !important
  }

  #project-carousel {
    scrollbar-width: none !important
  }

  @media(max-width:640px) {
    #project-carousel.project-carousel {
      gap: 12px !important
    }

    #project-carousel .project-image-card {
      flex-basis: 170px !important;
      width: 170px !important;
      min-width: 170px !important;
      max-width: 170px !important;
      height: 165px !important;
      min-height: 165px !important
    }
  }

  @media(prefers-reduced-motion:reduce) {
    #project-carousel.project-carousel {
      scroll-behavior: auto !important
    }
  }
</style>

<style id="karis-projects-showcase-v2">
  #projects {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    background: radial-gradient(ellipse at 4% 12%, rgba(244, 114, 182, .28), transparent 29%), radial-gradient(ellipse at 92% 18%, rgba(45, 212, 191, .28), transparent 31%), radial-gradient(ellipse at 48% 100%, rgba(196, 181, 253, .25), transparent 42%), linear-gradient(135deg, #fff8fc 0%, #f4fffb 48%, #fff7fb 100%) !important
  }

  #projects {
    background-image: radial-gradient(circle at 1px 1px, rgba(47, 127, 127, .10) 1px, transparent 0), radial-gradient(ellipse at 4% 12%, rgba(244, 114, 182, .28), transparent 29%), radial-gradient(ellipse at 92% 18%, rgba(45, 212, 191, .28), transparent 31%), radial-gradient(ellipse at 48% 100%, rgba(196, 181, 253, .25), transparent 42%), linear-gradient(135deg, #fff8fc 0%, #f4fffb 48%, #fff7fb 100%) !important;
    background-size: 22px 22px, auto, auto, auto, auto !important
  }

  #projects:before {
    content: "";
    position: absolute;
    top: -100px;
    right: -95px;
    width: 340px;
    height: 340px;
    border: 1px solid rgba(244, 114, 182, .24);
    border-radius: 50%;
    box-shadow: 0 0 0 24px rgba(244, 114, 182, .035), 0 0 0 52px rgba(45, 212, 191, .035), 0 0 0 82px rgba(45, 212, 191, .025);
    pointer-events: none
  }

  #projects:after {
    content: "KARIS / PROJECT ARCHIVE";
    position: absolute;
    left: -48px;
    top: 48%;
    font-size: 10px;
    letter-spacing: .25em;
    font-weight: 900;
    color: #2f7f7f;
    opacity: .22;
    transform: rotate(-90deg);
    pointer-events: none
  }

  #projects .max-w-7xl {
    position: relative;
    z-index: 1
  }

  #projects h2 {
    display: inline-block;
    position: relative;
    font-size: clamp(2.5rem, 5vw, 4rem) !important;
    line-height: 1.04;
    background: linear-gradient(100deg, #2f7f7f 5%, #00b3a4 52%, #ed78b4 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent !important
  }

  #projects h2:after {
    content: "";
    display: block;
    width: 76%;
    height: 6px;
    margin: 13px 0 0 2px;
    border-radius: 999px;
    background: linear-gradient(90deg, #f472b6 0%, #c4b5fd 48%, #2dd4bf 100%);
    box-shadow: 0 4px 12px rgba(45, 212, 191, .16);
    -webkit-text-fill-color: initial
  }

  #projects h2+p {
    max-width: 540px;
    font-size: 1rem;
    line-height: 1.8;
    color: #668987 !important
  }

  #projects .flex.flex-col.md\:flex-row.md\:items-end {
    gap: 20px
  }

  #projects .flex.flex-col.md\:flex-row.md\:items-end>a {
    background: #fff;
    border: 1px solid rgba(0, 179, 164, .16);
    border-radius: 999px;
    padding: 13px 18px;
    box-shadow: 0 10px 26px rgba(47, 127, 127, .08);
    transition: all .25s ease
  }

  #projects .flex.flex-col.md\:flex-row.md\:items-end>a:hover {
    box-shadow: 0 14px 30px rgba(244, 114, 182, .18);
    transform: translateY(-3px)
  }

  #project-carousel.project-carousel {
    gap: 22px !important;
    padding: 24px 14px 32px !important;
    mask-image: linear-gradient(to right, transparent, #000 2%, #000 98%, transparent) !important
  }

  #project-carousel .project-image-card {
    flex: 0 0 clamp(270px, 30vw, 340px) !important;
    width: clamp(270px, 30vw, 340px) !important;
    min-width: clamp(270px, 30vw, 340px) !important;
    max-width: clamp(270px, 30vw, 340px) !important;
    height: 315px !important;
    min-height: 315px !important;
    border: 1px solid rgba(255, 255, 255, .95) !important;
    border-radius: 30px !important;
    padding: 8px !important;
    background: rgba(255, 255, 255, .7) !important;
    box-shadow: 0 15px 38px rgba(47, 127, 127, .10), 0 3px 12px rgba(244, 114, 182, .07) !important;
    overflow: visible !important;
    transition: transform .35s cubic-bezier(.2, .8, .2, 1), box-shadow .35s ease !important;
    position: relative !important
  }

  #project-carousel .project-image-card:before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 30px;
    padding: 1.5px;
    background: linear-gradient(140deg, rgba(244, 114, 182, .8), rgba(255, 255, 255, .65), rgba(0, 179, 164, .75));
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
    z-index: 2
  }

  #project-carousel .project-image-card:hover {
    transform: translateY(-9px) rotate(-.7deg) !important;
    box-shadow: 0 25px 48px rgba(47, 127, 127, .17), 0 9px 22px rgba(244, 114, 182, .12) !important
  }

  #project-carousel .project-image-card:nth-child(even):hover {
    transform: translateY(-9px) rotate(.7deg) !important
  }

  #project-carousel .project-art {
    height: 100% !important;
    min-height: 0 !important;
    border-radius: 23px !important;
    overflow: hidden !important;
    background: linear-gradient(145deg, #f8cce1, #b7f1df, #d9e9ff) !important;
    isolation: isolate
  }

  #project-carousel .project-art:after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(25, 65, 68, .02) 25%, rgba(20, 50, 55, .08) 48%, rgba(24, 58, 62, .82) 100%);
    z-index: 1;
    pointer-events: none;
    transition: opacity .3s ease
  }

  #project-carousel .project-card-image {
    z-index: 0;
    transition: transform .7s cubic-bezier(.2, .8, .2, 1), filter .4s ease !important
  }

  #project-carousel .project-image-card:hover .project-card-image {
    transform: scale(1.09) !important;
    filter: saturate(1.16)
  }

  #project-carousel .project-card-fallback {
    z-index: 0 !important;
    filter: drop-shadow(0 8px 16px rgba(47, 127, 127, .15));
    width: 82px !important;
    height: 82px !important
  }

  #project-carousel .project-art-label {
    z-index: 2 !important;
    left: 18px !important;
    right: 18px !important;
    bottom: 19px !important;
    white-space: normal !important;
    overflow: visible !important;
    text-overflow: clip !important;
    color: white !important;
    font-size: 15px !important;
    font-weight: 900 !important;
    letter-spacing: .12em !important;
    line-height: 1.35 !important;
    text-shadow: 0 2px 12px rgba(0, 0, 0, .2) !important;
    padding-right: 42px
  }

  #project-carousel .project-art-label:before {
    content: "SIMULATOR";
    display: block;
    width: max-content;
    max-width: 100%;
    margin-bottom: 9px;
    padding: 5px 9px;
    border: 1px solid rgba(255, 255, 255, .48);
    border-radius: 999px;
    background: rgba(255, 255, 255, .16);
    backdrop-filter: blur(8px);
    font-size: 8px;
    letter-spacing: .15em;
    font-weight: 800;
    color: #fff
  }

  #project-carousel .project-image-card:nth-child(2n) .project-art-label:before {
    content: "SIMULATOR"
  }

  #project-carousel .project-image-card:nth-child(3n) .project-art-label:before {
    content: "SIMULATOR"
  }

  #project-carousel .project-view-more {
    z-index: 3 !important;
    right: 17px !important;
    top: 17px !important;
    display: flex !important;
    align-items: center;
    justify-content: center;
    width: 43px;
    height: 43px;
    padding: 0 !important;
    overflow: hidden;
    font-size: 0 !important;
    border: 1px solid rgba(255, 255, 255, .9);
    background: rgba(255, 255, 255, .88) !important;
    box-shadow: 0 8px 20px rgba(35, 75, 77, .13) !important;
    backdrop-filter: blur(10px);
    transition: width .3s ease, transform .3s ease !important
  }

  #project-carousel .project-view-more i {
    width: 18px !important;
    height: 18px !important;
    flex-shrink: 0
  }

  #project-carousel .project-image-card:hover .project-view-more {
    width: 48px;
    height: 48px;
    transform: rotate(8deg) scale(1.04) !important;
    background: #fff !important
  }

  #project-carousel .project-image-card:nth-child(1) .project-art:before {
    content: "01"
  }

  #project-carousel .project-image-card:nth-child(2) .project-art:before {
    content: "02"
  }

  #project-carousel .project-image-card:nth-child(3) .project-art:before {
    content: "03"
  }

  #project-carousel .project-image-card:nth-child(4) .project-art:before {
    content: "04"
  }

  #project-carousel .project-image-card:nth-child(5) .project-art:before {
    content: "05"
  }

  #project-carousel .project-image-card:nth-child(6) .project-art:before {
    content: "06"
  }

  #project-carousel .project-art:before {
    position: absolute;
    z-index: 2;
    top: 17px;
    left: 17px;
    display: grid;
    place-items: center;
    width: 36px;
    height: 36px;
    border-radius: 13px;
    color: #2f7f7f;
    background: rgba(255, 255, 255, .82);
    font-size: 11px;
    font-weight: 900;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
    backdrop-filter: blur(8px)
  }

  @media(max-width:640px) {
    #projects:after {
      display: none
    }

    #project-carousel.project-carousel {
      gap: 14px !important;
      padding: 18px 8px 26px !important
    }

    #project-carousel .project-image-card {
      flex-basis: 78vw !important;
      width: 78vw !important;
      min-width: 78vw !important;
      max-width: 78vw !important;
      height: 280px !important;
      min-height: 280px !important
    }

    #projects .flex.flex-col.md\:flex-row.md\:items-end>a {
      align-self: flex-start
    }
  }

  @media(prefers-reduced-motion:reduce) {

    #project-carousel .project-image-card,
    #project-carousel .project-card-image,
    #project-carousel .project-view-more {
      transition: none !important
    }

    #project-carousel .project-image-card:hover {
      transform: none !important
    }
  }
</style>

<style id="project-detail-modal-styles">
  #project-detail-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 22px;
    background: rgba(24, 52, 59, .58);
    backdrop-filter: blur(8px)
  }

  #project-detail-modal.is-open {
    display: flex
  }

  #project-detail-modal .project-modal-panel {
    position: relative;
    width: min(100%, 680px);
    max-height: min(86vh, 760px);
    overflow: auto;
    border: 1px solid rgba(255, 255, 255, .9);
    border-radius: 28px;
    background: linear-gradient(145deg, #fff9fc 0%, #f0fcf8 58%, #f7f3ff 100%);
    box-shadow: 0 28px 90px rgba(19, 55, 62, .3);
    padding: clamp(22px, 4vw, 38px);
    animation: projectModalIn .22s ease-out
  }

  #project-detail-modal .project-modal-close {
    position: absolute;
    right: 18px;
    top: 18px;
    width: 42px;
    height: 42px;
    display: grid;
    place-items: center;
    border: 1px solid rgba(47, 127, 127, .16);
    border-radius: 50%;
    background: rgba(255, 255, 255, .86);
    color: #2f7f7f;
    cursor: pointer
  }

  #project-detail-modal .project-modal-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 12px;
    border-radius: 999px;
    background: rgba(217, 120, 168, .14);
    color: #a84f7e;
    font-size: .72rem;
    font-weight: 800;
    letter-spacing: .12em;
    text-transform: uppercase;
    margin: 0 52px 14px 0
  }

  #project-detail-modal .project-modal-title {
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    line-height: 1.1;
    font-weight: 800;
    color: #2f7f7f;
    margin: 0 48px 14px 0
  }

  #project-detail-modal .project-modal-description {
    font-size: 1.05rem;
    line-height: 1.75;
    color: #42616a;
    margin: 0 0 16px
  }

  #project-detail-modal .project-modal-details {
    line-height: 1.8;
    color: #587078;
    margin: 0;
    padding-top: 17px;
    border-top: 1px solid rgba(47, 127, 127, .15)
  }

  #project-detail-modal .project-modal-footer {
    display: flex;
    justify-content: flex-end;
    margin-top: 24px
  }

  #project-detail-modal .project-modal-done {
    border: 0;
    border-radius: 999px;
    padding: 12px 20px;
    background: linear-gradient(100deg, #2f9b91, #d978a8);
    color: #fff;
    font-weight: 800;
    cursor: pointer;
    box-shadow: 0 8px 20px rgba(47, 127, 127, .18)
  }

  @keyframes projectModalIn {
    from {
      opacity: 0;
      transform: translateY(10px) scale(.985)
    }

    to {
      opacity: 1;
      transform: translateY(0) scale(1)
    }
  }

  @media(prefers-reduced-motion:reduce) {
    #project-detail-modal .project-modal-panel {
      animation: none
    }
  }
</style>

<section id="projects" class="py-20 bg-pale-mint/20 relative">

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
      <div>
        <h2 class="font-heading text-3xl sm:text-4xl font-bold text-deep-teal mb-2">Projects</h2>
        <p class="text-slate-600 font-medium font-['Baloo_2']">A showcase of the best work created by Karis Studio</p>
      </div>
      <a href="./projects" class="inline-flex items-center gap-2 mt-4 md:mt-0 px-6 py-3 rounded-full bg-white border border-teal-500/20 text-deep-teal font-bold text-sm shadow-sm hover:shadow-md transition-all duration-300 group">
        View More 
        <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
      </a>
    </div>

    <!-- Project cards: edit/duplicate each anchor to add projects -->
    <div id="project-carousel" class="project-carousel" aria-label="Project cards bergulir otomatis ke samping">
      <a href="./project-detail.html?project=clevo-world" data-project-title="Clevo World"
        data-project-category="Roblox Experience"
        data-project-description="A colorful Roblox world designed to create an inviting place for players to explore, discover activities, and enjoy a memorable shared experience."
        data-project-details="The project focuses on a polished environment, clear navigation, and playful visual details. The world is designed to feel welcoming while leaving room for future gameplay features and community activities."
        class="project-image-card group relative block overflow-hidden rounded-3xl border-2 border-white shadow-card focus:outline-none focus:ring-4 focus:ring-pastel-pink"
        aria-label="View more about Clevo World">
        <div
          class="project-art bg-gradient-to-br from-pastel-pink via-soft-blush to-cotton-candy flex items-center justify-center">
          <img class="project-card-image" src="image/clevo.png" alt="Preview Clevo World"
            onerror="this.style.display='none'"><i
            class="project-card-fallback w-20 h-20 text-white/75 transition-transform duration-500 group-hover:scale-110"></i>
          <span class="project-art-label">CLEVO WORLD</span>
        </div>
        <span class="project-view-more">View More <i data-lucide="arrow-up-right" class="w-4 h-4"></i></span>
      </a>
      <a href="./project-detail.html?project=clevo-world-2" data-project-title="Clevo World — Expansion"
        data-project-category="World Building"
        data-project-description="An extension of the Clevo World experience with additional spaces and opportunities to explore."
        data-project-details="This project concept builds on the core world with extra environment variety, points of interest, and room for new player activities. Visual consistency and an easy-to-follow layout help keep the experience cohesive."
        class="project-image-card group relative block overflow-hidden rounded-3xl border-2 border-white shadow-card focus:outline-none focus:ring-4 focus:ring-pastel-pink"
        aria-label="View more about Clevo World">
        <div
          class="project-art bg-gradient-to-br from-pastel-pink via-soft-blush to-cotton-candy flex items-center justify-center">
          <img class="project-card-image" src="image/clevo.png" alt="Preview Clevo World"
            onerror="this.style.display='none'"><i
            class="project-card-fallback w-20 h-20 text-white/75 transition-transform duration-500 group-hover:scale-110"></i>
          <span class="project-art-label">CLEVO WORLD</span>
        </div>
        <span class="project-view-more">View More <i data-lucide="arrow-up-right" class="w-4 h-4"></i></span>
      </a>
      <a href="./project-detail.html?project=test-map-2" data-project-title="Adventure Map"
        data-project-category="Environment Design"
        data-project-description="A Roblox map concept centered on exploration, recognizable landmarks, and a smooth player journey."
        data-project-details="The environment is planned around readable paths, visual landmarks, and varied spaces to encourage discovery. Layout and atmosphere work together to help players understand where to go and what to explore next."
        class="project-image-card group relative block overflow-hidden rounded-3xl border-2 border-white shadow-card focus:outline-none focus:ring-4 focus:ring-mint-green"
        aria-label="View more about Clevo World">
        <div
          class="project-art bg-gradient-to-br from-mint-green via-aqua-sky to-pale-mint flex items-center justify-center">
          <img class="project-card-image" src="image/clevo.png" alt="Preview Clevo World"
            onerror="this.style.display='none'"><i
            class="project-card-fallback w-20 h-20 text-white/75 transition-transform duration-500 group-hover:scale-110"></i>
          <span class="project-art-label">CLEVO WORLD</span>
        </div>
        <span class="project-view-more">View More <i data-lucide="arrow-up-right" class="w-4 h-4"></i></span>
      </a>
      <a href="./project-detail.html?project=ui-assets-2" data-project-title="UI & Game Assets"
        data-project-category="Interface Design"
        data-project-description="A set of visual assets and interface ideas created to support a consistent, friendly game experience."
        data-project-details="The focus is on clear hierarchy, cohesive colors, and approachable visual elements. The assets are intended to make menus and in-game information easier to understand while fitting the overall art direction."
        class="project-image-card group relative block overflow-hidden rounded-3xl border-2 border-white shadow-card focus:outline-none focus:ring-4 focus:ring-pastel-pink"
        aria-label="View more about Clevo World">
        <div
          class="project-art bg-gradient-to-br from-aqua-sky via-cotton-candy to-pastel-pink flex items-center justify-center">
          <img class="project-card-image" src="image/clevo.png" alt="Preview Clevo World"
            onerror="this.style.display='none'"><i
            class="project-card-fallback w-20 h-20 text-white/75 transition-transform duration-500 group-hover:scale-110"></i>
          <span class="project-art-label">CLEVO WORLD</span>
        </div>
        <span class="project-view-more">View More <i data-lucide="arrow-up-right" class="w-4 h-4"></i></span>
      </a>
      <a href="./project-detail.html?project=test-map" data-project-title="Roblox World Prototype"
        data-project-category="Game Environment"
        data-project-description="A prototype environment exploring layout, atmosphere, and the foundations of an engaging Roblox experience."
        data-project-details="This concept helps establish the core visual direction and player flow before expanding into additional gameplay. The layout prioritizes accessible navigation and clear areas for future interactions."
        class="project-image-card group relative block overflow-hidden rounded-3xl border-2 border-white shadow-card focus:outline-none focus:ring-4 focus:ring-mint-green"
        aria-label="View more about Clevo World">
        <div
          class="project-art bg-gradient-to-br from-mint-green via-aqua-sky to-pale-mint flex items-center justify-center">
          <img class="project-card-image" src="image/clevo.png" alt="Preview Clevo World"
            onerror="this.style.display='none'"><i
            class="project-card-fallback w-20 h-20 text-white/75 transition-transform duration-500 group-hover:scale-110"></i>
          <span class="project-art-label">CLEVO WORLD</span>
        </div>
        <span class="project-view-more">View More <i data-lucide="arrow-up-right" class="w-4 h-4"></i></span>
      </a>
      <a href="./project-detail.html?project=ui-assets" data-project-title="UI & Assets Showcase"
        data-project-category="UI/UX & Art"
        data-project-description="A showcase of interface styling and supporting assets designed to make game interactions feel polished."
        data-project-details="The work brings together interface components and visual assets into a unified style. Emphasis is placed on readability, consistent spacing, and a playful look that supports the player experience."
        class="project-image-card group relative block overflow-hidden rounded-3xl border-2 border-white shadow-card focus:outline-none focus:ring-4 focus:ring-pastel-pink"
        aria-label="View more about Clevo World">
        <div
          class="project-art bg-gradient-to-br from-aqua-sky via-cotton-candy to-pastel-pink flex items-center justify-center">
          <img class="project-card-image" src="image/clevo.png" alt="Preview UI & Assets"
            onerror="this.style.display='none'"><i
            class="project-card-fallback w-20 h-20 text-white/75 transition-transform duration-500 group-hover:scale-110"></i>
          <span class="project-art-label">CLEVO WORLD</span>
        </div>
        <span class="project-view-more">View More <i data-lucide="arrow-up-right" class="w-4 h-4"></i></span>
      </a>
    </div>

    <div id="project-detail-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="project-modal-title">
      <div class="project-modal-panel" role="document">
        <button type="button" class="project-modal-close" aria-label="Close project details"><i data-lucide="x" class="w-5 h-5"></i></button>
        <span class="project-modal-eyebrow" id="project-modal-category">PROJECT DETAILS</span>
        <h3 class="project-modal-title" id="project-modal-title">Project title</h3>
        <p class="project-modal-description" id="project-modal-description"></p>
        <p class="project-modal-details" id="project-modal-details"></p>
        <div class="project-modal-footer"><button type="button" class="project-modal-done">Close details</button></div>
      </div>
    </div>
  </div>

<script id="project-card-detail-popup">
(() => {
 const init = () => {
   const modal = document.getElementById('project-detail-modal');
   const rail = document.getElementById('project-carousel');
   if (!modal || !rail || modal.dataset.ready) return;
   modal.dataset.ready = 'true';
   const title = document.getElementById('project-modal-title');
   const category = document.getElementById('project-modal-category');
   const description = document.getElementById('project-modal-description');
   const details = document.getElementById('project-modal-details');
   let lastFocused = null;
   const close = () => { modal.classList.remove('is-open'); modal.setAttribute('aria-hidden','true'); document.body.style.overflow=''; if(lastFocused) lastFocused.focus(); };
   const open = card => {
     lastFocused = card;
     title.textContent = card.dataset.projectTitle || card.querySelector('.project-art-label')?.textContent?.trim() || 'Project Details';
     category.textContent = card.dataset.projectCategory || 'PROJECT DETAILS';
     description.textContent = card.dataset.projectDescription || 'Explore this project by Karis Studio.';
     details.textContent = card.dataset.projectDetails || 'More project information will be added soon.';
     modal.classList.add('is-open'); modal.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden';
     if(window.lucide && window.lucide.createIcons) window.lucide.createIcons();
     modal.querySelector('.project-modal-close').focus();
   };
   rail.addEventListener('click', e => { const card = e.target.closest('a.project-image-card'); if(!card) return; e.preventDefault(); open(card); });
   modal.querySelectorAll('.project-modal-close,.project-modal-done').forEach(btn=>btn.addEventListener('click',close));
   modal.addEventListener('click',e=>{if(e.target===modal) close();});
   document.addEventListener('keydown',e=>{if(e.key==='Escape' && modal.classList.contains('is-open')) close();});
 };
 if(document.readyState==='loading') document.addEventListener('DOMContentLoaded',init); else init();
})();
</script>

<script id="project-carousel-auto-scroll">
(() => {
 const init = () => {
   const rail = document.getElementById('project-carousel');
   if (!rail || rail.dataset.autoScrollReady) return;
   rail.dataset.autoScrollReady = 'true';
   // Duplicate the cards once for a seamless continuous loop.
   const originals = Array.from(rail.children);
   originals.forEach(card => {
     const clone = card.cloneNode(true);
     clone.setAttribute('aria-hidden','true');
     clone.querySelectorAll('a,button,[tabindex]').forEach(el => el.setAttribute('tabindex','-1'));
     rail.appendChild(clone);
   });
   if (window.lucide && window.lucide.createIcons) window.lucide.createIcons();
   let paused = false, last = 0, raf = 0;
   const speed = 26; // pixels per second
   const halfWidth = () => rail.scrollWidth / 2;
   const tick = now => {
     if (!last) last = now;
     const dt = Math.min(now-last, 50); last = now;
     if (!paused && !document.hidden && rail.scrollWidth > rail.clientWidth) {
       rail.scrollLeft += speed * dt / 1000;
       const loopAt = halfWidth();
       if (rail.scrollLeft >= loopAt) rail.scrollLeft -= loopAt;
     }
     raf = requestAnimationFrame(tick);
   };
   rail.addEventListener('mouseenter',()=>paused=true);
   rail.addEventListener('mouseleave',()=>paused=false);
   rail.addEventListener('focusin',()=>paused=true);
   rail.addEventListener('focusout',()=>paused=false);
   rail.addEventListener('touchstart',()=>paused=true,{passive:true});
   rail.addEventListener('touchend',()=>paused=false,{passive:true});
   rail.addEventListener('pointerdown',()=>paused=true);
   window.addEventListener('pointerup',()=>paused=false);
   raf = requestAnimationFrame(tick);
 };
 if(document.readyState==='loading') document.addEventListener('DOMContentLoaded',init); else init();
})();
</script>
</section>