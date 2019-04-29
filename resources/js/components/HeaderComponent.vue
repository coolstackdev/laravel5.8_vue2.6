<template>
  <header class="header">
    <!-- Container -->
    <div class="header__container">
      <!-- Hamburger button -->
      <button class="header__hamburger-btn" type="button" aria-label="Open the navigation">
        <svg>
          <use xlink:href="#icon-hamburger"></use>
        </svg>
      </button>

      <!-- Logo -->
      <a class="header__logo" href="#" aria-label="Go to the home page">
        <svg class="icon">
          <use xlink:href="#logo-colored"></use>
        </svg>
      </a>

      <!-- Search -->
      <form class="search search--header" id="search-form" action="#" method="post">
        <!-- Query -->
        <div class="search-query">
          <!-- Icon -->
          <svg class="search-query__icon icon">
            <use xlink:href="#icon-search"></use>
          </svg>

          <!-- Input -->
          <input
            class="search-query__input"
            id="search-form-query"
            name="query"
            type="search"
            placeholder="Search here..."
            aria-label="Enter a search query"
          >
        </div>

        <!-- City -->
        <div class="search-city">
          <!-- Icon -->
          <svg class="search-city__icon icon">
            <use xlink:href="#icon-location"></use>
          </svg>

          <!-- Select wrapper -->
          <div class="search-city__select-wrapper">
            <!-- Select -->
            <select
              class="search-city__select"
              id="search-form-city"
              name="city"
              aria-label="Select your city"
            >
              <option value="1">Riyadh</option>
              <option value="2">Jeddah</option>
              <option value="3">Dammam</option>
              <option value="4">Dubai</option>
            </select>
          </div>
        </div>

        <!-- Submit -->
        <button class="search__submit-btn" type="submit">Search</button>
      </form>

      <!-- Language -->
      <div class="header-lang">
        <!-- Button -->
        <button class="header-lang-btn" type="button">
          <span class="header-lang-btn__title">English</span>
          <svg class="header-lang-btn__icon icon">
            <use xlink:href="#icon-expand"></use>
          </svg>
        </button>
      </div>

      <!-- List your gear -->
      <a class="header__list-link" href="#">List your gear</a>

      <!-- Search button -->
      <button class="header__search-btn" type="button" aria-label="Open the search">
        <svg>
          <use xlink:href="#icon-search"></use>
        </svg>
      </button>

      <!-- Cart -->
      <div class="header-cart">
        <!-- Button -->
        <button class="header-cart-btn" type="button" aria-label="Cart">
          <!-- Icon -->
          <svg class="header-cart-btn__icon">
            <use xlink:href="#icon-cart"></use>
          </svg>

          <!-- Notification -->
          <span class="notification">9</span>
        </button>
      </div>

      <!-- Profile -->
      <div class="header-profile">
        <!-- Button -->
        <button class="header-profile-btn" type="button" aria-label="Profile">
          <!-- Avatar -->
          <span class="header-profile-btn__avatar">
            <!-- Image -->
            <img
              src="img/components/header/avatar.png"
              srcset="img/components/header/avatar@2x.png 2x"
              alt="Name here"
            >

            <!-- Notification -->
            <span class="notification">9</span>
          </span>

          <!-- Name -->
          <span class="header-profile-btn__name">Muhammad Khalid</span>

          <!-- Arrow icon -->
          <svg class="header-profile-btn__arrow-icon">
            <use xlink:href="#icon-expand"></use>
          </svg>
        </button>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  mounted() {
    console.log("HeaderComponent mounted.");
  }
};
</script>
