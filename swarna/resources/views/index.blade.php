@extends('layouts.app')
@section('title', 'SWARNA - Home')
@section('content')
<!-- ════════════ NAVBAR ════════════ -->
<!-- ════════════ HERO ════════════ -->
<section id="hero">
  <div class="hero-parallax" id="heroBg"></div>
  <div class="hero-overlay"></div>

  <div class="hero-body">
    <p class="hero-eyebrow">Bali &nbsp;·&nbsp; Indonesia</p>

    <h1 class="hero-title">
      SWARNA
      <strong>Production</strong>
    </h1>


    <div class="hero-divider"><span class="diamond"></span></div>

    <div class="hero-cta">
      <a href="#about" class="btn-gold">Kenali Swarna</a>
      <a href="{{url('divisi')}}" class="btn-outline">Divisi Swarna</a>
    </div>
  </div>

  <div class="scroll-hint">
    <div class="line"></div>
    <span>Scroll</span>
  </div>
</section>


<!-- ════════════ ABOUT ════════════ -->
<section id="about">
  <div class="section-inner">

    <p class="section-label reveal">Tentang Kami</p>
    <h2 class="section-title reveal reveal-delay-1">
      Warisan <em>Budaya,</em><br>Estetika Modern
    </h2>
    <div class="section-divider reveal reveal-delay-2"><span class="dot"></span></div>

    <p class="about-desc reveal reveal-delay-3">
      SWARNA adalah studio kreatif berbasis di Bali yang mengangkat identitas budaya lokal ke dalam desain kontemporer. Setiap karya adalah perpaduan antara kearifan tradisional dan visi yang menatap masa depan.
    </p>

    <!-- Bali ornament -->
    <div class="bali-ornament reveal">
      <svg viewBox="0 0 240 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="0" y1="15" x2="80" y2="15" stroke="#c9a84c" stroke-width=".7"/>
        <polygon points="120,3 130,15 120,27 110,15" stroke="#c9a84c" stroke-width=".7" fill="none"/>
        <polygon points="120,7 126,15 120,23 114,15" fill="#c9a84c" opacity=".25"/>
        <line x1="160" y1="15" x2="240" y2="15" stroke="#c9a84c" stroke-width=".7"/>
        <circle cx="90" cy="15" r="2" fill="#c9a84c" opacity=".5"/>
        <circle cx="150" cy="15" r="2" fill="#c9a84c" opacity=".5"/>
        <circle cx="96" cy="15" r="1" fill="#c9a84c" opacity=".3"/>
        <circle cx="144" cy="15" r="1" fill="#c9a84c" opacity=".3"/>
      </svg>
    </div>

    <!-- Brand logos row -->
    <div class="brand-logos" style="margin-top:3.5rem">

      <div class="brand-logo-item reveal">
        <div class="logo-mark">SW</div>
        <span class="logo-name">Apparel</span>
      </div>
      <div class="brand-logo-item reveal reveal-delay-1">
        <div class="logo-mark">SW</div>
        <span class="logo-name">Design</span>
      </div>
      <div class="brand-logo-item reveal reveal-delay-2">
        <div class="logo-mark">SW</div>
        <span class="logo-name">Decor</span>
      </div>
      <div class="brand-logo-item reveal reveal-delay-3">
        <div class="logo-mark">SW</div>
        <span class="logo-name">Event</span>
      </div>
      <div class="brand-logo-item reveal reveal-delay-3">
        <div class="logo-mark">SW</div>
        <span class="logo-name">Studio</span>
      </div>

    </div>

  </div>
</section>


<!-- ════════════ GALLERY ════════════ -->
<section id="gallery">
  <div class="section-inner">
    <p class="section-label reveal">Karya Pilihan</p>
    <h2 class="section-title reveal reveal-delay-1">
      Koleksi &amp; <em>Produksi</em>
    </h2>
    <div class="section-divider reveal reveal-delay-2"><span class="dot"></span></div>
  </div>

  <div class="swiper reveal" style="max-width:1100px;margin:0 auto;padding:0 1rem;">
    <div class="swiper-wrapper">

      <!-- SLIDE 1 – Apparel Mockup -->
      <div class="swiper-slide">
        <div class="slide-bg-1 slide-placeholder" style="position:relative;height:100%">
          <div class="slide-pattern"></div>
          <div style="text-align:center;z-index:2;position:relative;">
            <!-- Shirt silhouette SVG -->
            <svg width="100" height="110" viewBox="0 0 100 110" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block;margin:0 auto 1rem">
              <path d="M30 8 L10 30 L22 36 L22 100 L78 100 L78 36 L90 30 L70 8 Q60 18 50 18 Q40 18 30 8Z" stroke="#c9a84c" stroke-width="1" fill="rgba(201,168,76,.07)"/>
              <line x1="40" y1="55" x2="60" y2="55" stroke="#c9a84c" stroke-width=".5" opacity=".5"/>
              <line x1="40" y1="63" x2="60" y2="63" stroke="#c9a84c" stroke-width=".5" opacity=".5"/>
              <circle cx="50" cy="36" r="4" stroke="#c9a84c" stroke-width=".8" fill="none"/>
            </svg>
            <p style="font-family:'Cormorant Garamond',serif;font-size:1rem;letter-spacing:5px;color:rgba(201,168,76,.5)">APPAREL</p>
          </div>
        </div>
        <div class="slide-overlay"><span class="slide-label">Apparel Collection</span></div>
      </div>

      <!-- SLIDE 2 – Design Mockup -->
      <div class="swiper-slide">
        <div class="slide-bg-2 slide-placeholder" style="position:relative;height:100%">
          <div class="slide-pattern"></div>
          <div style="text-align:center;z-index:2;position:relative;">
            <svg width="90" height="110" viewBox="0 0 90 110" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block;margin:0 auto 1rem">
              <rect x="10" y="10" width="70" height="90" rx="2" stroke="#c9a84c" stroke-width="1" fill="rgba(201,168,76,.04)"/>
              <rect x="18" y="20" width="54" height="30" rx="1" stroke="#c9a84c" stroke-width=".6" fill="rgba(201,168,76,.06)" opacity=".7"/>
              <line x1="18" y1="60" x2="72" y2="60" stroke="#c9a84c" stroke-width=".5" opacity=".4"/>
              <line x1="18" y1="68" x2="55" y2="68" stroke="#c9a84c" stroke-width=".5" opacity=".4"/>
              <line x1="18" y1="75" x2="65" y2="75" stroke="#c9a84c" stroke-width=".5" opacity=".4"/>
              <line x1="18" y1="82" x2="48" y2="82" stroke="#c9a84c" stroke-width=".5" opacity=".4"/>
            </svg>
            <p style="font-family:'Cormorant Garamond',serif;font-size:1rem;letter-spacing:5px;color:rgba(201,168,76,.5)">DESIGN</p>
          </div>
        </div>
        <div class="slide-overlay"><span class="slide-label">Graphic Design</span></div>
      </div>

      <!-- SLIDE 3 – Decor -->
      <div class="swiper-slide">
        <div class="slide-bg-3 slide-placeholder" style="position:relative;height:100%">
          <div class="slide-pattern"></div>
          <div style="text-align:center;z-index:2;position:relative;">
            <svg width="100" height="110" viewBox="0 0 100 110" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block;margin:0 auto 1rem">
              <!-- Vase / decor shape -->
              <path d="M35 90 Q25 70 28 50 Q30 30 50 25 Q70 30 72 50 Q75 70 65 90Z" stroke="#c9a84c" stroke-width="1" fill="rgba(201,168,76,.06)"/>
              <line x1="30" y1="90" x2="70" y2="90" stroke="#c9a84c" stroke-width="1"/>
              <!-- Leaf -->
              <path d="M50 25 Q60 10 70 15 Q65 25 50 25Z" stroke="#c9a84c" stroke-width=".8" fill="rgba(201,168,76,.08)" opacity=".8"/>
              <line x1="50" y1="25" x2="62" y2="13" stroke="#c9a84c" stroke-width=".5" opacity=".4"/>
            </svg>
            <p style="font-family:'Cormorant Garamond',serif;font-size:1rem;letter-spacing:5px;color:rgba(201,168,76,.5)">DECOR</p>
          </div>
        </div>
        <div class="slide-overlay"><span class="slide-label">Dekorasi Interior</span></div>
      </div>

      <!-- SLIDE 4 – Mockup Product -->
      <div class="swiper-slide">
        <div class="slide-bg-4 slide-placeholder" style="position:relative;height:100%">
          <div class="slide-pattern"></div>
          <div style="text-align:center;z-index:2;position:relative;">
            <svg width="110" height="100" viewBox="0 0 110 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block;margin:0 auto 1rem">
              <!-- Bag mockup -->
              <rect x="20" y="35" width="70" height="55" rx="3" stroke="#c9a84c" stroke-width="1" fill="rgba(201,168,76,.05)"/>
              <path d="M38 35 Q38 18 55 18 Q72 18 72 35" stroke="#c9a84c" stroke-width="1" fill="none"/>
              <rect x="46" y="54" width="18" height="14" rx="1" stroke="#c9a84c" stroke-width=".7" fill="rgba(201,168,76,.1)"/>
              <circle cx="55" cy="61" r="2" fill="#c9a84c" opacity=".4"/>
            </svg>
            <p style="font-family:'Cormorant Garamond',serif;font-size:1rem;letter-spacing:5px;color:rgba(201,168,76,.5)">PRODUK</p>
          </div>
        </div>
        <div class="slide-overlay"><span class="slide-label">Product Mockup</span></div>
      </div>

      <!-- SLIDE 5 – Event / Cultural -->
      <div class="swiper-slide">
        <div class="slide-bg-5 slide-placeholder" style="position:relative;height:100%">
          <div class="slide-pattern"></div>
          <div style="text-align:center;z-index:2;position:relative;">
            <svg width="100" height="110" viewBox="0 0 100 110" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block;margin:0 auto 1rem">
              <!-- Temple / stage shape minimal -->
              <rect x="15" y="75" width="70" height="25" stroke="#c9a84c" stroke-width=".8" fill="rgba(201,168,76,.05)"/>
              <rect x="25" y="55" width="50" height="20" stroke="#c9a84c" stroke-width=".8" fill="rgba(201,168,76,.05)"/>
              <rect x="35" y="35" width="30" height="20" stroke="#c9a84c" stroke-width=".8" fill="rgba(201,168,76,.06)"/>
              <polygon points="50,15 65,35 35,35" stroke="#c9a84c" stroke-width=".8" fill="rgba(201,168,76,.08)"/>
            </svg>
            <p style="font-family:'Cormorant Garamond',serif;font-size:1rem;letter-spacing:5px;color:rgba(201,168,76,.5)">EVENT</p>
          </div>
        </div>
        <div class="slide-overlay"><span class="slide-label">Event &amp; Budaya</span></div>
      </div>

    </div><!-- /swiper-wrapper -->

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>


<!-- ════════════ CTA ════════════ -->
<section id="cta">
  <div class="section-inner">
    <p class="section-label reveal">Mulai Bersama Kami</p>
    <h2 class="section-title reveal reveal-delay-1">
      Wujudkan <em>Visimu</em>
    </h2>
    <div class="section-divider reveal reveal-delay-2"><span class="dot"></span></div>
    <p class="cta-tagline reveal reveal-delay-3">
      Kami siap membantu mewujudkan ide kreatifmu — dari pakaian hingga kolaborasi jangka panjang.
    </p>

    <div class="cta-grid reveal">

      <!-- CTA 1 -->
      <div class="cta-card">
        <div class="cta-icon">
          <svg viewBox="0 0 24 24"><path d="M20.38 3.46L16 2a4 4 0 01-8 0L3.62 3.46a2 2 0 00-1.34 2.23l.58 3.57a11 11 0 0018.28 0l.58-3.57a2 2 0 00-1.34-2.23z"/><path d="M6 2v20M18 2v20"/></svg>
        </div>
        <h3>Pesan Baju / Desain</h3>
        <p>Custom apparel &amp; desain grafis dengan sentuhan<br>estetika Bali yang khas.</p>
        <a href="https://wa.me/628xxxxxxxxxx?text=Halo%20SWARNA%2C%20saya%20ingin%20pesan%20baju%2Fdesain" class="btn-gold" target="_blank">Pesan Sekarang</a>
      </div>

      <!-- CTA 2 -->
      <div class="cta-card">
        <div class="cta-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
        </div>
        <h3>Kolaborasi</h3>
        <p>Bangun proyek bersama — brand, event,<br>atau kampanye kreatif.</p>
        <a href="mailto:hello@swarna.id" class="btn-outline">Hubungi Kami</a>
      </div>

    </div>
  </div>
</section>
@endsection