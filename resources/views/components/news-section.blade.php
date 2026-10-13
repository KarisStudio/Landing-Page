<style id="karis-news-creative-upgrade">
  #news {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    background: radial-gradient(circle at 8% 12%, rgba(249, 168, 212, .28), transparent 26%), radial-gradient(circle at 92% 28%, rgba(153, 246, 228, .38), transparent 27%), radial-gradient(circle at 50% 100%, rgba(196, 181, 253, .24), transparent 34%), linear-gradient(135deg, #fffafc 0%, #f4fffc 52%, #fbf8ff 100%) !important
  }

  #news:before,
  #news:after {
    content: "";
    position: absolute;
    z-index: -1;
    border: 1px solid rgba(45, 143, 137, .16);
    border-radius: 50%;
    pointer-events: none
  }

  #news:before {
    width: 300px;
    height: 300px;
    top: 70px;
    right: -130px;
    box-shadow: 0 0 0 22px rgba(255, 255, 255, .18), 0 0 0 48px rgba(249, 168, 212, .08)
  }

  #news:after {
    width: 210px;
    height: 210px;
    bottom: 20px;
    left: -100px;
    box-shadow: 0 0 0 22px rgba(196, 181, 253, .09), 0 0 0 44px rgba(153, 246, 228, .10)
  }

  #news .max-w-7xl {
    position: relative;
    z-index: 1
  }

  #news .max-w-7xl>div:first-child {
    padding: 26px 28px;
    border: 1px solid rgba(255, 255, 255, .88);
    border-radius: 28px;
    background: rgba(255, 255, 255, .62);
    box-shadow: 0 14px 44px rgba(66, 120, 116, .07);
    backdrop-filter: blur(12px)
  }

  #news .max-w-7xl>div:first-child span:first-child {
    padding: 8px 13px;
    border-radius: 999px;
    background: linear-gradient(110deg, #ffe2ef, #dcfaf1);
    color: #398a85;
    letter-spacing: .16em
  }

  #news h2 {
    display: inline-block;
    position: relative;
    padding-bottom: 14px;
    background: linear-gradient(100deg, #287d7a, #d76eaa 52%, #62bdb0);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent
  }

  #news h2:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 76%;
    height: 5px;
    border-radius: 99px;
    background: linear-gradient(90deg, #f5a8ce, #c4b5fd, #91e4d0);
    transform-origin: left;
    transition: width .35s ease
  }

  #news h2:hover:after {
    width: 100%
  }

  #news .news-card {
    position: relative;
    border: 1px solid rgba(255, 255, 255, .96) !important;
    background: rgba(255, 255, 255, .82) !important;
    border-radius: 28px !important;
    box-shadow: 0 12px 32px rgba(62, 117, 113, .09), inset 0 0 0 1px rgba(218, 244, 236, .7) !important;
    transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
    backdrop-filter: blur(10px)
  }

  #news .news-card:before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: inherit;
    padding: 1px;
    background: linear-gradient(135deg, rgba(249, 168, 212, .7), rgba(196, 181, 253, .35), rgba(153, 246, 228, .8));
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
    opacity: .65;
    transition: opacity .35s ease
  }

  #news .news-card:hover {
    transform: translateY(-9px) rotate(-.25deg);
    box-shadow: 0 24px 52px rgba(62, 117, 113, .16) !important
  }

  #news .news-card:nth-child(2):hover {
    transform: translateY(-9px) rotate(.25deg)
  }

  #news .news-card>a:first-child {
    position: relative;
    margin: 9px 9px 0;
    border-radius: 21px;
    overflow: hidden;
    background: linear-gradient(135deg, #ffe5f0, #d9fbf0, #e9e2ff)
  }

  #news .news-card>a:first-child img {
    height: 220px;
    border-radius: 21px;
    transition: transform .65s cubic-bezier(.2, .8, .2, 1), filter .4s ease
  }

  #news .news-card:hover>a:first-child img {
    transform: scale(1.07);
    filter: saturate(1.08)
  }

  #news .news-card .p-6 {
    padding: 23px 24px 25px
  }

  #news .news-card .p-6>div:first-child span {
    letter-spacing: .08em;
    font-size: 10px;
    padding: 6px 11px;
    border: 1px solid rgba(255, 255, 255, .8)
  }

  #news .news-card h3 {
    line-height: 1.25;
    transition: color .25s ease
  }

  #news .news-card:hover h3 {
    color: #d16fa7
  }

  #news .news-card .p-6>a:last-child {
    display: inline-flex;
    padding: 10px 15px;
    border-radius: 999px;
    background: linear-gradient(100deg, #e0faf2, #ffe5f0);
    transition: transform .25s ease, box-shadow .25s ease
  }

  #news .news-card .p-6>a:last-child:hover {
    transform: translateX(4px);
    box-shadow: 0 7px 18px rgba(80, 150, 140, .13)
  }

  @media(max-width:640px) {
    #news .max-w-7xl>div:first-child {
      padding: 20px;
      border-radius: 22px
    }

    #news .news-card>a:first-child img {
      height: 200px
    }
  }

  @media(prefers-reduced-motion:reduce) {

    #news .news-card,
    #news .news-card img,
    #news h2:after {
      transition: none !important
    }
  }
</style>

<section id="news" class="py-20 bg-white relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-4 mb-10">
      <div>
        <span
          class="inline-flex items-center gap-2 text-xs font-bold tracking-[.18em] uppercase text-soft-blush mb-3"><i
            data-lucide="newspaper" class="w-4 h-4"></i> Latest Updates</span>
        <h2 class="font-heading text-3xl sm:text-4xl font-bold text-deep-teal">News & Articles</h2>
        <p class="text-slate-600 font-medium mt-2 max-w-2xl">Updates, behind-the-scenes stories, announcements, and tips
          from Karis Studio.</p>
      </div>
    </div>
    <!-- NEWS MANAGEMENT: Tambah/edit artikel dengan menyalin satu blok <article class="news-card">. Ubah gambar, kategori, tanggal, judul, ringkasan, dan tautan. -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- ARTICLE 1: ganti images/news-1.jpg dengan gambar artikel sendiri -->
      <article
        class="news-card group overflow-hidden rounded-3xl bg-milky-white border border-pink-100 shadow-sm hover:shadow-xl transition-all">
        <a href="articles/kabar-terbaru.html" class="block overflow-hidden"><img src="image/news.png"
            alt="Preview kabar terbaru Karis Studio" loading="lazy"
            class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105"
            onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
          <div
            class="w-full h-48 items-center justify-center bg-gradient-to-br from-pink-100 via-purple-100 to-teal-100"
            style="display:none"><i data-lucide="newspaper" class="w-12 h-12 text-deep-teal/50"></i></div>
        </a>
        <div class="p-6">
          <div class="flex items-center gap-2 text-xs font-semibold mb-3"><span
              class="px-3 py-1 rounded-full bg-pink-100 text-pink-700">UPDATE</span><time datetime="2026-10-12"
              class="text-slate-400">12 Okt 2026</time></div>
          <h3 class="font-heading text-xl font-bold text-deep-teal mb-2">The Latest from Karis Studio</h3>
          <p class="text-sm leading-relaxed text-slate-600 mb-5">Add a summary of the latest Karis Studio news or
            announcements here.</p><a href="articles/kabar-terbaru.html"
            class="inline-flex items-center gap-2 font-semibold text-deep-teal hover:text-soft-blush">Read Article <i
              data-lucide="arrow-up-right" class="w-4 h-4"></i></a>
        </div>
      </article>
      <!-- ARTICLE 2: duplikasi blok article untuk menambahkan berita -->
      <article
        class="news-card group overflow-hidden rounded-3xl bg-milky-white border border-teal-100 shadow-sm hover:shadow-xl transition-all">
        <a href="articles/di-balik-project.html" class="block overflow-hidden"><img src="image/news.png"
            alt="Cerita project Karis Studio" loading="lazy"
            class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105"
            onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
          <div class="w-full h-48 items-center justify-center bg-gradient-to-br from-teal-100 via-blue-100 to-pink-100"
            style="display:none"><i data-lucide="layers" class="w-12 h-12 text-deep-teal/50"></i></div>
        </a>
        <div class="p-6">
          <div class="flex items-center gap-2 text-xs font-semibold mb-3"><span
              class="px-3 py-1 rounded-full bg-teal-100 text-teal-700">BEHIND THE SCENES</span><time
              datetime="2026-10-10" class="text-slate-400">10 Okt 2026</time></div>
          <h3 class="font-heading text-xl font-bold text-deep-teal mb-2">Behind the Project</h3>
          <p class="text-sm leading-relaxed text-slate-600 mb-5">Share the creative process, challenges, or interesting
            stories behind an ongoing project.</p><a href="articles/di-balik-project.html"
            class="inline-flex items-center gap-2 font-semibold text-deep-teal hover:text-soft-blush">Read Article <i
              data-lucide="arrow-up-right" class="w-4 h-4"></i></a>
        </div>
      </article>
      <!-- ARTICLE 3: duplikasi blok article untuk menambahkan berita -->
      <article
        class="news-card group overflow-hidden rounded-3xl bg-milky-white border border-purple-100 shadow-sm hover:shadow-xl transition-all">
        <a href="articles/tips-experience-roblox.html" class="block overflow-hidden"><img src="image/news.png"
            alt="Tips Roblox dari Karis Studio" loading="lazy"
            class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105"
            onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
          <div
            class="w-full h-48 items-center justify-center bg-gradient-to-br from-purple-100 via-pink-100 to-yellow-100"
            style="display:none"><i data-lucide="lightbulb" class="w-12 h-12 text-deep-teal/50"></i></div>
        </a>
        <div class="p-6">
          <div class="flex items-center gap-2 text-xs font-semibold mb-3"><span
              class="px-3 py-1 rounded-full bg-purple-100 text-purple-700">TIPS</span><time datetime="2026-10-08"
              class="text-slate-400">8 Okt 2026</time></div>
          <h3 class="font-heading text-xl font-bold text-deep-teal mb-2">Tips for Creating a Roblox Experience</h3>
          <p class="text-sm leading-relaxed text-slate-600 mb-5">Use this article to share tips, quick tutorials, or
            insights about Roblox.</p><a href="articles/tips-experience-roblox.html"
            class="inline-flex items-center gap-2 font-semibold text-deep-teal hover:text-soft-blush">Read Article <i
              data-lucide="arrow-up-right" class="w-4 h-4"></i></a>
        </div>
      </article>
    </div>
  </div>
</section>