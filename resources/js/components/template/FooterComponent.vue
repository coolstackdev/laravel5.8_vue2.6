<template>
  <footer class="footer">
    <!-- Top part -->
    <div class="footer-top">
      <!-- Container -->
      <div class="footer-top__container">
        <!-- Logo -->
        <div class="footer-top__logo">
          <svg class="icon">
            <use xlink:href="#logo"></use>
          </svg>
        </div>

        <!-- Navigation -->
        <nav class="footer-nav">
          <!-- About us -->
          <div class="footer-nav__section">
            <!-- Title -->
            <div class="footer-nav__title">About us</div>

            <!-- List -->
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">What is Moadaty</a>
              </li>

              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">How it Works</a>
              </li>

              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">FAQ</a>
              </li>
            </ul>
          </div>

          <!-- Top Cities -->
          <div class="footer-nav__section">
            <!-- Title -->
            <div class="footer-nav__title">Top Cities</div>

            <!-- List -->
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">Gears in Riyadh</a>
              </li>

              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">Gears in Jeddah</a>
              </li>

              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">Gears in Dammam</a>
              </li>

              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">Gears in Dubai</a>
              </li>
            </ul>
          </div>

          <!-- Other -->
          <div class="footer-nav__section">
            <!-- Title -->
            <div class="footer-nav__title">Other</div>

            <!-- List -->
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">Contact Us</a>
              </li>

              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">Terms of Service</a>
              </li>

              <li class="footer-nav__item">
                <a class="footer-nav__link" href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </nav>

        <!-- Social -->
        <div class="footer-social">
          <!-- Title -->
          <div class="footer-social__title">Follow us</div>

          <!-- List -->
          <ul class="footer-social__list">
            <li class="footer-social__item">
              <a
                class="footer-social__link"
                href="#"
                target="_blank"
                rel="noopener"
                aria-label="Our Instagram page"
              >
                <svg class="footer-social__icon footer-social__icon--instagram icon">
                  <use xlink:href="#icon-instagram"></use>
                </svg>
              </a>
            </li>

            <li class="footer-social__item">
              <a
                class="footer-social__link"
                href="#"
                target="_blank"
                rel="noopener"
                aria-label="Our Twitter page"
              >
                <svg class="footer-social__icon footer-social__icon--twitter icon">
                  <use xlink:href="#icon-twitter"></use>
                </svg>
              </a>
            </li>

            <li class="footer-social__item">
              <a
                class="footer-social__link"
                href="#"
                target="_blank"
                rel="noopener"
                aria-label="Our YouTube page"
              >
                <svg class="footer-social__icon footer-social__icon--youtube icon">
                  <use xlink:href="#icon-youtube"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Bottom part -->
    <div class="footer-bottom">
      <!-- Container -->
      <div class="footer-bottom__container">
        <!-- Copyright -->
        <div class="footer-bottom__copyright">
          <p>Copyright © 2019 Moadaty. All rights reserved</p>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  mounted() {
    console.log("FooterComponent mounted.");
  }
};
</script>
