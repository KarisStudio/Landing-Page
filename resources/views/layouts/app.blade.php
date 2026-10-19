<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Karis Studio - Landing Page')</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Allura&family=Baloo+2:wght@400;500;600;700;800&family=Great+Vibes&family=Raleway:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <script src="{{ asset('js/project-modal.js') }}"></script>

  <style id="karis-intro-animation">
  #karis-intro {
    position: fixed; inset: 0; z-index: 99999; display: grid; place-items: center;
    overflow: hidden; background: radial-gradient(circle at 25% 20%, #F9F3F4 0, transparent 34%),
      radial-gradient(circle at 80% 75%, #6EE7B7 0, transparent 35%),
      linear-gradient(135deg, #F9A8D4 0%, #F9F3F4 48%, #6EE7B7 100%);
    transition: opacity .7s ease, visibility .7s ease;
  }
  #karis-intro.is-hidden { opacity: 0; visibility: hidden; pointer-events: none; }
  #karis-intro .intro-orb { position:absolute; border-radius:50%; filter:blur(1px); opacity:.65; animation: introFloat 3.6s ease-in-out infinite alternate; }
  #karis-intro .intro-orb.one { width:180px;height:180px;left:8%;top:12%;background:#F9A8D4; }
  #karis-intro .intro-orb.two { width:230px;height:230px;right:5%;bottom:8%;background:#6EE7B7;animation-delay:-1.4s; }
  #karis-intro .intro-content { position:relative; text-align:center; padding:32px; animation: introPop .85s cubic-bezier(.2,.8,.2,1) both; }
  #karis-intro .intro-mark { width:108px;height:108px;margin:0 auto 20px;display:grid;place-items:center;position:relative;
    border-radius:30px;background:linear-gradient(145deg,#F9F3F4,#F9A8D4);border:3px solid rgba(255,255,255,.9);
    box-shadow:0 16px 45px rgba(38,159,154,.18), inset 0 0 0 1px rgba(38,159,154,.15); animation: introBob 2s ease-in-out infinite; }
  #karis-intro .intro-mark img { width:100%;height:100%;object-fit:contain;border-radius:50%;position:relative;z-index:1; }
  #karis-intro .intro-mark { width:126px;height:126px;border-radius:50%;padding:5px;background:rgba(255,255,255,.9); }
  #karis-intro .intro-curl { position:absolute; pointer-events:none; z-index:0; color:#EC4899; font-family:'Allura (pengganti Sloop Script Pro)','Amoresa','Brush Script MT','Segoe Script',cursive; font-weight:400; line-height:1; opacity:.9; text-shadow:0 0 12px rgba(255,255,255,.9); }
  #karis-intro .intro-curl.c1 { left:8%;top:8%;font-size:clamp(90px,18vw,190px);transform:rotate(-22deg); }
  #karis-intro .intro-curl.c2 { right:7%;bottom:4%;font-size:clamp(100px,20vw,220px);transform:rotate(18deg);color:#6EE7B7; }
  #karis-intro .intro-curl.c3 { right:17%;top:12%;font-size:clamp(58px,10vw,110px);transform:rotate(30deg);color:#F9A8D4; }
  #karis-intro .intro-curl.c4 { left:15%;bottom:13%;font-size:clamp(55px,10vw,100px);transform:rotate(-18deg);color:#5B9BD5; }
  #karis-intro .intro-mark::after { content:'';position:absolute;inset:-10px;border:2px solid rgba(255,255,255,.8);border-radius:50%;box-shadow:0 0 24px rgba(233,79,168,.28); }
  #karis-intro .intro-star { position:absolute;color:#fff;font-size:25px;text-shadow:0 0 12px #fff,0 0 18px #F472B6;animation:introTwinkle 1.4s ease-in-out infinite alternate; }
  #karis-intro .intro-star.a { top:-10px;right:-15px; } #karis-intro .intro-star.b { bottom:3px;left:-22px;animation-delay:.6s;font-size:19px; }
  #karis-intro .intro-title { font-family:'Baloo 2','Raleway',sans-serif;font-size:clamp(32px,6vw,48px);font-weight:700;color:#2F7F7F;letter-spacing:.3px; }
  #karis-intro .intro-sub { margin-top:5px;color:#6c9692;font-size:13px;font-weight:700;letter-spacing:3px;text-transform:uppercase; }
  #karis-intro .intro-track { width:190px;height:6px;border-radius:99px;background:rgba(255,255,255,.75);overflow:hidden;margin:26px auto 0; }
  #karis-intro .intro-progress { height:100%;width:35%;border-radius:99px;background:linear-gradient(90deg,#F472B6,#00B3B4);animation:introLoad 1.8s ease-in-out forwards; }
  @keyframes introPop { from { opacity:0;transform:translateY(18px) scale(.92) } to { opacity:1;transform:translateY(0) scale(1) } }
  @keyframes introBob { 0%,100% { transform:translateY(0) rotate(-3deg) } 50% { transform:translateY(-9px) rotate(3deg) } }
  @keyframes introFloat { from { transform:translate3d(0,0,0) scale(1) } to { transform:translate3d(18px,-22px,0) scale(1.08) } }
  @keyframes introTwinkle { from { opacity:.45;transform:scale(.75) rotate(-12deg) } to { opacity:1;transform:scale(1.2) rotate(12deg) } }
  @keyframes introLoad { from { width:0 } to { width:100% } }
  @media (prefers-reduced-motion: reduce) { #karis-intro *, #karis-intro *::before { animation-duration:.01ms !important; transition-duration:.01ms !important; } }
  </style>
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Tailwind Custom Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'pastel-pink': '#F9A8D4',
            'cotton-candy': '#F9A8D4',
            'soft-blush': '#F472B6',
            'milky-white': '#F9F3F4',
            'pale-mint': '#6EE7B7',
            'mint-green': '#6EE7B7',
            'aqua-sky': '#5B9BD5',
            'deep-teal': '#00B3B4',
            'deep-teal-dark': '#2F7F7F',
          },
          fontFamily: {
            display: ['Baloo 2', 'cursive'],
            body: ['Raleway', 'sans-serif'],
          },
          boxShadow: {
            'soft': '0 10px 25px -5px rgba(38, 159, 154, 0.1), 0 8px 10px -6px rgba(246, 187, 213, 0.1)',
            'card': '0 8px 20px rgba(38, 159, 154, 0.08)',
            'button': '0 4px 14px rgba(38, 159, 154, 0.3)',
          }
        }
      }
    }
  </script>

  <!-- External Separated CSS -->
  <link rel="stylesheet" href="{{ asset('css/karis-studio.css') }}">
</head>

<body class="bg-milky-white text-gray-800 antialiased selection:bg-pastel-pink selection:text-white">

  <!-- Intro Screen Animasi -->
  <div id="karis-intro" aria-label="Karis Studio sedang dimuat"
    style="position: fixed; inset: 0; z-index: 99999; display: grid; place-items: center; background: linear-gradient(135deg, #F9A8D4 0%, #F9F3F4 48%, #6EE7B7 100%); transition: opacity .7s ease;">
    <div style="text-align: center;">
      <h1 style="font-family:'Baloo 2',cursive; font-size: 2rem; color:#2F7F7F; font-weight:700;">Karis Studio</h1>
      <p style="font-size:12px; font-weight:700; letter-spacing:3px; color:#6c9692;">LOADING...</p>
    </div>
  </div>
  <script>
    window.addEventListener('load', () => {
      setTimeout(() => {
        const intro = document.getElementById('karis-intro');
        if (intro) { intro.style.opacity = '0'; setTimeout(() => intro.remove(), 700); }
      }, 1200);
    });
  </script>
  <script>
    window.addEventListener("load", function () {
  const intro = document.getElementById("karis-intro");
  const progress = document.querySelector(".intro-progress");
  
  let width = 0;
  const interval = setInterval(function () {
    if (width >= 100) {
      clearInterval(interval);
      // Sembunyikan elemen intro setelah loading selesai
      intro.classList.add("fade-out");
    } else {
      width += 10;
      progress.style.width = width + "%";
    }
  }, 50);
});
  </script>

  <!-- Panggil Komponen Navbar -->
  @include('components.navbar')

  <!-- Konten Utama Halaman -->
  @yield('content')

  <!-- Footer Section -->
  @include('components.footer')

  <!-- Inisialisasi Lucide Icons -->
  <script>
    lucide.createIcons();
  </script>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuBtn && mobileMenu) {
      menuBtn.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
      });
    }
  });
</script>
</body>

</html>