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
    background: #a5185f;;
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

@php
  // Membaca file JSON dari storage/app/projects.json tanpa perlu controller
  $jsonPath = storage_path('app/projects.json');

  $projects = [];
  if (file_exists($jsonPath)) {
    $jsonContent = file_get_contents($jsonPath);
    $projects = json_decode($jsonContent, true) ?? [];
  }

  // Mengambil maksimal 4 project terbaru untuk landing page
  $recentProjects = array_slice($projects, 0, 4);
@endphp

<!-- Pembungkus Utama dengan State Alpine.js -->
<section id="projects" class="py-20 bg-pale-mint/20 relative" x-data="{
    isOpen: false,
    activeProject: {},
    activeImage: '',

    openModal(project, mainImg) {
        this.activeProject = project;
        this.activeImage = mainImg;
        this.isOpen = true;
    },

    // Fungsi Next (Gambar Selanjutnya)
    nextImage() {
        const imgs = this.activeProject.images || (this.activeProject.image ? [this.activeProject.image] : []);
        if (imgs.length < 2) return;
        const currentPath = this.activeImage.replace('{{ asset('') }}', '');
        let currentIndex = imgs.findIndex(img => img.replace(/^\//, '') === currentPath);
        let nextIndex = (currentIndex + 1) % imgs.length;
        this.activeImage = '{{ asset('') }}' + imgs[nextIndex].replace(/^\//, '');
    },

    // Fungsi Previous (Gambar Sebelumnya)
    prevImage() {
        const imgs = this.activeProject.images || (this.activeProject.image ? [this.activeProject.image] : []);
        if (imgs.length < 2) return;
        const currentPath = this.activeImage.replace('{{ asset('') }}', '');
        let currentIndex = imgs.findIndex(img => img.replace(/^\//, '') === currentPath);
        let prevIndex = (currentIndex - 1 + imgs.length) % imgs.length;
        this.activeImage = '{{ asset('') }}' + imgs[prevIndex].replace(/^\//, '');
    }
}">

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
      <div>
        <h2 class="font-heading text-3xl font-['Baloo_2'] sm:text-4xl font-bold text-deep-teal mb-2">Projects</h2>
        <p class="text-slate-600 font-medium font-['Baloo_2']">A showcase of the best work created by Karis
          Studio</p>
      </div>
      <a href="{{ route('projects.index') }}"
        class="inline-flex items-center gap-2 mt-4 md:mt-0 px-6 py-3 rounded-full bg-white border border-pink-500/30 text-pink-700 font-bold text-sm shadow-sm hover:shadow-md hover:shadow-pink-500/20 transition-all duration-300 group">
        View More
        <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
      </a>
    </div>

    @if (!empty($recentProjects))
      <!-- Project cards Carousel -->
      <div id="project-carousel" class="project-carousel" aria-label="Project cards bergulir otomatis ke samping">
        @foreach ($recentProjects as $project)
          @php
            $firstImg = $project['image'][0] ?? ($project['images'][0] ?? 'images/default.jpg');
            $mainImageUrl = asset(ltrim($firstImg, '/'));
          @endphp

          <!-- Card menggunakan struktur persis seperti milik kamu -->
          <div @click="openModal({{ \Illuminate\Support\Js::from($project) }}, '{{ $mainImageUrl }}')"
            class="group cursor-pointer relative bg-gradient-to-br from-pink-200 via-teal-100 to-teal-300 p-1.5 rounded-[2rem] shadow-sm hover:shadow-xl transition transform hover:-translate-y-1.5 duration-300 min-w-[280px] sm:min-w-[320px]">

            <div class="relative aspect-square rounded-[1.75rem] overflow-hidden bg-slate-100">
              <img src="{{ $mainImageUrl }}" alt="{{ $project['title'] }}"
                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

              <div
                class="absolute inset-0 bg-linear-to-t from-teal-950/85 via-teal-900/30 to-teal-900/0 p-5 flex flex-col justify-between">
                <div class="flex justify-between items-start">
                  <span
                    class="text-[10px] font-bold text-white/80 bg-black/20 backdrop-blur-md px-2.5 py-1 rounded-full">{{ $project['id'] ?? '01' }}</span>
                  <div
                    class="w-8 h-8 rounded-full bg-white/90 text-[#23a099] flex items-center justify-center shadow-md group-hover:bg-[#23a099] group-hover:text-white transition">
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                  </div>
                </div>

                <div class="bg-[#F5A6BA]/30 backdrop-blur-md p-3 rounded-2xl border border-white/30 mt-2 shadow-md">
                  <span
                    class="text-[9px] font-bold text-deep-teal tracking-wider uppercase bg-white/90 px-2 py-0.5 rounded-md shadow-xs">
                    {{ $project['category'] ?? 'SIMULATOR' }}
                  </span>
                  <h3 class="text-xl font-extrabold text-white font-['Baloo_2'] mt-1 drop-shadow-sm">
                    {{ $project['title'] }}
                  </h3>
                </div>
              </div>
            </div>
            <i class="fa-solid fa-sparkles text-teal-400 text-xs absolute -bottom-1 -left-1"></i>
          </div>
        @endforeach
      </div>
    @else
      <div class="text-center py-12 bg-white/50 rounded-3xl border border-dashed border-teal-200">
        <p class="text-slate-400 font-['Raleway'] text-sm">Belum ada project yang ditampilkan.</p>
      </div>
    @endif

    <!-- Modal Component Persis Punya Kamu -->
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

          <!-- Layout 2 Kolom (Grid) -->
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-end">

            <!-- KOLOM KIRI: Detail Info -->
            <div class="lg:col-span-5 order-2 lg:order-1 flex flex-col justify-start h-full">

              <!-- 1. FIXED HEADER -->
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

              <!-- 2. SCROLLABLE AREA -->
              <div class="max-h-[35vh] lg:max-h-[40vh] overflow-y-auto pr-2 scrollbar-thin my-3">
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-['Raleway'] whitespace-pre-line text-justify"
                  x-text="activeProject.description"></p>
              </div>

              <!-- 3. FIXED FOOTER -->
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

            <!-- KOLOM KANAN: Preview Gambar, Galeri & Tombol Play -->
            <div class="lg:col-span-7 space-y-3 order-1 lg:order-2 flex flex-col justify-between h-full">
              <div class="space-y-3">
                <!-- Preview Gambar Utama dengan Tombol Prev & Next -->
                <div
                  class="aspect-video w-full rounded-2xl overflow-hidden bg-slate-100 border border-slate-200 relative group shadow-sm">
                  <img :src="activeImage" :alt="activeProject.title"
                    class="w-full h-full object-cover transition-all duration-300">

                  <!-- Tombol Prev & Next (Otomatis muncul jika jumlah gambar > 1) -->
                  <template
                    x-if="(activeProject.image || activeProject.images) && (activeProject.image || activeProject.images).length > 1">
                    <div>
                      <!-- Tombol Previous (Kiri) -->
                      <button @click="prevImage()" type="button" title="Gambar sebelumnya"
                        class="absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/50 hover:bg-black/80 text-white flex items-center justify-center backdrop-blur-md transition shadow-lg z-20 cursor-pointer">
                        <i class="fa-solid fa-chevron-left text-xs"></i>
                      </button>

                      <!-- Tombol Next (Kanan) -->
                      <button @click="nextImage()" type="button" title="Gambar selanjutnya"
                        class="absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/50 hover:bg-black/80 text-white flex items-center justify-center backdrop-blur-md transition shadow-lg z-20 cursor-pointer">
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                      </button>
                    </div>
                  </template>
                </div>

                <!-- Galeri Thumbnail Kecil -->
                <template
                  x-if="(activeProject.image || activeProject.images) && (activeProject.image || activeProject.images).length > 1">
                  <div class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-thin">
                    <template x-for="(img, index) in (activeProject.image || activeProject.images)" :key="index">
                      <button @click="activeImage = '{{ asset('') }}' + img.replace(/^\//, '')" :class="activeImage === ('{{ asset('') }}' + img.replace(/^\//, '')) ?
                                                    'ring-2 ring-[#F5A6BA] opacity-100 scale-105' :
                                                    'opacity-60 hover:opacity-100'"
                        class="w-16 h-12 rounded-lg overflow-hidden shrink-0 border border-slate-200 transition duration-200">
                        <img :src="'{{ asset('') }}' + img.replace(/^\//, '')" class="w-full h-full object-cover">
                      </button>
                    </template>
                  </div>
                </template>
              </div>

              <!-- Tombol Play Roblox -->
              <template x-if="activeProject.link || activeProject.url || activeProject.map_url">
                <a :href="activeProject.link || activeProject.url || activeProject.map_url" target="_blank"
                  rel="noopener noreferrer" style="background: linear-gradient(180deg, #F5A6BA 0%, #A5185F 100%);"
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
  </div>

  <!-- Script Auto Scroll Carousel -->
  <script id="project-carousel-auto-scroll">
    (() => {
      const init = () => {
        const rail = document.getElementById('project-carousel');
        if (!rail || rail.dataset.autoScrollReady) return;
        rail.dataset.autoScrollReady = 'true';

        const originals = Array.from(rail.children);

        // HANYA jalankan auto-scroll dan kloning kartu JIKA jumlah data LEBIH DARI ATAU SAMA DENGAN 4
        // Jika data di JSON di bawah 4 (misal cuma 1, 2, atau 3), script ini tidak akan jalan sama sekali
        if (originals.length >= 4) {
          originals.forEach(card => {
            const clone = card.cloneNode(true);
            clone.setAttribute('aria-hidden', 'true');
            clone.querySelectorAll('a,button,[tabindex]').forEach(el => el.setAttribute(
              'tabindex', '-1'));
            rail.appendChild(clone);
          });

          if (window.lucide && window.lucide.createIcons) window.lucide.createIcons();

          let paused = false,
            last = 0,
            raf = 0;
          const speed = 26; // pixels per second
          const halfWidth = () => rail.scrollWidth / 2;

          const tick = now => {
            if (!last) last = now;
            const dt = Math.min(now - last, 50);
            last = now;
            if (!paused && !document.hidden && rail.scrollWidth > rail.clientWidth) {
              rail.scrollLeft += speed * dt / 1000;
              const loopAt = halfWidth();
              if (rail.scrollLeft >= loopAt) rail.scrollLeft -= loopAt;
            }
            raf = requestAnimationFrame(tick);
          };

          rail.addEventListener('mouseenter', () => paused = true);
          rail.addEventListener('mouseleave', () => paused = false);
          rail.addEventListener('focusin', () => paused = true);
          rail.addEventListener('focusout', () => paused = false);
          rail.addEventListener('touchstart', () => paused = true, {
            passive: true
          });
          rail.addEventListener('touchend', () => paused = false, {
            passive: true
          });
          rail.addEventListener('pointerdown', () => paused = true);
          window.addEventListener('pointerup', () => paused = false);
          raf = requestAnimationFrame(tick);
        }
      };

      if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
      else init();
    })();
  </script>
</section>