<!-- footer start -->

<footer class="footer-section">
  <div class="container">
    <div class="footer-top">
      <div>
        <a class="footer-logo" href="#">
          <img src="assets/img/logo1.png" alt="Logo">
        </a>

        <p class="footer-text wow fadeInUp" data-wow-delay="0.10s">
          Where ideas are shaped, built carefully, and delivered without compromise.
        </p>

        <!-- Social Icons -->
        <div class="footer-social wow fadeInUp" data-wow-delay="0.20s">
          <a href="#" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" aria-label="YouTube">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>



      <div class="footer-col">
        <a href="about.php">About</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="gallery.php">Gallery</a>
        <a href="Kiosks.php">Kiosks</a>
      </div>


      <div class="footer-col">
        <a href="#">Privacy & Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="contact.php">Contact Us</a>

      </div>


      <!-- <div class="footer-col">
        <a href="#">Contact V.1</a>
        <a href="#">Contact V.2</a>
        <a href="#">Contact V.3</a>
        <a href="#">Licensing</a>
      </div> -->
    </div>


    <div class="footer-bottom">
      <img src="assets/img/2nd Logo Final 1 (1).png" loading="lazy"
        data-wf-id="[&quot;29195cd6-0b13-b0f5-5299-292d509a4678&quot;,&quot;2a1f383c-647d-cad9-9bd0-466de2105288&quot;]"
        data-w-id="2a1f383c-647d-cad9-9bd0-466de2105288" alt="" class="">
    </div>
  </div>

</footer>





<!-- footer End-->



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Fancybox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


<script src="js/wow.min.js"></script>
<script src="js/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/SplitText.min.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>


<script>
  const lightbox = GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
    zoomable: true,
  });
</script>

<script>
  new WOW().init();
</script>

<script>
  Splitting();
</script>



<!-- <script>
        window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 50);
  });
  </script> -->

<!-- <script>
  window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    const scrollY = window.scrollY;

    // Sticky class add/remove
    header.classList.toggle('sticky', scrollY > 50);

    // Opacity increase dynamically
    // max opacity 1, min 0
    const maxScroll = 300; // scroll length jekhane opacity reach 1 hobe
    let opacity = Math.min(scrollY / maxScroll, 1);
    header.style.background = `rgba(34, 34, 34, ${opacity})`; // example background
  });
</script> -->

<!-- <script>
window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  const scrollY = window.scrollY;

  const stickyPoint = 80; // koto scroll e sticky হবে
  const maxScroll = 300;  // koto scroll e full opacity

  if (scrollY > stickyPoint) {
    header.classList.add('sticky');

    const opacity = Math.min((scrollY - stickyPoint) / maxScroll, 1);
    header.style.setProperty('--bg-opacity', opacity);
  } else {
    header.classList.remove('sticky');
    header.style.setProperty('--bg-opacity', 0);
  }
});
</script> -->

<script>
  window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    const scrollY = window.scrollY;

    const stickyPoint = 80;
    const maxScroll = 300;

    if (scrollY > stickyPoint) {
      header.classList.add('sticky');

      const opacity = Math.min((scrollY - stickyPoint) / maxScroll, 1);
      header.style.setProperty('--bg-opacity', opacity);
    } else {
      header.classList.remove('sticky');
      header.style.setProperty('--bg-opacity', 0);
    }
  });
</script>






<!-- <script>
  document.addEventListener('DOMContentLoaded', function() {

    const heroContent = document.querySelector('.hero_content-bottom');
    const heroTitle = document.querySelector('.hero_title');
    const overlay = document.querySelector('.hero_img-overlay');
    const background = document.querySelector('.hero_bg');
    const heroSticky = document.querySelector('.hero_sticky');

    let ticking = false;
    let scrollStartTime = null;
    let scrollStarted = false;
    let zIndexChanged = false;

    /* ---------------------------
       ✅ INITIAL FADE IN
    ----------------------------*/
    setTimeout(() => {
      if (background) background.style.opacity = '1';
      if (heroContent) {
        heroContent.style.opacity = '1';
        heroContent.style.transform = 'translateY(0)';
      }
    }, 800);

    /* ---------------------------
       ✅ Z-INDEX CHANGE AFTER 2s SCROLL
    ----------------------------*/
    function checkZIndexChange(scrollY) {
      if (scrollY > 40 && !scrollStarted) { // ✅ Start detect a bit later
        scrollStarted = true;
        scrollStartTime = Date.now();
      }

      if (scrollY <= 10) {
        scrollStarted = false;
        scrollStartTime = null;
        zIndexChanged = false;
        if (heroSticky) heroSticky.style.zIndex = '';
      }

      if (scrollStarted && scrollStartTime && !zIndexChanged) {
        const elapsed = Date.now() - scrollStartTime;

        if (elapsed >= 10) { // ✅ Now 2.5 seconds delay
          if (heroSticky) {
            heroSticky.style.zIndex = '9999';
          }
          zIndexChanged = true;
        }
      }
    }

    /* ---------------------------
       ✅ SMOOTH SCROLL SYSTEM
    ----------------------------*/
    function handleScroll() {
      const scrolled = window.scrollY;
      const vh = window.innerHeight;
      const progress = Math.min(scrolled / vh, 1);

      checkZIndexChange(scrolled);

      /* ✅ LOGO PARALLAX */
      if (heroTitle) {
        heroTitle.style.transform = `translateY(${scrolled * 0.95}px)`; // ✅ Slight slower
      }

      /* ✅ BACKGROUND FADE (SLOW) */
      if (background) {
        const bgOpacity = Math.max(0.75, 1 - progress * 0.25); // ✅ Slower fade
        background.style.opacity = bgOpacity;
      }

      /* ✅ ✅ ✅ LATE + SLOW OVERLAY OPACITY */
      /* ✅ ✅ ✅ EARLY + ULTRA SMOOTH OVERLAY OPACITY */
      if (overlay) {
        // 🏠 House image fade out (EARLY & SMOOTH)
        const imageOpacity = scrolled < 80 ?
          1 :
          Math.max(0, 1 - (scrolled - 80) / 500); // ✅ 80 → 580px

        // 🖤 Black overlay fade in (SMOOTH CINEMATIC)
        const blackOpacity = scrolled < 150 ?
          0 :
          Math.min((scrolled - 150) / 500, 1); // ✅ 150 → 650px

        overlay.style.setProperty('--image-opacity', imageOpacity.toFixed(3));
        overlay.style.setProperty('--black-opacity', blackOpacity.toFixed(3));

        overlay.style.pointerEvents = 'none';
      }


      ticking = false;
    }

    /* ✅ RAF Optimized Scroll */
    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(handleScroll);
        ticking = true;
      }
    }, {
      passive: true
    });

    /* ✅ Initial State */
    handleScroll();
  });
</script>  -->

<!-- <script>
document.addEventListener('DOMContentLoaded', function() {

  const heroContent = document.querySelector('.hero_content-bottom');
  const heroTitle = document.querySelector('.hero_title');
  const overlay = document.querySelector('.hero_img-overlay');
  const overlayImg = overlay ? overlay.querySelector('img') : null; // house image inside overlay
  const background = document.querySelector('.hero_bg');
  const heroSticky = document.querySelector('.hero_sticky');

  let ticking = false;
  let scrollStartTime = null;
  let scrollStarted = false;
  let zIndexChanged = false;

  /* ---------------------------
     ✅ INITIAL FADE IN
  ----------------------------*/
  setTimeout(() => {
    if (background) background.style.opacity = '1';
    if (heroContent) {
      heroContent.style.opacity = '1';
      heroContent.style.transform = 'translateY(0)';
    }
  }, 800);

  /* ---------------------------
     ✅ Z-INDEX CHANGE AFTER SCROLL
  ----------------------------*/
  function checkZIndexChange(scrollY) {
    if (scrollY > 40 && !scrollStarted) { 
      scrollStarted = true;
      scrollStartTime = Date.now();
    }

    if (scrollY <= 10) {
      scrollStarted = false;
      scrollStartTime = null;
      zIndexChanged = false;
      if (heroSticky) heroSticky.style.zIndex = '';
    }

    if (scrollStarted && scrollStartTime && !zIndexChanged) {
      const elapsed = Date.now() - scrollStartTime;
      if (elapsed >= 10) { 
        if (heroSticky) {
          heroSticky.style.zIndex = '9999';
        }
        zIndexChanged = true;
      }
    }
  }

  /* ---------------------------
     ✅ SMOOTH SCROLL SYSTEM
  ----------------------------*/
  function handleScroll() {
    const scrolled = window.scrollY;
    const vh = window.innerHeight;
    const progress = Math.min(scrolled / vh, 1);

    checkZIndexChange(scrolled);

    /* ✅ LOGO PARALLAX */
    if (heroTitle) {
      heroTitle.style.transform = 'translateY(' + (scrolled * 0.95) + 'px)'; // Safari-friendly
    }

    /* ✅ BACKGROUND FADE (SLOW) */
    if (background) {
      const bgOpacity = Math.max(0.75, 1 - progress * 0.25);
      background.style.opacity = bgOpacity;
    }

    /* ✅ ✅ ✅ LATE + SLOW OVERLAY OPACITY */
    if (overlay) {
      // 🏠 House image fade out (EARLY & SMOOTH)
      const imageOpacity = scrolled < 80 ? 1 : Math.max(0, 1 - (scrolled - 80) / 500);

      // 🖤 Black overlay fade in (SMOOTH CINEMATIC)
      const blackOpacity = scrolled < 150 ? 0 : Math.min((scrolled - 150) / 500, 1);

      // Safari-friendly: direct style instead of CSS variables
      if (overlayImg) overlayImg.style.opacity = imageOpacity;
      overlay.style.backgroundColor = 'rgba(0,0,0,' + blackOpacity + ')';
      overlay.style.pointerEvents = 'none';
    }

    ticking = false;
  }

  /* ✅ RAF Optimized Scroll */
  window.addEventListener('scroll', function() {
    if (!ticking) {
      requestAnimationFrame(handleScroll);
      ticking = true;
    }
  }, { passive: true });

  /* ✅ Initial State */
  handleScroll();

});
</script> -->

<script>
  document.addEventListener('DOMContentLoaded', function() {

    const heroContent = document.querySelector('.hero_content-bottom');
    const heroTitle = document.querySelector('.hero_title');
    const overlay = document.querySelector('.hero_img-overlay');
    const overlayImg = overlay ? overlay.querySelector('img') : null; // house image inside overlay
    const background = document.querySelector('.hero_bg');
    const heroSticky = document.querySelector('.hero_sticky');

    let ticking = false;
    let scrollStartTime = null;
    let scrollStarted = false;
    let zIndexChanged = false;

    /* ---------------------------
       ✅ INITIAL FADE IN
    ----------------------------*/
    setTimeout(() => {
      if (background) background.style.opacity = '1';
      if (heroContent) {
        heroContent.style.opacity = '1';
        heroContent.style.transform = 'translateY(0)';
      }
    }, 800);

    /* ---------------------------
       ✅ Z-INDEX CHANGE AFTER SCROLL
    ----------------------------*/
    function checkZIndexChange(scrollY) {
      if (scrollY > 40 && !scrollStarted) {
        scrollStarted = true;
        scrollStartTime = Date.now();
      }

      if (scrollY <= 10) {
        scrollStarted = false;
        scrollStartTime = null;
        zIndexChanged = false;
        if (heroSticky) heroSticky.style.zIndex = '';
      }

      if (scrollStarted && scrollStartTime && !zIndexChanged) {
        const elapsed = Date.now() - scrollStartTime;
        if (elapsed >= 10) {
          if (heroSticky) heroSticky.style.zIndex = '9999';
          zIndexChanged = true;
        }
      }
    }

    /* ---------------------------
       ✅ SMOOTH SCROLL SYSTEM
    ----------------------------*/
    function handleScroll() {
      const scrolled = window.scrollY;
      const vh = window.innerHeight;
      const progress = Math.min(scrolled / vh, 1);

      checkZIndexChange(scrolled);

      /* ✅ LOGO PARALLAX */
      if (heroTitle) {
        heroTitle.style.transform = 'translateY(' + (scrolled * 0.95) + 'px)';
      }

      /* ✅ BACKGROUND FADE (SLOW) */
      if (background) {
        const bgOpacity = Math.max(0.75, 1 - progress * 0.25);
        background.style.opacity = bgOpacity;
      }

      /* ✅ OVERLAY CONTROL */
      if (overlay) {

        // 🏠 House image fade out (early & smooth)
        const imageOpacity = scrolled < 80 ?
          1 :
          Math.max(0, 1 - (scrolled - 80) / 500);

        // 🖤 Black overlay fade in (SLOW + LONG)
        let blackOpacity = 0;
        if (scrolled > 200) {
          blackOpacity = (scrolled - 200) / 900; // 👈 slower
          blackOpacity = Math.min(blackOpacity, 1);
          blackOpacity = blackOpacity * blackOpacity; // smooth ease-in
        }

        if (overlayImg) overlayImg.style.opacity = imageOpacity;
        overlay.style.backgroundColor = 'rgba(0,0,0,' + blackOpacity + ')';
        overlay.style.pointerEvents = 'none';
      }

      ticking = false;
    }

    /* ✅ RAF Optimized Scroll */
    window.addEventListener('scroll', function() {
      if (!ticking) {
        requestAnimationFrame(handleScroll);
        ticking = true;
      }
    }, {
      passive: true
    });

    /* ✅ Initial State */
    handleScroll();

  });
</script>








<!-- <script>
document.addEventListener('DOMContentLoaded', function() {

  const heroContent = document.querySelector('.hero_content-bottom');
  const heroTitle = document.querySelector('.hero_title');
  const overlay = document.querySelector('.hero_img-overlay');
  const overlayImg = overlay ? overlay.querySelector('img') : null; // if image inside overlay
  const background = document.querySelector('.hero_bg');
  const heroSticky = document.querySelector('.hero_sticky');

  let ticking = false;
  let scrollStartTime = null;
  let scrollStarted = false;
  let zIndexChanged = false;

  /* ---------------------------
     INITIAL FADE IN
  ----------------------------*/
  setTimeout(() => {
    if (background) background.style.opacity = '1';
    if (heroContent) {
      heroContent.style.opacity = '1';
      heroContent.style.transform = 'translateY(0)';
    }
  }, 800);

  /* ---------------------------
     Z-INDEX CHANGE AFTER SCROLL
  ----------------------------*/
  function checkZIndexChange(scrollY) {
    if (scrollY > 40 && !scrollStarted) {
      scrollStarted = true;
      scrollStartTime = Date.now();
    }

    if (scrollY <= 10) {
      scrollStarted = false;
      scrollStartTime = null;
      zIndexChanged = false;
      if (heroSticky) heroSticky.style.zIndex = '';
    }

    if (scrollStarted && scrollStartTime && !zIndexChanged) {
      const elapsed = Date.now() - scrollStartTime;
      if (elapsed >= 10) {
        if (heroSticky) heroSticky.style.zIndex = '9999';
        zIndexChanged = true;
      }
    }
  }

  /* ---------------------------
     SCROLL HANDLER
  ----------------------------*/
  function handleScroll() {
    const scrolled = window.scrollY;
    const vh = window.innerHeight;
    const progress = Math.min(scrolled / vh, 1);

    checkZIndexChange(scrolled);

    // LOGO PARALLAX
    if (heroTitle) {
      heroTitle.style.transform = 'translateY(' + (scrolled * 0.95) + 'px)';
    }

    // BACKGROUND FADE
    if (background) {
      background.style.opacity = Math.max(0.75, 1 - progress * 0.25);
    }

    // OVERLAY IMAGE + BLACK FADE
    if (overlay) {
      const imageOpacity = scrolled < 80 ? 1 : Math.max(0, 1 - (scrolled - 80) / 500);
      const blackOpacity = scrolled < 150 ? 0 : Math.min((scrolled - 150) / 500, 1);

      // Apply directly (Safari-compatible)
      if (overlayImg) overlayImg.style.opacity = imageOpacity;
      overlay.style.backgroundColor = 'rgba(0,0,0,' + blackOpacity + ')';
      overlay.style.pointerEvents = 'none';
    }

    ticking = false;
  }

  /* ---------------------------
     OPTIMIZED RAF SCROLL
  ----------------------------*/
  window.addEventListener('scroll', function() {
    if (!ticking) {
      requestAnimationFrame(handleScroll);
      ticking = true;
    }
  }, { passive: true });

  // INITIAL STATE
  handleScroll();

});
</script> -->

<!-- <script>
document.addEventListener('DOMContentLoaded', function() {

  const heroContent = document.querySelector('.hero_content-bottom');
  const heroTitle = document.querySelector('.hero_title');
  const overlay = document.querySelector('.hero_img-overlay');
  const overlayImg = overlay ? overlay.querySelector('img') : null; // house image inside overlay
  const background = document.querySelector('.hero_bg');
  const heroSticky = document.querySelector('.hero_sticky');

  let ticking = false;
  let scrollStartTime = null;
  let scrollStarted = false;
  let zIndexChanged = false;

  /* ---------------------------
     INITIAL FADE IN
  ----------------------------*/
  setTimeout(() => {
    if (background) background.style.opacity = '1';
    if (heroContent) {
      heroContent.style.opacity = '1';
      heroContent.style.transform = 'translateY(0)';
    }
  }, 800);

  /* ---------------------------
     Z-INDEX CHANGE AFTER SCROLL
  ----------------------------*/
  function checkZIndexChange(scrollY) {
    if (scrollY > 40 && !scrollStarted) {
      scrollStarted = true;
      scrollStartTime = Date.now();
    }

    if (scrollY <= 10) {
      scrollStarted = false;
      scrollStartTime = null;
      zIndexChanged = false;
      if (heroSticky) heroSticky.style.zIndex = '';
    }

    if (scrollStarted && scrollStartTime && !zIndexChanged) {
      const elapsed = Date.now() - scrollStartTime;
      if (elapsed >= 10) {
        if (heroSticky) heroSticky.style.zIndex = '9999';
        zIndexChanged = true;
      }
    }
  }

  /* ---------------------------
     SCROLL HANDLER
  ----------------------------*/
  function handleScroll() {
    const scrolled = window.scrollY;
    const vh = window.innerHeight;
    const progress = Math.min(scrolled / vh, 1);

    checkZIndexChange(scrolled);

    // LOGO PARALLAX
    if (heroTitle) {
      heroTitle.style.transform = 'translateY(' + (scrolled * 0.95) + 'px)';
    }

    // BACKGROUND FADE
    if (background) {
      background.style.opacity = Math.max(0.75, 1 - progress * 0.25);
    }

    // OVERLAY IMAGE + BLACK FADE (Safari-compatible)
    if (overlay) {
      const imageOpacity = scrolled < 80 ? 1 : Math.max(0, 1 - (scrolled - 80) / 500);
      const blackOpacity = scrolled < 150 ? 0 : Math.min((scrolled - 150) / 500, 1);

      // House image fade
      if (overlayImg) overlayImg.style.opacity = imageOpacity;

      // Black overlay fade
      overlay.style.backgroundColor = 'rgba(0,0,0,' + blackOpacity + ')';
      overlay.style.pointerEvents = 'none';
    }

    ticking = false;
  }

  /* ---------------------------
     OPTIMIZED RAF SCROLL
  ----------------------------*/
  window.addEventListener('scroll', function() {
    if (!ticking) {
      requestAnimationFrame(handleScroll);
      ticking = true;
    }
  }, { passive: true });

  // INITIAL STATE
  handleScroll();

});
</script> -->


<!-- <script>
document.addEventListener('DOMContentLoaded', function() {

  const heroContent = document.querySelector('.hero_content-bottom');
  const heroTitle = document.querySelector('.hero_title');
  const overlay = document.querySelector('.hero_img-overlay');
  const overlayImg = overlay ? overlay.querySelector('img') : null; // house image inside overlay
  const background = document.querySelector('.hero_bg');
  const heroSticky = document.querySelector('.hero_sticky');

  let ticking = false;
  let scrollStartTime = null;
  let scrollStarted = false;
  let zIndexChanged = false;

  /* ---------------------------
     ✅ INITIAL FADE IN
  ----------------------------*/
  setTimeout(() => {
    if (background) background.style.opacity = '1';
    if (heroContent) {
      heroContent.style.opacity = '1';
      heroContent.style.transform = 'translateY(0)';
    }
  }, 800);

  /* ---------------------------
     ✅ Z-INDEX CHANGE AFTER SCROLL
  ----------------------------*/
  function checkZIndexChange(scrollY) {
    if (scrollY > 40 && !scrollStarted) { 
      scrollStarted = true;
      scrollStartTime = Date.now();
    }

    if (scrollY <= 10) {
      scrollStarted = false;
      scrollStartTime = null;
      zIndexChanged = false;
      if (heroSticky) heroSticky.style.zIndex = '';
    }

    if (scrollStarted && scrollStartTime && !zIndexChanged) {
      const elapsed = Date.now() - scrollStartTime;
      if (elapsed >= 10) { 
        if (heroSticky) {
          heroSticky.style.zIndex = '9999';
        }
        zIndexChanged = true;
      }
    }
  }

  /* ---------------------------
     ✅ SMOOTH SCROLL SYSTEM
  ----------------------------*/
  function handleScroll() {
    const scrolled = window.scrollY;
    const vh = window.innerHeight;
    const progress = Math.min(scrolled / vh, 1);

    checkZIndexChange(scrolled);

    /* ✅ LOGO PARALLAX */
    if (heroTitle) {
      heroTitle.style.transform = 'translateY(' + (scrolled * 0.95) + 'px)';
    }

    /* ✅ BACKGROUND FADE (SLOW) */
    if (background) {
      const bgOpacity = Math.max(0.75, 1 - progress * 0.25); 
      background.style.opacity = bgOpacity;
    }

    /* ✅ ✅ ✅ OVERLAY OPACITY (Safari-friendly) */
    if (overlay) {
      // House image fade out (EARLY & SMOOTH)
      const imageOpacity = scrolled < 80 ? 1 : Math.max(0, 1 - (scrolled - 80) / 500);

      // Black overlay fade in (SMOOTH CINEMATIC)
      const blackOpacity = scrolled < 150 ? 0 : Math.min((scrolled - 150) / 500, 1);

      // Apply directly instead of CSS variables (Safari-friendly)
      if (overlayImg) overlayImg.style.opacity = imageOpacity;
      overlay.style.backgroundColor = 'rgba(0,0,0,' + blackOpacity + ')';
      overlay.style.pointerEvents = 'none';
    }

    ticking = false;
  }

  /* ✅ RAF Optimized Scroll */
  window.addEventListener('scroll', function() {
    if (!ticking) {
      requestAnimationFrame(handleScroll);
      ticking = true;
    }
  }, { passive: true });

  /* ✅ Initial State */
  handleScroll();

});
</script> -->





<!-- 
<script>
document.querySelectorAll(".tab-card").forEach(card => {
    card.addEventListener("click", function () {

        // Remove active
        document.querySelectorAll(".tab-card").forEach(c => c.classList.remove("active"));
        document.querySelectorAll(".tab-content").forEach(c => c.classList.remove("active"));

        // Activate new one
        this.classList.add("active");
        let tabId = this.dataset.tab;
        document.getElementById(tabId).classList.add("active");

        // Set background preview inside tab card
        let img = this.dataset.img;
        this.style.backgroundImage = `url(${img})`;
        this.style.backgroundColor = "#00000000";
    });
});
</script> -->
<!-- <script>
  document.addEventListener("DOMContentLoaded", function () {

    // --------- FADE-UP SCROLL ANIMATION ---------
    const section = document.querySelector(".project-tabs");

    if (section) {
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            section.classList.add("fade-show");
            observer.unobserve(entry.target);
          }
        });
      });

      observer.observe(section);
    }

    // --------- TAB SWITCH ANIMATION ---------
    const cards = document.querySelectorAll(".tab-card");

    cards.forEach(card => {
      card.addEventListener("click", function () {

        document.querySelectorAll(".tab-card").forEach(c =>
          c.classList.remove("active")
        );
        document.querySelectorAll(".tab-content").forEach(c =>
          c.classList.remove("active")
        );

        this.classList.add("active");

        const tabId = this.dataset.tab;
        const content = document.getElementById(tabId);

        if (content) {
          content.classList.add("active");
        }

        const img = this.dataset.img;
        if (img) {
          this.style.background = `url(${img}) center / cover no-repeat`;
        }
      });
    });

  });
</script> -->


<!-- <script>
document.addEventListener("DOMContentLoaded", function () {

  // --------- FADE-UP SCROLL ANIMATION ---------
  const section = document.querySelector(".project-tabs");

  if (section) {
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          section.classList.add("fade-show");
          observer.unobserve(entry.target);
        }
      });
    });
    observer.observe(section);
  }

  // --------- TAB SWITCH ANIMATION ---------
  const cards = document.querySelectorAll(".tab-card");
  const contents = document.querySelectorAll(".tab-content");

  cards.forEach(card => {
    card.addEventListener("click", function () {

      // Remove 'active' from all cards and contents
      cards.forEach(c => c.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      // Add 'active' to clicked card
      this.classList.add("active");

      // Show corresponding content
      const tabId = this.dataset.tab;
      const content = document.getElementById(tabId);
      if (content) content.classList.add("active");
    });
  });

});
</script> -->


<script>
  document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".tab-card");
    const contents = document.querySelectorAll(".tab-content");

    function setCardBackground(card) {
      const img = card.dataset.img;
      if (img) card.style.backgroundImage = `url(${img})`;
    }

    // Set background for initial active card
    const activeCard = document.querySelector(".tab-card.active");
    if (activeCard) setCardBackground(activeCard);

    cards.forEach(card => {
      card.addEventListener("click", function() {
        // Remove active class from all cards & contents
        cards.forEach(c => {
          c.classList.remove("active");
          c.style.backgroundImage = ""; // remove bg from inactive
        });
        contents.forEach(c => c.classList.remove("active"));

        // Add active to clicked card
        this.classList.add("active");
        setCardBackground(this);

        // Show corresponding content
        const tabId = this.dataset.tab;
        const content = document.getElementById(tabId);
        if (content) content.classList.add("active");
      });
    });
  });
</script>



<!-- <script>
  document.addEventListener("DOMContentLoaded", function () {

  const cards = document.querySelectorAll(".tab-card");
  const contents = document.querySelectorAll(".tab-content");

  cards.forEach(card => {
    card.addEventListener("click", function () {

      // Remove active class from all cards and contents
      cards.forEach(c => c.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      // Add active to clicked card
      this.classList.add("active");

      // Show corresponding content
      const tabId = this.dataset.tab;
      const content = document.getElementById(tabId);
      if (content) content.classList.add("active");
    });
  });

});

</script> -->



<script>
  // JS: scroll-triggered animation
  document.addEventListener("DOMContentLoaded", () => {
    const imgWrappers = document.querySelectorAll(".img-wrapper");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible"); // trigger animation
            observer.unobserve(entry.target); // run once
          }
        });
      }, {
        threshold: 0.5
      } // 30% visible to trigger
    );

    imgWrappers.forEach((el) => observer.observe(el));
  });
</script>


<script>
  $(document).ready(function() {

    // Initialize Owl Carousel
    $(".blog-carousel").owlCarousel({
      loop: true,
      items: 3,
      margin: 20,
      nav: true,
      dots: false,
      navText: [
        '<i class="fa-solid fa-chevron-left"></i>',
        '<i class="fa-solid fa-chevron-right"></i>'
      ],
      autoplay: true,
      autoplayTimeout: 2500,
      autoplaySpeed: 800,
      smartSpeed: 800,
      autoplayHoverPause: true,

      responsive: {
        0: {
          items: 1,
          stagePadding: 40
        },
        600: {
          items: 2,
          stagePadding: 60
        },
        1000: {
          items: 3,
          stagePadding: 120
        }
      }
    });

    // Scroll animation
    const cards = document.querySelectorAll(".blog-card");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    });

    cards.forEach(card => observer.observe(card));
  });
</script>





<script>
  // ------------ FAQ Toggle ------------
  document.querySelectorAll(".faq-item").forEach((item) => {
    item.addEventListener("click", () => {
      item.classList.toggle("active");
    });
  });

  // ------------ Fade Up Animation for FAQ ------------
  document.addEventListener("DOMContentLoaded", () => {
    const faqSection = document.querySelector(".faq-section");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          faqSection.classList.add("show"); // fade in
        } else {
          faqSection.classList.remove("show"); // fade out
        }
      });
    }, {
      threshold: 0.5 // 50% element viewport e thakle trigger
    });

    observer.observe(faqSection);
  });
</script>




<script>
  // Footer reveal from behind CTA
  const footer = document.querySelector('.footer-section');
  const cta = document.querySelector('.cta-section');

  window.addEventListener('scroll', () => {
    const ctaBottom = cta.getBoundingClientRect().bottom;

    if (ctaBottom < window.innerHeight) {
      footer.classList.add('show-footer');
    } else {
      footer.classList.remove('show-footer');
    }
  });
</script>





<script>
  document.addEventListener('DOMContentLoaded', function() {
    const cardsGrid = document.getElementById('cardsGrid');
    const expandedCards = document.querySelectorAll('.expanded-card');
    const progressBar = document.getElementById('progressBar');
    const cardsSection = document.querySelector('.cards-section');

    let activeCard = 0;

    // Scroll animation
    window.addEventListener('scroll', function() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const windowHeight = window.innerHeight;
      const sectionTop = cardsSection.offsetTop;
      const sectionHeight = cardsSection.offsetHeight;

      // Calculate scroll progress
      const scrollProgress = Math.min(Math.max(
        (scrollTop - sectionTop + windowHeight * 0.3) / (sectionHeight * 0.7),
        0
      ), 1);

      // Update progress bar
      progressBar.style.width = (scrollProgress * 100) + '%';

      // Determine active card based on scroll
      if (scrollProgress < 0.2) {
        // Show grid only
        showGrid();
        activeCard = 0;
      } else if (scrollProgress < 0.4) {
        // Show first expanded card
        showExpandedCard(1);
        activeCard = 1;
      } else if (scrollProgress < 0.7) {
        // Show second expanded card
        showExpandedCard(2);
        activeCard = 2;
      } else {
        // Show third expanded card
        showExpandedCard(3);
        activeCard = 3;
      }
    });

    function showGrid() {
      // Show grid, hide all expanded cards
      cardsGrid.style.opacity = '1';
      cardsGrid.style.pointerEvents = 'auto';

      expandedCards.forEach(card => {
        card.classList.remove('active', 'prev');
      });
    }

    function showExpandedCard(cardNumber) {
      // Hide grid
      cardsGrid.style.opacity = '0';
      cardsGrid.style.pointerEvents = 'none';

      // Reset all expanded cards
      expandedCards.forEach(card => {
        card.classList.remove('active', 'prev');
      });

      // Show the active card
      const activeCard = document.getElementById(`expandedCard${cardNumber}`);
      activeCard.classList.add('active');

      // Show previous cards as "prev" state
      for (let i = 1; i < cardNumber; i++) {
        const prevCard = document.getElementById(`expandedCard${i}`);
        prevCard.classList.add('prev');
      }
    }

    // Grid card click handlers
    document.querySelectorAll('.grid-card').forEach(card => {
      card.addEventListener('click', function() {
        const cardNum = this.getAttribute('data-card');

        // Scroll to the position where this card should be active
        const sectionTop = cardsSection.offsetTop;
        const windowHeight = window.innerHeight;

        let scrollPosition;
        if (cardNum === '1') {
          scrollPosition = sectionTop + windowHeight * 0.5;
        } else if (cardNum === '2') {
          scrollPosition = sectionTop + windowHeight * 1.0;
        } else {
          scrollPosition = sectionTop + windowHeight * 1.5;
        }

        window.scrollTo({
          top: scrollPosition,
          behavior: 'smooth'
        });
      });
    });

    // Arrow click handlers
    document.querySelectorAll('.expanded-arrow').forEach((arrow, index) => {
      arrow.addEventListener('click', function(e) {
        e.stopPropagation();
        const titles = ['Shopping Center', 'Sustainable Offices', 'Urban Retreat'];
        alert(`Viewing details of "${titles[index]}"`);
      });
    });

    // Initialize
    showGrid();
  });
</script>





<script>
  // text-animation

  // Select all text containers
  const textContainers = document.querySelectorAll('.text-container');

  // Loop through each text container
  textContainers.forEach(textContainer => {
    // Apply SplitText to split into words and characters
    const splitText = new SplitText(textContainer, {
      type: "words,chars"
    });
    const chars = splitText.chars; // Array of individual characters
    const words = splitText.words; // Array of words (useful for spacing corrections)

    // Ensure proper word breaks with wrapping CSS if needed
    textContainer.style.wordWrap = "break-word";

    // Create a ScrollTrigger animation
    gsap.from(chars, {
      duration: 1.3,
      opacity: 0,
      y: 50,
      stagger: 0.02,
      ease: "power2.out",
      scrollTrigger: {
        trigger: textContainer, // The element that triggers the animation
        start: "top bottom", // Trigger the animation when the top of the container reaches the bottom of the viewport
        end: "bottom top", // End the animation when the bottom of the container reaches the top of the viewport
        once: true, // This ensures the animation runs only once
        markers: false // Set to true if you want to see the start/end points for debugging
      }
    });
  });
</script>


<script>
  const heroElements = document.querySelectorAll('.hero_sticky');

  function revealHero(el) {
    const rect = el.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    // Element viewport e thakle show
    if (rect.top < windowHeight * 0.9 && rect.bottom > 0) {
      el.classList.add('show');
    } else {
      el.classList.remove('show');
    }
  }

  // Page load e call kora
  window.addEventListener('load', () => {
    heroElements.forEach(el => revealHero(el));
  });

  // Scroll e call kora
  window.addEventListener('scroll', () => {
    heroElements.forEach(el => revealHero(el));
  });
</script>



<!-- our commitment script -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.process-step');
    const images = document.querySelectorAll('.process-image');

    steps.forEach(step => {
      step.addEventListener('mouseenter', function() {
        // Don't do anything if this is already the active step
        if (this.classList.contains('active')) return;

        // Remove active class from all steps
        steps.forEach(s => {
          s.classList.remove('active');
        });

        // Add active class to current step
        this.classList.add('active');

        // Get the index of the current step
        const index = this.getAttribute('data-index');

        // Hide all images
        images.forEach(img => {
          img.classList.remove('show');
        });

        // Show the corresponding image
        document.querySelector(`.img-${index}`).classList.add('show');
      });
    });

    // Initialize with first step active
    const firstStep = document.querySelector('.process-step[data-index="0"]');
    const firstImage = document.querySelector('.img-0');

    if (firstStep && firstImage) {
      firstStep.classList.add('active');
      firstImage.classList.add('show');
    }
  });
</script>

<script>
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {

      // remove active from all buttons
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));

      // hide all panes
      document.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));

      // activate current
      this.classList.add('active');
      document.getElementById(this.dataset.tab).classList.add('active');

    });
  });
</script>


<!-- wrap script -->

<!-- <script>
  const section = document.getElementById('advanceSection');

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          section.classList.add('scrolled');
        } else {
          section.classList.remove('scrolled');
        }
      });
    }, {
      threshold: 0.9
    }
  );

  observer.observe(section);
</script> -->

<script>
  const section = document.getElementById('advanceSection');
  let hasOpened = false;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !hasOpened) {
          section.classList.add('scrolled');
          hasOpened = true; // lock it
        }


        if (!entry.isIntersecting && entry.boundingClientRect.top > 0) {
          section.classList.remove('scrolled');
          hasOpened = false;
        }
      });
    }, {
      threshold: 0.9
    }
  );

  observer.observe(section);
</script>




<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counter = document.querySelector(".counter");
    const target = +counter.dataset.target;
    let started = false;

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !started) {
          started = true;
          let count = 0;
          const speed = 100;

          const updateCounter = () => {
            const increment = target / speed;
            if (count < target) {
              count += increment;
              counter.innerText = Math.ceil(count);
              requestAnimationFrame(updateCounter);
            } else {
              counter.innerText = target;
            }
          };

          updateCounter();
        }
      });
    }, {
      threshold: 0.5
    });

    observer.observe(counter);
  });
</script>


<script>
  $(document).ready(function() {
    $('.testimonial-carousel').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 4000,
      smartSpeed: 800,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1200: {
          items: 2
        }
      }
    });
  });
</script>


<script>
  $(document).ready(function() {
    $('.company-supports-carousel').owlCarousel({
      loop: true,
      margin: 30,
      autoplay: true,
      autoplayTimeout: 2500,
      autoplayHoverPause: true,
      dots: false,
      nav: false,
      responsive: {
        0: {
          items: 2
        },
        576: {
          items: 3
        },
        992: {
          items: 5
        }
      }
    });
  });
</script>


<script>
  document.addEventListener("DOMContentLoaded", function() {

    const section = document.querySelector(".achievement-items-list");
    const counters = document.querySelectorAll(".counter");
    let started = false;

    function startCounter() {
      counters.forEach(counter => {
        const target = parseInt(counter.innerText, 10);
        let count = 0;
        const speed = 20;

        const update = () => {
          count += Math.ceil(target / 100);
          if (count < target) {
            counter.innerText = count;
            setTimeout(update, speed);
          } else {
            counter.innerText = target;
          }
        };

        update();
      });
    }

    window.addEventListener("scroll", function() {
      const sectionTop = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (!started && sectionTop < windowHeight - 100) {
        started = true;
        startCounter();
      }
    });

  });
</script>



<script>
  document.addEventListener("DOMContentLoaded", function() {

    const skillSection = document.querySelector(".skills-progress-list");
    const skillBars = document.querySelectorAll(".skillbar");
    let animated = false;

    function animateSkills() {
      const sectionTop = skillSection.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (!animated && sectionTop < windowHeight - 100) {
        skillBars.forEach((bar, index) => {
          const percent = bar.getAttribute("data-percent");
          setTimeout(() => {
            bar.querySelector(".count-bar").style.width = percent;
          }, index * 200); // stagger effect
        });
        animated = true;
      }
    }

    window.addEventListener("scroll", animateSkills);
    animateSkills(); // initial check

  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {

    function revealOnScroll() {
      const items = document.querySelectorAll(".reveal, .reveal1");
      const windowHeight = window.innerHeight;

      items.forEach(item => {
        const elementTop = item.getBoundingClientRect().top;

        if (elementTop < windowHeight - 100) {
          item.classList.add("show");
        }
      });
    }

    // page load
    revealOnScroll();

    // scroll
    window.addEventListener("scroll", revealOnScroll);

  });
</script>

<script>
  function revealOnScroll() {
    const items = document.querySelectorAll('.reveal');

    items.forEach(item => {
      const itemPosition = item.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (itemPosition < windowHeight - 100) {
        item.classList.add('show');
      }
    });
  }

  // Scroll event
  window.addEventListener('scroll', revealOnScroll);

  revealOnScroll();
</script>

<script>
  window.addEventListener('scroll', function() {
    const items = document.querySelectorAll('.reveal1'); // Use the new class

    items.forEach(item => {
      const itemPosition = item.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (itemPosition < windowHeight - 100) {
        item.classList.add('show');
      }
    });
  });
</script>


<script>
  window.addEventListener("load", function() {
    // check popup already shown or not
    if (!localStorage.getItem("popupShown")) {
      setTimeout(() => {
        document.getElementById("popupOverlay").style.display = "flex";
        localStorage.setItem("popupShown", "true"); // mark as shown
      }, 800); // delay optional
    }
  });

  document.getElementById("popupClose").addEventListener("click", function() {
    document.getElementById("popupOverlay").style.display = "none";
  });

  document.getElementById("popupOverlay").addEventListener("click", function(e) {
    if (e.target === this) {
      this.style.display = "none";
    }
  });
</script>



<script>
  const video = document.querySelector(".intro-video-player");
  const playBtn = document.querySelector(".video-play-btn");

  playBtn.addEventListener("click", () => {
    video.play();
    video.setAttribute("controls", "controls");
    playBtn.style.display = "none";
  });
</script>



</body>

</html>