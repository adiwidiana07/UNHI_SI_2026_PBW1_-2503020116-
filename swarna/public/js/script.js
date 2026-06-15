document.addEventListener("DOMContentLoaded", () => {

  /* ── Parallax (index.html hero) ── */
  const heroBg = document.getElementById("heroBg");
  if (heroBg) {
    window.addEventListener("scroll", () => {
      heroBg.style.transform = `translateY(${window.scrollY * 0.38}px)`;
    });
  }

  /* ── Page hero parallax (divisi.html) ── */
  const pageHeroBg = document.querySelector(".page-hero-bg");
  if (pageHeroBg) {
    window.addEventListener("scroll", () => {
      pageHeroBg.style.transform = `translateY(${window.scrollY * 0.3}px)`;
    });
  }

  /* ── Navbar scroll tint ── */
  const navbar = document.getElementById("navbar");
  if (navbar) {
    window.addEventListener("scroll", () => {
      navbar.style.background =
        window.scrollY > 60 ? "rgba(10,9,8,.95)" : "rgba(14,13,12,.72)";
    });
  }

  /* ── Mobile nav toggle ── */
  const navToggle = document.getElementById("navToggle");
  const navLinks = document.getElementById("navLinks");
  if (navToggle && navLinks) {
    navToggle.addEventListener("click", () => navLinks.classList.toggle("open"));
    navLinks.querySelectorAll("a").forEach((a) =>
      a.addEventListener("click", () => navLinks.classList.remove("open"))
    );
  }

  /* ── Scroll reveal ── */
  const revealEls = document.querySelectorAll(".reveal");
  if (revealEls.length) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            e.target.classList.add("visible");
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.13 }
    );
    revealEls.forEach((el) => io.observe(el));
  }

  /* ── Swiper index (single .swiper) ── */
  const mainSwiper = document.querySelector(".swiper:not(.swiper-decor):not(.swiper-apparel)");
  if (mainSwiper) {
    new Swiper(mainSwiper, {
      slidesPerView: 1.2,
      spaceBetween: 16,
      centeredSlides: true,
      loop: true,
      grabCursor: true,
      pagination: { el: ".swiper-pagination", clickable: true },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: { delay: 3800, disableOnInteraction: false },
      breakpoints: {
        640:  { slidesPerView: 1.6 },
        900:  { slidesPerView: 2.2 },
        1200: { slidesPerView: 2.8 },
      },
    });
  }

  /* ── Swiper Decor (divisi.html) ── */
  const swiperDecor = document.querySelector(".swiper-decor");
  if (swiperDecor) {
    new Swiper(swiperDecor, {
      slidesPerView: 1.2,
      spaceBetween: 16,
      centeredSlides: true,
      loop: true,
      grabCursor: true,
      autoplay: { delay: 3600, disableOnInteraction: false },
      pagination: { el: ".swiper-pag-decor", clickable: true },
      navigation: {
        nextEl: ".swiper-decor .swiper-button-next",
        prevEl: ".swiper-decor .swiper-button-prev",
      },
      breakpoints: {
        640:  { slidesPerView: 1.6 },
        900:  { slidesPerView: 2.2 },
        1200: { slidesPerView: 2.8 },
      },
    });
  }

  /* ── Swiper Apparel (divisi.html) ── */
  const swiperApparel = document.querySelector(".swiper-apparel");
  if (swiperApparel) {
    new Swiper(swiperApparel, {
      slidesPerView: 1.2,
      spaceBetween: 16,
      centeredSlides: true,
      loop: true,
      grabCursor: true,
      autoplay: { delay: 4000, disableOnInteraction: false },
      pagination: { el: ".swiper-pag-apparel", clickable: true },
      navigation: {
        nextEl: ".swiper-apparel .swiper-button-next",
        prevEl: ".swiper-apparel .swiper-button-prev",
      },
      breakpoints: {
        640:  { slidesPerView: 1.6 },
        900:  { slidesPerView: 2.2 },
        1200: { slidesPerView: 2.8 },
      },
    });
  }

  /* ── Tab switcher divisi (divisi.html) ── */
  const tabs = document.querySelectorAll(".div-tab");
  if (tabs.length) {
    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((t) => t.classList.remove("active"));
        tab.classList.add("active");
        const target = document.getElementById(tab.dataset.target);
        if (target) {
          const top = target.getBoundingClientRect().top + window.scrollY - 80;
          window.scrollTo({ top, behavior: "smooth" });
        }
      });
    });

    /* update active tab saat scroll */
    const divSections = [
      document.getElementById("divisi-decor"),
      document.getElementById("divisi-apparel"),
    ];
    window.addEventListener("scroll", () => {
      const scrollMid = window.scrollY + window.innerHeight / 2;
      divSections.forEach((sec, i) => {
        if (!sec) return;
        if (scrollMid >= sec.offsetTop && scrollMid < sec.offsetTop + sec.offsetHeight) {
          tabs.forEach((t) => t.classList.remove("active"));
          if (tabs[i]) tabs[i].classList.add("active");
        }
      });
    });
  }

});