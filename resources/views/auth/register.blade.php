@extends('layouts.auth')

@section('content')
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
            <h1 class="sign-main__title">Complete your registration</h1>

            </header>

            <!-- Form -->
            <form class="sign-main__form" id="sign-up-form" action="{{ route('register') }}" method="post">
            @csrf
            <!-- Topic -->
            <div class="sign-main__field select">

                <!-- Select -->
                <select class="select__input" id="sign-up-form-type" aria-label="Select an account type">
                <option value="">I am a</option>
                <option value="1">Lorem ipsum dolor sit amet.</option>
                <option value="2">Lorem ipsum dolor sit amet.</option>
                <option value="3">Lorem ipsum dolor sit amet.</option>
                <option value="4">Lorem ipsum dolor sit amet.</option>
                </select>

                <!-- Icon -->
                <svg class="select__icon icon">
                <use xlink:href="#icon-expand"></use>
                </svg>

            </div>

            <!-- Name -->
            <div class="sign-main__row">

                <!-- First name -->
                <div class="sign-main__field sign-main__field--half-width field">

                <!-- Input -->
                <input class="field__input" id="sign-up-form-first-name" name="name" type="text" placeholder="First Name"
                    aria-label="Enter your first name">

                </div>

                <!-- Last name -->
                <div class="sign-main__field sign-main__field--half-width field">

                <!-- Input -->
                <input class="field__input" id="sign-up-form-last-name" type="text" placeholder="Last Name"
                    aria-label="Enter your last name">

                </div>

            </div>

            <!-- Email -->
            <div class="sign-main__field field">

                <!-- Input -->
                <input class="field__input" id="sign-up-form-email" name="email" type="email" placeholder="Email"
                aria-label="Enter your email">

            </div>

            <!-- Password -->
            <div class="sign-main__field field">

                <!-- Input -->
                <input class="field__input" id="sign-up-form-password" name="password" type="password" placeholder="Password"
                aria-label="Enter your password">

            </div>

            <!-- Confirm password -->
            <div class="sign-main__field field">

                <!-- Input -->
                <input class="field__input" id="sign-up-form-password-2" name="password_confirmation" type="password" placeholder="Confirm Password"
                aria-label="Confirm your password">

            </div>

            <!-- Phone -->
            <div class="sign-main__row">

                <!-- Code -->
                <div class="sign-main__field sign-main__field--phone-code select select--phone-code">

                <!-- Flag -->
                <div class="select__flag">
                    <img src="{{ asset('img/flag.svg') }}" alt="">
                </div>

                <!-- Select -->
                <select class="select__input" id="sign-up-form-country" aria-label="Select your country code">
                    <option value="0" selected>+966</option>
                    <option value="1">+966</option>
                    <option value="2">+10</option>
                    <option value="3">+966</option>
                    <option value="4">+1</option>
                    <option value="5">+96688</option>
                    <option value="6">+966</option>
                    <option value="7">+966</option>
                    <option value="8">+966</option>
                    <option value="9">+966</option>
                    <option value="10">+966</option>
                </select>

                <!-- Icon -->
                <svg class="select__icon icon">
                    <use xlink:href="#icon-expand"></use>
                </svg>

                </div>

                <!-- Number -->
                <div class="sign-main__field sign-main__field--phone-number field">

                <!-- Input -->
                <input class="field__input" id="sign-up-form-phone-number" type="text" placeholder="Phone"
                    aria-label="Enter your phone number">

                </div>

            </div>

            <!-- Captcha 
            <div class="sign-main__captcha">
                <div class="g-recaptcha" data-sitekey="XXXXXXXXXXXXXXXXXXXXX"></div>
            </div>
                -->

            <!-- Submit button -->
            <button class="sign-main__submit-btn btn btn--xs btn--blue" type="submit">Сreate My Account</button>

            </form>

            <!-- Footer -->
            <footer class="sign-main__footer">

            <!-- Not a member? -->
            <h2 class="sign-main__subtitle">Already have an account?</h2>

            <!-- Sign up button -->
            <a class="sign-main__sign-up-btn btn btn--xs btn--ghost-blue" href="{{ route('login') }}">Login</a>

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

    <!-- reCaptcha -->
    <!--
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    -->
@endsection
