<header class="sticky top-0 z-50 bg-milky-white/90 backdrop-blur-md border-b border-cotton-candy/50 transition-all">

<style id="karis-creative-navbar-2026">
/* Hapus display:flex di sini agar diatur oleh Tailwind (hidden md:flex) */
.karis-nav{align-items:center;gap:5px;padding:7px;border:1px solid rgba(47,127,127,.16);border-radius:999px;background:linear-gradient(120deg,rgba(249,243,244,.94),rgba(255,255,255,.88));box-shadow:0 10px 34px rgba(47,127,127,.10),inset 0 1px 0 rgba(255,255,255,.9);backdrop-filter:blur(18px);-webkit-backdrop-filter:blur(18px)}

.karis-nav-link{position:relative;isolation:isolate;display:inline-flex;align-items:center;justify-content:center;gap:7px;padding:11px 15px;border-radius:999px;font-size:12px;font-weight:800;letter-spacing:.01em;color:#2F7F7F;text-decoration:none;white-space:nowrap;transition:color .22s ease,transform .22s ease,background .22s ease,box-shadow .22s ease}
.karis-nav-link:hover{background:linear-gradient(135deg,rgba(249,168,212,.36),rgba(110,231,183,.35));color:#174f53;transform:translateY(-2px);box-shadow:0 5px 14px rgba(47,127,127,.09)}
.karis-nav-link:focus-visible{outline:3px solid #5B9BD5;outline-offset:3px}
.karis-nav-hiring{background:linear-gradient(120deg,#F9A8D4,#F472B6 48%,#6EE7B7 100%);color:#173c43!important;box-shadow:0 4px 13px rgba(244,114,182,.19)}
.karis-nav-hiring:hover{background:linear-gradient(120deg,#F472B6,#6EE7B7 70%,#5B9BD5);color:#173c43!important}
.hiring-nav-dot{width:7px;height:7px;border-radius:50%;background:#2F7F7F;box-shadow:0 0 0 3px rgba(255,255,255,.55)}

@media(max-width:1050px){.karis-nav{gap:2px;padding:5px}.karis-nav-link{padding:9px 10px;font-size:11px}}
@media(max-width:767px){.karis-nav{border-radius:18px}}
@media(prefers-reduced-motion:reduce){.karis-nav-link{transition:none!important}}
</style>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

    <!-- Logo -->
    <a href="#" class="flex items-center gap-2 group">
      <img src="./Image/logo.png" alt="Logo Karis" class="w-11 h-11 object-contain">
      <div class="flex flex-col">
        <span class="font-heading text-2xl font-bold text-deep-teal leading-none tracking-wide">KARIS</span>
        <span class="font-heading text-xs font-semibold text-soft-blush tracking-widest uppercase">Studio</span>
      </div>
    </a>

    <!-- Desktop Navigation -->
    <nav class="karis-nav hidden md:flex items-center gap-1 font-medium" aria-label="Main navigation">
      <a href="#home" class="karis-nav-link active">Home</a>
      <a href="#about" class="karis-nav-link">About</a>
      <a href="#projects" class="karis-nav-link">Projects</a>
      <a href="#news" class="karis-nav-link">News</a>
      <a href="#contact" class="karis-nav-link">Contact</a>
      <a href="#community" class="karis-nav-link">Community</a>
      <a href="hiring.html" class="karis-nav-link karis-nav-hiring"><i data-lucide="briefcase-business" class="w-4 h-4"></i> Hiring <span class="hiring-nav-dot"></span></a>
    </nav>

    <!-- Tombol Menu Mobile (Responsif: hanya tampil di layar kecil/mobile, tersembunyi di md ke atas) -->
    <div class="md:hidden flex items-center">
      <button id="menu-btn" class="text-slate-700 focus:outline-none p-2">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>

  </div>

  <!-- Laci Menu Mobile (Responsif: tersembunyi secara default, diatur via JS/Tailwind saat tombol diklik) -->
  <div id="mobile-menu" class="hidden md:hidden px-4 pt-2 pb-6 space-y-2 bg-white border-b border-gray-200 relative z-50">
    <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-gray-100">Home</a>
    <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-gray-100">About</a>
    <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-gray-100">Projects</a>
    <a href="#news" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-gray-100">News</a>
    <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-gray-100">Contact</a>
    <a href="#community" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:bg-gray-100">Community</a>
    <a href="#hiring" class="block px-3 py-2 rounded-md text-base font-medium bg-indigo-600 text-white text-center">Hiring</a>
  </div>

</header>