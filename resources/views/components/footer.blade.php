<footer class="karis-footer relative overflow-hidden">
    <div class="footer-glow footer-glow-one"></div>
    <div class="footer-glow footer-glow-two"></div>
    <div class="footer-inner">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="#home" class="footer-logo"><img src="./Image/logo.png" alt="Karis Studio logo"></a>
                <div><a href="#home" class="footer-brand-name">Karis Studio<span>✦</span></a>
                    <p>Turning your Roblox ideas into<br class="hidden sm:block"> worlds worth exploring.</p>
                </div>
            </div>
            <div class="footer-column">
                <h3>Explore</h3><a href="#about">About Us</a><a href="#projects">Our Projects</a><a href="#news">News
                    &amp; Articles</a><a href="#community">Community</a><a href="hiring.html">Careers / Hiring</a>
            </div>
            <div class="footer-column">
                <h3>Let's Connect</h3><a href="booking.html"></a><a href="#contact">Contact Us</a><a
                    href="https://karis.info" target="_blank" rel="noopener noreferrer">karis.info ↗</a>
            </div>
        </div>
        <div class="footer-bottom"><span>© <span id="footer-year">2026</span> Karis Studio. All rights
                reserved.</span><a href="#home" class="footer-back-top">Back to top ↑</a></div>
    </div>
</footer>

<style>
    .karis-footer {
        isolation: isolate;
        background: linear-gradient(125deg, #F9D5E5 0%, #DCE9E8 52%, #A8E5D1 100%);
        color: #fff;
        padding: 36px 24px 16px;
        border-top: 1px solid rgba(255, 255, 255, .22)
    }

    .karis-footer:before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        opacity: .12;
        background-image: radial-gradient(#fff 1px, transparent 1px);
        background-size: 22px 22px;
        mask-image: linear-gradient(to bottom, black, transparent 85%)
    }

    .footer-glow {
        position: absolute;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        filter: blur(65px);
        opacity: .36;
        z-index: -1;
        pointer-events: none
    }

    .footer-glow-one {
        background: #fb7185;
        top: -120px;
        left: -80px
    }

    .footer-glow-two {
        background: #f9a8d4;
        right: -90px;
        top: 20px
    }

    .footer-inner {
        max-width: 1200px;
        margin: auto
    }

    .footer-top {
        display: grid;
        grid-template-columns: 1.35fr .8fr .9fr 1.1fr;
        gap: 26px;
        padding-bottom: 26px
    }

    .footer-brand {
        display: flex;
        align-items: flex-start;
        gap: 14px
    }

    .footer-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 58px;
        height: 58px;
        flex-shrink: 0;
        border-radius: 19px;
        background: rgba(255, 255, 255, .78);
        border: 1px solid rgba(255, 255, 255, .95);
        box-shadow: 0 8px 24px rgba(66, 139, 130, .12)
    }

    .footer-logo img {
        width: 43px;
        height: 43px;
        object-fit: contain
    }

    .footer-brand-name {
        font-size: 19px;
        font-weight: 850;
        letter-spacing: -.6px;
        color: #fff
    }

    .footer-brand-name span {
        color: #ed8ab9;
        margin-left: 5px
    }

    .footer-brand p,
    .footer-note p {
        font-size: 12px;
        line-height: 1.65;
        color: rgba(255, 255, 255, .88);
        margin-top: 7px
    }

    .footer-column {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 12px
    }

    .footer-column h3,
    .footer-note h3 {
        font-size: 12px;
        font-weight: 800;
        color: #fff;
        margin: 3px 0 5px;
        letter-spacing: .3px
    }

    .footer-column a {
        font-size: 12px;
        color: rgba(255, 255, 255, .84);
        text-decoration: none;
        transition: color .2s, transform .2s
    }

    .footer-column a:hover {
        color: #ffe4f0;
        transform: translateX(3px)
    }

    .footer-note {
        padding: 14px 16px;
        border-radius: 18px;
        background: rgba(255, 255, 255, .12);
        border: 1px solid rgba(255, 255, 255, .22);
        box-shadow: 0 8px 22px rgba(100, 0, 45, .10)
    }

    .footer-note-icon {
        display: inline-flex;
        width: 27px;
        height: 27px;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: rgba(255, 255, 255, .2);
        color: #fff;
        font-size: 16px;
        margin-bottom: 7px
    }

    .footer-note h3 {
        margin: 0
    }

    .footer-note p {
        margin-top: 7px
    }

    .footer-socials {
        display: flex;
        gap: 8px;
        margin-top: 14px
    }

    .footer-socials a {
        display: flex;
        width: 29px;
        height: 29px;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: rgba(255, 255, 255, .18);
        color: #fff;
        transition: transform .2s, background .2s
    }

    .footer-socials a:hover {
        transform: translateY(-3px);
        background: rgba(255, 255, 255, .3)
    }

    .footer-socials svg {
        width: 15px;
        height: 15px
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, .24);
        padding-top: 14px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
        font-size: 10px;
        color: rgba(255, 255, 255, .78)
    }

    .footer-made span {
        color: #ffe4ef
    }

    .footer-back-top {
        color: #fff;
        text-decoration: none;
        font-weight: 750
    }

    .footer-back-top:hover {
        color: #ffe4ef
    }

    @media(max-width:850px) {
        .footer-top {
            grid-template-columns: 1fr 1fr;
            gap: 30px
        }

        .footer-brand {
            grid-column: 1/-1
        }

        .footer-note {
            max-width: none
        }
    }

    @media(max-width:520px) {
        .karis-footer {
            padding: 32px 20px 16px
        }

        .footer-top {
            grid-template-columns: 1fr 1fr;
            gap: 26px 18px
        }

        .footer-brand {
            grid-column: 1/-1
        }

        .footer-note {
            grid-column: 1/-1
        }

        .footer-bottom {
            align-items: flex-start;
            flex-direction: column;
            gap: 9px
        }
    }
</style>

<style id="footer-cleanup-overrides">
    .karis-footer {
        color: #285f5b;
        padding: 34px 24px 16px
    }

    .footer-top {
        grid-template-columns: 1.35fr .9fr 1fr;
        gap: 42px;
        padding-bottom: 28px;
        align-items: start
    }

    .footer-brand-name,
    .footer-column h3 {
        color: #285f5b
    }

    .footer-brand p {
        color: #557a76
    }

    .footer-column a {
        color: #557a76;
        line-height: 1.5
    }

    .footer-column a:hover,
    .footer-back-top:hover {
        color: #b84f86
    }

    .footer-bottom {
        border-top-color: rgba(47, 127, 127, .2);
        color: #557a76;
        padding-top: 16px
    }

    .footer-back-top {
        color: #285f5b
    }

    @media(max-width:850px) {
        .footer-top {
            grid-template-columns: 1fr 1fr;
            gap: 28px
        }

        .footer-brand {
            grid-column: 1/-1
        }
    }

    @media(max-width:520px) {
        .karis-footer {
            padding: 30px 20px 16px
        }

        .footer-top {
            grid-template-columns: 1fr 1fr;
            gap: 24px 18px
        }

        .footer-brand {
            grid-column: 1/-1
        }

        .footer-bottom {
            align-items: flex-start;
            flex-direction: column;
            gap: 9px
        }
    }
</style>

<script>

    lucide.createIcons();
    const footerYear = document.getElementById('footer-year'); if (footerYear) footerYear.textContent = new Date().getFullYear();



    // Mobile Menu Toggle

    const menuBtn = document.getElementById('menu-btn');

    const mobileMenu = document.getElementById('mobile-menu');



    menuBtn.addEventListener('click', () => {

        mobileMenu.classList.toggle('hidden');

    });

    // Form Submit Handler Mockup

    document.getElementById('contact-form').addEventListener('submit', (e) => {

        e.preventDefault();

        alert('Terima kasih! Pesan kamu telah terkirim ke Karis Studio.');

    });

</script>