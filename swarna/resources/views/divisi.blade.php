@extends('layouts.app')
@section('title', 'Divisi Kami - SWARNA')
@section('content')
<!-- ════════════ HERO ════════════ -->
  <!-- ════════ PAGE HERO ════════ -->
  <section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-body">
      <h1 class="hero-title">Divisi <em>Kami</em></h1>
      <div class="hero-divider"><span class="diamond"></span></div>
      <p class="hero-subtitle">Dua lini kreatif yang saling melengkapi —<br>dari karya tekstil hingga ruang yang bercerita.</p>
      <div class="division-tabs">
        <button class="div-tab active" data-target="divisi-decor">
          <span class="tab-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
          </span>
          Decor
        </button>
        <button class="div-tab" data-target="divisi-apparel">
          <span class="tab-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.38 3.46L16 2a4 4 0 01-8 0L3.62 3.46a2 2 0 00-1.34 2.23l.58 3.57a11 11 0 0018.28 0l.58-3.57a2 2 0 00-1.34-2.23z"/></svg>
          </span>
          Apparel
        </button>
      </div>
    </div>
  </section>
 
  <!-- ════════ DIVISI DECOR ════════ -->
  <section class="division-section decor-theme" id="divisi-decor">
    <div class="div-accent-bar decor-bar"></div>
 
    <div class="section-inner">
      <div class="div-profile reveal">
 
        <div class="div-profile-left">
          <p class="section-label" style="color:var(--decor-accent)">Divisi 01</p>
          <h2 class="section-title">SWARNA <em style="color:var(--decor-accent)">Decor</em></h2>
          <div class="div-ruled-line decor-ruled"></div>
          <p class="div-desc">
            Swarna Decor menghadirkan instalasi dekorasi yang terinspirasi dari kekayaan motif dan filosofi Bali. Setiap elemen dipilih dan dirancang dengan teliti — memadukan material lokal, tekstur alami, dan komposisi ruang yang menghormati estetika tradisional namun tetap relevan secara kontemporer.
          </p>
          <ul class="div-keahlian">
            <li><span class="keahlian-dot" style="background:var(--decor-accent)"></span>Dekorasi Event &amp; Pernikahan</li>
            <li><span class="keahlian-dot" style="background:var(--decor-accent)"></span>Instalasi Interior</li>
            <li><span class="keahlian-dot" style="background:var(--decor-accent)"></span>Konsultasi Desain Ruang</li>
            <li><span class="keahlian-dot" style="background:var(--decor-accent)"></span>Custom Ornamen Bali</li>
          </ul>
          <a href="index.html#cta" class="btn-division" style="--div-color:var(--decor-accent)">Konsultasi Decor</a>
        </div>
 
        <div class="div-profile-right">
          <div class="div-visual-card decor-card">
            <div class="dvc-pattern"></div>
            <svg class="dvc-illustration" viewBox="0 0 220 260" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="30" y="130" width="160" height="110" rx="2" stroke="var(--decor-accent)" stroke-width=".8" fill="rgba(180,130,50,.04)"/>
              <path d="M30 130 Q30 70 110 70 Q190 70 190 130" stroke="var(--decor-accent)" stroke-width=".8" fill="rgba(180,130,50,.04)"/>
              <path d="M60 130 Q60 95 110 95 Q160 95 160 130" stroke="var(--decor-accent)" stroke-width=".6" fill="none" opacity=".5"/>
              <rect x="60" y="130" width="100" height="110" stroke="var(--decor-accent)" stroke-width=".6" fill="none" opacity=".4"/>
              <rect x="85" y="195" width="8" height="30" rx="1" fill="rgba(180,130,50,.15)" stroke="var(--decor-accent)" stroke-width=".6"/>
              <rect x="127" y="195" width="8" height="30" rx="1" fill="rgba(180,130,50,.15)" stroke="var(--decor-accent)" stroke-width=".6"/>
              <ellipse cx="89" cy="194" rx="3" ry="4" fill="var(--decor-accent)" opacity=".7"/>
              <ellipse cx="131" cy="194" rx="3" ry="4" fill="var(--decor-accent)" opacity=".7"/>
              <path d="M101 240 Q95 220 97 205 Q99 195 110 193 Q121 195 123 205 Q125 220 119 240Z" stroke="var(--decor-accent)" stroke-width=".8" fill="rgba(180,130,50,.08)"/>
              <circle cx="110" cy="188" r="6" stroke="var(--decor-accent)" stroke-width=".6" fill="none"/>
              <path d="M110 182 Q115 178 118 182 Q115 186 110 182Z" fill="var(--decor-accent)" opacity=".3"/>
              <path d="M110 182 Q105 178 102 182 Q105 186 110 182Z" fill="var(--decor-accent)" opacity=".3"/>
              <path d="M90 70 Q110 45 130 70" stroke="var(--decor-accent)" stroke-width=".6" fill="none" opacity=".5"/>
              <circle cx="110" cy="42" r="10" stroke="var(--decor-accent)" stroke-width=".7" fill="none"/>
              <circle cx="110" cy="42" r="4" fill="var(--decor-accent)" opacity=".3"/>
              <path d="M30 110 Q15 95 20 80 Q30 90 30 110Z" fill="var(--decor-accent)" opacity=".12"/>
              <path d="M190 110 Q205 95 200 80 Q190 90 190 110Z" fill="var(--decor-accent)" opacity=".12"/>
            </svg>
            <div class="dvc-label">
              <span>Swarna Decor</span>
              <small>Est. Bali</small>
            </div>
          </div>
        </div>
 
      </div>
    </div>
 
    <!-- Stats row -->
    <div class="div-stats-row reveal">
      <div class="section-inner">
        <div class="stats-grid">
          <div class="stat-item"><span class="stat-num" style="color:var(--decor-accent)">120+</span><span class="stat-label">Proyek Selesai</span></div>
          <div class="stat-item"><span class="stat-num" style="color:var(--decor-accent)">5</span><span class="stat-label">Tahun Pengalaman</span></div>
          <div class="stat-item"><span class="stat-num" style="color:var(--decor-accent)">100%</span><span class="stat-label">Custom per Klien</span></div>
          <div class="stat-item"><span class="stat-num" style="color:var(--decor-accent)">Bali</span><span class="stat-label">Based</span></div>
        </div>
      </div>
    </div>
 
    <!-- Gallery heading -->
    <div class="section-inner" style="margin-bottom:1.5rem">
      <p class="section-label reveal" style="color:var(--decor-accent)">Portofolio</p>
      <h3 class="section-title reveal reveal-delay-1">Karya <em style="color:var(--decor-accent)">Decor</em></h3>
      <div class="section-divider reveal reveal-delay-2">
        <span class="dot" style="border-color:var(--decor-accent)"></span>
      </div>
    </div>
 
    <!-- Swiper Decor -->
    <div class="swiper swiper-decor reveal" style="max-width:1100px;margin:0 auto;padding:0 1rem 3.5rem">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="gallery-slide decor-slide-bg-1">
            <div class="slide-motif"></div>
            <svg class="slide-icon-svg" viewBox="0 0 80 90" fill="none">
              <path d="M10 50 Q10 25 40 20 Q70 25 70 50 L70 85 L10 85Z" stroke="var(--decor-accent)" stroke-width=".8" fill="rgba(180,130,50,.06)"/>
              <rect x="30" y="60" width="20" height="25" stroke="var(--decor-accent)" stroke-width=".6" fill="rgba(180,130,50,.1)"/>
              <circle cx="40" cy="40" r="10" stroke="var(--decor-accent)" stroke-width=".6" fill="none"/>
            </svg>
            <p class="slide-icon-label" style="color:rgba(180,130,50,.55)">WEDDING DECOR</p>
          </div>
          <div class="slide-overlay"><span class="slide-label" style="color:var(--decor-accent)">Wedding Setup</span></div>
        </div>
        <div class="swiper-slide">
          <div class="gallery-slide decor-slide-bg-2">
            <div class="slide-motif"></div>
            <svg class="slide-icon-svg" viewBox="0 0 80 90" fill="none">
              <rect x="5" y="30" width="70" height="55" rx="2" stroke="var(--decor-accent)" stroke-width=".8" fill="rgba(180,130,50,.05)"/>
              <rect x="15" y="40" width="20" height="30" stroke="var(--decor-accent)" stroke-width=".6" fill="rgba(180,130,50,.08)"/>
              <rect x="45" y="40" width="20" height="30" stroke="var(--decor-accent)" stroke-width=".6" fill="rgba(180,130,50,.08)"/>
              <line x1="5" y1="30" x2="40" y2="10" stroke="var(--decor-accent)" stroke-width=".6" opacity=".5"/>
              <line x1="75" y1="30" x2="40" y2="10" stroke="var(--decor-accent)" stroke-width=".6" opacity=".5"/>
            </svg>
            <p class="slide-icon-label" style="color:rgba(180,130,50,.55)">INTERIOR</p>
          </div>
          <div class="slide-overlay"><span class="slide-label" style="color:var(--decor-accent)">Instalasi Interior</span></div>
        </div>
        <div class="swiper-slide">
          <div class="gallery-slide decor-slide-bg-3">
            <div class="slide-motif"></div>
            <svg class="slide-icon-svg" viewBox="0 0 80 90" fill="none">
              <polygon points="40,5 75,85 5,85" stroke="var(--decor-accent)" stroke-width=".8" fill="rgba(180,130,50,.05)"/>
              <polygon points="40,20 62,72 18,72" stroke="var(--decor-accent)" stroke-width=".5" fill="none" opacity=".4"/>
              <circle cx="40" cy="50" r="8" stroke="var(--decor-accent)" stroke-width=".6" fill="rgba(180,130,50,.1)"/>
            </svg>
            <p class="slide-icon-label" style="color:rgba(180,130,50,.55)">ORNAMEN</p>
          </div>
          <div class="slide-overlay"><span class="slide-label" style="color:var(--decor-accent)">Ornamen Custom</span></div>
        </div>
        <div class="swiper-slide">
          <div class="gallery-slide decor-slide-bg-1">
            <div class="slide-motif"></div>
            <svg class="slide-icon-svg" viewBox="0 0 80 90" fill="none">
              <ellipse cx="40" cy="55" rx="28" ry="20" stroke="var(--decor-accent)" stroke-width=".8" fill="rgba(180,130,50,.06)"/>
              <line x1="40" y1="35" x2="40" y2="10" stroke="var(--decor-accent)" stroke-width=".8"/>
              <path d="M28 20 Q40 8 52 20" stroke="var(--decor-accent)" stroke-width=".6" fill="rgba(180,130,50,.1)"/>
              <circle cx="40" cy="9" r="4" fill="var(--decor-accent)" opacity=".4"/>
            </svg>
            <p class="slide-icon-label" style="color:rgba(180,130,50,.55)">EVENT</p>
          </div>
          <div class="slide-overlay"><span class="slide-label" style="color:var(--decor-accent)">Event Setup</span></div>
        </div>
      </div>
      <div class="swiper-button-prev swiper-btn-decor"></div>
      <div class="swiper-button-next swiper-btn-decor"></div>
      <div class="swiper-pagination swiper-pag-decor"></div>
    </div>
 
  </section>
 
  <!-- ════════ ORNAMENT DIVIDER ════════ -->
  <div class="division-ornament-divider">
    <svg viewBox="0 0 400 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <line x1="0" y1="20" x2="155" y2="20" stroke="rgba(201,168,76,.15)" stroke-width=".8"/>
      <polygon points="200,5 215,20 200,35 185,20" stroke="rgba(201,168,76,.4)" stroke-width=".7" fill="none"/>
      <polygon points="200,10 210,20 200,30 190,20" fill="rgba(201,168,76,.12)"/>
      <line x1="245" y1="20" x2="400" y2="20" stroke="rgba(201,168,76,.15)" stroke-width=".8"/>
      <circle cx="168" cy="20" r="2" fill="rgba(201,168,76,.3)"/>
      <circle cx="232" cy="20" r="2" fill="rgba(201,168,76,.3)"/>
    </svg>
  </div>
 
  <!-- ════════ DIVISI APPAREL ════════ -->
  <section class="division-section apparel-theme" id="divisi-apparel">
    <div class="div-accent-bar apparel-bar"></div>
 
    <div class="section-inner">
      <div class="div-profile div-profile-reverse reveal">
 
        <div class="div-profile-left">
          <p class="section-label" style="color:var(--apparel-accent)">Divisi 02</p>
          <h2 class="section-title">SWARNA <em style="color:var(--apparel-accent)">Apparel</em></h2>
          <div class="div-ruled-line apparel-ruled"></div>
          <p class="div-desc">
            Swarna Apparel mengerjakan pakaian custom yang menginterpretasikan motif budaya Bali ke dalam siluet modern. Dari bahan pilihan hingga jahitan akhir, setiap helai menjadi pernyataan identitas — lokal dalam jiwa, global dalam tampilan.
          </p>
          <ul class="div-keahlian">
            <li><span class="keahlian-dot" style="background:var(--apparel-accent)"></span>Custom Batik &amp; Tenun Modern</li>
            <li><span class="keahlian-dot" style="background:var(--apparel-accent)"></span>Seragam &amp; Uniform Brand</li>
            <li><span class="keahlian-dot" style="background:var(--apparel-accent)"></span>Ready-to-Wear Collection</li>
            <li><span class="keahlian-dot" style="background:var(--apparel-accent)"></span>Sablon &amp; Bordir Custom</li>
          </ul>
          <a href="index.html#cta" class="btn-division" style="--div-color:var(--apparel-accent)">Pesan Apparel</a>
        </div>
 
        <div class="div-profile-right">
          <div class="div-visual-card apparel-card">
            <div class="dvc-pattern dvc-pattern-apparel"></div>
            <svg class="dvc-illustration" viewBox="0 0 220 260" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M68 40 L30 75 L50 88 L50 220 L170 220 L170 88 L190 75 L152 40 Q138 60 110 60 Q82 60 68 40Z"
                    stroke="var(--apparel-accent)" stroke-width=".9" fill="rgba(100,160,130,.05)"/>
              <path d="M90 40 Q110 55 130 40" stroke="var(--apparel-accent)" stroke-width=".7" fill="none" opacity=".6"/>
              <line x1="110" y1="60" x2="110" y2="220" stroke="var(--apparel-accent)" stroke-width=".4" opacity=".25" stroke-dasharray="4 4"/>
              <rect x="88" y="100" width="44" height="44" rx="1" stroke="var(--apparel-accent)" stroke-width=".6" fill="rgba(100,160,130,.07)" transform="rotate(45 110 122)"/>
              <rect x="98" y="110" width="24" height="24" rx="1" stroke="var(--apparel-accent)" stroke-width=".5" fill="none" opacity=".5" transform="rotate(45 110 122)"/>
              <circle cx="110" cy="122" r="4" fill="var(--apparel-accent)" opacity=".25"/>
              <line x1="30" y1="85" x2="50" y2="95" stroke="var(--apparel-accent)" stroke-width=".4" opacity=".3"/>
              <line x1="190" y1="85" x2="170" y2="95" stroke="var(--apparel-accent)" stroke-width=".4" opacity=".3"/>
              <line x1="50" y1="210" x2="170" y2="210" stroke="var(--apparel-accent)" stroke-width=".5" opacity=".35"/>
            </svg>
            <div class="dvc-label">
              <span>Swarna Apparel</span>
              <small>Custom Made</small>
            </div>
          </div>
        </div>
 
      </div>
    </div>
 
    <!-- Stats Apparel -->
    <div class="div-stats-row reveal">
      <div class="section-inner">
        <div class="stats-grid">
          <div class="stat-item"><span class="stat-num" style="color:var(--apparel-accent)">200+</span><span class="stat-label">Produk Dibuat</span></div>
          <div class="stat-item"><span class="stat-num" style="color:var(--apparel-accent)">MOQ 1</span><span class="stat-label">Pcs Custom</span></div>
          <div class="stat-item"><span class="stat-num" style="color:var(--apparel-accent)">14 hr</span><span class="stat-label">Est. Produksi</span></div>
          <div class="stat-item"><span class="stat-num" style="color:var(--apparel-accent)">Free</span><span class="stat-label">Konsultasi Desain</span></div>
        </div>
      </div>
    </div>
 
    <!-- Gallery heading -->
    <div class="section-inner" style="margin-bottom:1.5rem">
      <p class="section-label reveal" style="color:var(--apparel-accent)">Portofolio</p>
      <h3 class="section-title reveal reveal-delay-1">Karya <em style="color:var(--apparel-accent)">Apparel</em></h3>
      <div class="section-divider reveal reveal-delay-2">
        <span class="dot" style="border-color:var(--apparel-accent)"></span>
      </div>
    </div>
 
    <!-- Swiper Apparel -->
    <div class="swiper swiper-apparel reveal" style="max-width:1100px;margin:0 auto;padding:0 1rem 3.5rem">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="gallery-slide apparel-slide-bg-1">
            <div class="slide-motif-apparel"></div>
            <svg class="slide-icon-svg" viewBox="0 0 80 100" fill="none">
              <path d="M22 15 L5 35 L18 42 L18 90 L62 90 L62 42 L75 35 L58 15 Q50 26 40 26 Q30 26 22 15Z"
                    stroke="var(--apparel-accent)" stroke-width=".8" fill="rgba(100,160,130,.06)"/>
              <rect x="30" y="40" width="20" height="20" rx="0" stroke="var(--apparel-accent)" stroke-width=".5" fill="rgba(100,160,130,.1)" transform="rotate(45 40 50)"/>
            </svg>
            <p class="slide-icon-label" style="color:rgba(100,160,130,.55)">KEMEJA</p>
          </div>
          <div class="slide-overlay"><span class="slide-label" style="color:var(--apparel-accent)">Custom Kemeja</span></div>
        </div>
        <div class="swiper-slide">
          <div class="gallery-slide apparel-slide-bg-2">
            <div class="slide-motif-apparel"></div>
            <svg class="slide-icon-svg" viewBox="0 0 70 100" fill="none">
              <rect x="15" y="5" width="40" height="55" rx="1" stroke="var(--apparel-accent)" stroke-width=".8" fill="rgba(100,160,130,.05)"/>
              <rect x="15" y="60" width="40" height="35" rx="1" stroke="var(--apparel-accent)" stroke-width=".8" fill="rgba(100,160,130,.07)"/>
              <line x1="35" y1="60" x2="35" y2="95" stroke="var(--apparel-accent)" stroke-width=".5" opacity=".4"/>
              <rect x="23" y="25" width="24" height="24" rx="0" stroke="var(--apparel-accent)" stroke-width=".5" fill="none" opacity=".4" transform="rotate(45 35 37)"/>
            </svg>
            <p class="slide-icon-label" style="color:rgba(100,160,130,.55)">SERAGAM</p>
          </div>
          <div class="slide-overlay"><span class="slide-label" style="color:var(--apparel-accent)">Seragam Brand</span></div>
        </div>
        <div class="swiper-slide">
          <div class="gallery-slide apparel-slide-bg-3">
            <div class="slide-motif-apparel"></div>
            <svg class="slide-icon-svg" viewBox="0 0 80 100" fill="none">
              <ellipse cx="40" cy="30" rx="22" ry="25" stroke="var(--apparel-accent)" stroke-width=".8" fill="rgba(100,160,130,.05)"/>
              <path d="M18 55 Q18 95 40 95 Q62 95 62 55" stroke="var(--apparel-accent)" stroke-width=".8" fill="rgba(100,160,130,.05)"/>
              <line x1="18" y1="55" x2="62" y2="55" stroke="var(--apparel-accent)" stroke-width=".6" opacity=".4"/>
              <circle cx="40" cy="30" r="8" stroke="var(--apparel-accent)" stroke-width=".5" fill="rgba(100,160,130,.1)"/>
            </svg>
            <p class="slide-icon-label" style="color:rgba(100,160,130,.55)">KOLEKSI</p>
          </div>
          <div class="slide-overlay"><span class="slide-label" style="color:var(--apparel-accent)">RTW Collection</span></div>
        </div>
        <div class="swiper-slide">
          <div class="gallery-slide apparel-slide-bg-1">
            <div class="slide-motif-apparel"></div>
            <svg class="slide-icon-svg" viewBox="0 0 80 100" fill="none">
              <rect x="10" y="10" width="60" height="80" rx="2" stroke="var(--apparel-accent)" stroke-width=".8" fill="rgba(100,160,130,.05)"/>
              <circle cx="40" cy="45" r="18" stroke="var(--apparel-accent)" stroke-width=".7" fill="rgba(100,160,130,.08)"/>
              <circle cx="40" cy="45" r="10" stroke="var(--apparel-accent)" stroke-width=".5" fill="none" opacity=".4"/>
              <circle cx="40" cy="45" r="3" fill="var(--apparel-accent)" opacity=".35"/>
            </svg>
            <p class="slide-icon-label" style="color:rgba(100,160,130,.55)">SABLON</p>
          </div>
          <div class="slide-overlay"><span class="slide-label" style="color:var(--apparel-accent)">Sablon Custom</span></div>
        </div>
      </div>
      <div class="swiper-button-prev swiper-btn-apparel"></div>
      <div class="swiper-button-next swiper-btn-apparel"></div>
      <div class="swiper-pagination swiper-pag-apparel"></div>
    </div>
 
  </section>
 
  <!-- ════════ CTA (reuse) ════════ -->
  <section class="cta-reuse" id="cta">
    <div class="section-inner">
      <p class="section-label reveal">Mulai Bersama Kami</p>
      <h2 class="section-title reveal reveal-delay-1">Wujudkan <em>Visimu</em></h2>
      <div class="section-divider reveal reveal-delay-2"><span class="dot"></span></div>
      <p class="cta-tagline reveal reveal-delay-3">Kami siap membantu mewujudkan ide kreatifmu — dari pakaian hingga kolaborasi jangka panjang.</p>
      <div class="cta-grid reveal">
        <div class="cta-card">
          <div class="cta-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><path d="M20.38 3.46L16 2a4 4 0 01-8 0L3.62 3.46a2 2 0 00-1.34 2.23l.58 3.57a11 11 0 0018.28 0l.58-3.57a2 2 0 00-1.34-2.23z"/></svg>
          </div>
          <h3>Pesan Baju / Desain</h3>
          <p>Custom apparel &amp; desain grafis dengan sentuhan<br>estetika Bali yang khas.</p>
          <a href="https://wa.me/628xxxxxxxxxx" class="btn-gold" target="_blank">Pesan Sekarang</a>
        </div>
        <div class="cta-card">
          <div class="cta-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
          </div>
          <h3>Kolaborasi</h3>
          <p>Bangun proyek bersama — brand, event,<br>atau kampanye kreatif.</p>
          <a href="mailto:hello@swarna.id" class="btn-outline">Hubungi Kami</a>
        </div>
      </div>
    </div>
  </section>
@endsection