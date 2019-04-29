<template>
  <main class="sign">
    <!-- Container -->
    <div class="sign__container">
      <!-- Header -->
      <header class="sign__header">
        <!-- Logo -->
        <svg class="sign__logo icon">
          <use xlink:href="#logo"></use>
        </svg>
      </header>

      <!-- Main -->
      <div class="sign-main">
        <!-- Header -->
        <header class="sign-main__header">
          <!-- Title -->
          <h1 class="sign-main__title">Login to Continue</h1>
        </header>

        <!-- Social -->
        <div class="sign-social">
          <!-- Google -->
          <a class="sign-social-btn sign-social-btn--google" href="#">
            <!-- Icon -->
            <svg class="sign-social-btn__icon icon">
              <use xlink:href="#icon-google"></use>
            </svg>

            <!-- Title -->
            <span class="sign-social-btn__title">Login with Google</span>
          </a>

          <!-- Facebook -->
          <a class="sign-social-btn sign-social-btn--facebook" href="#">
            <!-- Icon -->
            <svg class="sign-social-btn__icon icon">
              <use xlink:href="#icon-facebook"></use>
            </svg>

            <!-- Title -->
            <span class="sign-social-btn__title">Login with Facebook</span>
          </a>

          <!-- Title -->
          <h2 class="sign-social__title">Or Login with</h2>
        </div>

        <!-- Form -->
        <form class="sign-main__form" id="login-form" action="login" method="post">
          <input type="hidden" name="_token" :value="csrf">
          <!-- Email -->
          <div class="sign-main__field field">
            <!-- Input -->
            <input
              class="field__input"
              id="login-form-email"
              name="email"
              type="email"
              placeholder="Enter Email"
              aria-label="Enter your email"
            >
          </div>

          <!-- Password -->
          <div class="sign-main__field field">
            <!-- Input -->
            <input
              class="field__input"
              id="login-form-password"
              name="password"
              type="password"
              placeholder="Enter Password"
              aria-label="Enter your password"
            >

            <!-- Forgot password -->
            <div class="sign-main__forgot">
              <a href="#">Forgot your password?</a>
            </div>
          </div>

          <!-- Submit button -->
          <button class="sign-main__submit-btn btn btn--xs btn--blue" type="submit">Login</button>
        </form>

        <!-- Footer -->
        <footer class="sign-main__footer">
          <!-- Not a member? -->
          <h2 class="sign-main__subtitle">Not a member yet?</h2>

          <!-- Sign up button -->
          <a class="sign-main__sign-up-btn btn btn--xs btn--ghost-blue" href="register">Sign Up</a>
        </footer>
      </div>

      <!-- Footer -->
      <footer class="sign__footer">
        <!-- Copyright -->
        <div class="sign__copyright">
          <p>Copyright © 2019 Moadaty. All rights reserved</p>
        </div>
      </footer>
    </div>
  </main>
</template>

<script>
export default {
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
    };
  },
  mounted() {
    console.log("LoginComponent mounted.");
  }
};
</script>
