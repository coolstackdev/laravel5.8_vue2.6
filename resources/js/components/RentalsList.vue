<template>
  <main class="rentals">
    <!-- Pending -->
    <section class="rentals-section">
      <!-- Header -->
      <header class="rentals-section__header">
        <!-- Title -->
        <h2 class="rentals-section__title">Gear Rentals (Pending)</h2>

        <!-- Sort -->
        <div class="rentals-section__sort sort">
          <!-- Button -->
          <div class="sort__btn">Sort by</div>

          <!-- Dropdown -->
          <ul class="sort-dropdown">
            <li class="sort-dropdown__item">
              <button class="sort-dropdown__link" type="button">Newest</button>
            </li>

            <li class="sort-dropdown__item">
              <button class="sort-dropdown__link" type="button">Oldest</button>
            </li>
          </ul>
        </div>
      </header>

      <!-- Container -->
      <div class="rentals-section__container">
        <!-- Item -->
        <div class="rentals-item">
          <!-- Container -->
          <div class="rentals-item__container">
            <!-- Thumbnail -->
            <div
              class="rentals-item__thumbnail"
              style="background-image:url('img/pages/rentals/thumbnail.png');"
            ></div>

            <!-- Middle part -->
            <div class="rentals-item__middle-part">
              <!-- Title -->
              <h3 class="rentals-item__title">Cannon C300 Mount Camera and Shoulder Rig</h3>

              <!-- Owner -->
              <div class="rentals-item-owner">
                <!-- Container -->
                <div class="rentals-item-owner__container">
                  <!-- Avatar -->
                  <div class="rentals-item-owner__avatar">
                    <img
                      src="img/pages/rentals/owner.png"
                      srcset="img/pages/rentals/owner@2x.png 2x"
                      alt="Name here"
                    >
                  </div>

                  <!-- Information -->
                  <div class="rentals-item-owner__info">
                    <!-- Name -->
                    <div class="rentals-item-owner__name">John Doe</div>

                    <!-- Location -->
                    <div class="rentals-item-location">
                      <!-- Icon -->
                      <svg class="rentals-item-location__icon">
                        <use xlink:href="#icon-location"></use>
                      </svg>

                      <!-- City -->
                      <div class="rentals-item-location__city">Riyadh,SA</div>
                    </div>
                  </div>
                </div>

                <!-- Reviews -->
                <div class="rentals-item-reviews">
                  <!-- Container -->
                  <div class="rentals-item-reviews__container">
                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>
                  </div>

                  <!-- Number -->
                  <div class="rentals-item-reviews__number">35 reviews</div>
                </div>
              </div>
            </div>

            <!-- Right part -->
            <div class="rentals-item__right-part">
              <!-- Summary -->
              <ul class="rentals-item__summary">
                <li>Requested On: 26/08/18</li>
                <li>Rented On: $330/Day</li>
                <li>Item Total: $710</li>
              </ul>

              <!-- Actions -->
              <div class="rentals-item__actions">
                <!-- Contact button -->
                <a class="rentals-item__btn btn btn--lg btn--blue" href="#">Contact Gear Owner</a>

                <!-- Cancel button -->
                <a class="rentals-item__btn btn btn--lg btn--ghost-blue" href="#">Cancel Request</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="rentals-section__footer">
        <!-- Pagination -->
        <div class="showing">
          <!-- Title -->
          <div class="showing__title">Showing 1 of 2 Pending Rentals</div>

          <!-- Button -->
          <button class="showing__btn btn btn--sm btn--ghost-blue">Show all</button>
        </div>
      </footer>
    </section>

    <!-- Active -->
    <section class="rentals-section">
      <!-- Header -->
      <header class="rentals-section__header">
        <!-- Title -->
        <h2 class="rentals-section__title">Gear Rentals (Active)</h2>

        <!-- Sort -->
        <div class="rentals-section__sort sort">
          <!-- Button -->
          <div class="sort__btn">Sort by</div>

          <!-- Dropdown -->
          <ul class="sort-dropdown js-open">
            <li class="sort-dropdown__item">
              <button class="sort-dropdown__link" type="button">Newest</button>
            </li>

            <li class="sort-dropdown__item">
              <button class="sort-dropdown__link" type="button">Oldest</button>
            </li>
          </ul>
        </div>
      </header>

      <!-- Container -->
      <div class="rentals-section__container">
        <!-- Item -->
        <div class="rentals-item">
          <!-- Container -->
          <div class="rentals-item__container">
            <!-- Thumbnail -->
            <div
              class="rentals-item__thumbnail"
              style="background-image:url('img/pages/rentals/thumbnail.png');"
            ></div>

            <!-- Middle part -->
            <div class="rentals-item__middle-part">
              <!-- Title -->
              <h3 class="rentals-item__title">Cannon C300 Mount Camera and Shoulder Rig</h3>

              <!-- Owner -->
              <div class="rentals-item-owner">
                <!-- Container -->
                <div class="rentals-item-owner__container">
                  <!-- Avatar -->
                  <div class="rentals-item-owner__avatar">
                    <img
                      src="img/pages/rentals/owner.png"
                      srcset="img/pages/rentals/owner@2x.png 2x"
                      alt="Name here"
                    >
                  </div>

                  <!-- Information -->
                  <div class="rentals-item-owner__info">
                    <!-- Name -->
                    <div class="rentals-item-owner__name">John Doe</div>

                    <!-- Location -->
                    <div class="rentals-item-location">
                      <!-- Icon -->
                      <svg class="rentals-item-location__icon">
                        <use xlink:href="#icon-location"></use>
                      </svg>

                      <!-- City -->
                      <div class="rentals-item-location__city">Riyadh,SA</div>
                    </div>
                  </div>
                </div>

                <!-- Reviews -->
                <div class="rentals-item-reviews">
                  <!-- Container -->
                  <div class="rentals-item-reviews__container">
                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>
                  </div>

                  <!-- Number -->
                  <div class="rentals-item-reviews__number">35 reviews</div>
                </div>
              </div>
            </div>

            <!-- Right part -->
            <div class="rentals-item__right-part">
              <!-- Summary -->
              <ul class="rentals-item__summary">
                <li>Requested On: 26/08/18</li>
                <li>Rented On: $330/Day</li>
                <li>Item Total: $710</li>
              </ul>

              <!-- Actions -->
              <div class="rentals-item__actions">
                <!-- Contact button -->
                <a class="rentals-item__btn btn btn--lg btn--blue" href="#">Contact Gear Owner</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="rentals-section__footer">
        <!-- Pagination -->
        <div class="showing">
          <!-- Title -->
          <div class="showing__title">Showing 1 of 2 Active Rentals</div>

          <!-- Button -->
          <button class="showing__btn btn btn--sm btn--ghost-blue btn--disabled">Show all</button>
        </div>
      </footer>
    </section>

    <!-- Completed -->
    <section class="rentals-section">
      <!-- Header -->
      <header class="rentals-section__header">
        <!-- Title -->
        <h2 class="rentals-section__title">Gear Rentals (Completed)</h2>

        <!-- Sort -->
        <div class="rentals-section__sort sort">
          <!-- Button -->
          <div class="sort__btn">Sort by</div>

          <!-- Dropdown -->
          <ul class="sort-dropdown">
            <li class="sort-dropdown__item">
              <button class="sort-dropdown__link" type="button">Newest</button>
            </li>

            <li class="sort-dropdown__item">
              <button class="sort-dropdown__link" type="button">Oldest</button>
            </li>
          </ul>
        </div>
      </header>

      <!-- Container -->
      <div class="rentals-section__container">
        <!-- Item -->
        <div class="rentals-item">
          <!-- Container -->
          <div class="rentals-item__container">
            <!-- Thumbnail -->
            <div
              class="rentals-item__thumbnail"
              style="background-image:url('img/pages/rentals/thumbnail.png');"
            ></div>

            <!-- Middle part -->
            <div class="rentals-item__middle-part">
              <!-- Title -->
              <h3 class="rentals-item__title">Cannon C300 Mount Camera and Shoulder Rig</h3>

              <!-- Label -->
              <span class="rentals-item__label label label--blue">Feedback Required</span>

              <!-- Owner -->
              <div class="rentals-item-owner">
                <!-- Container -->
                <div class="rentals-item-owner__container">
                  <!-- Avatar -->
                  <div class="rentals-item-owner__avatar">
                    <img
                      src="img/pages/rentals/owner.png"
                      srcset="img/pages/rentals/owner@2x.png 2x"
                      alt="Name here"
                    >
                  </div>

                  <!-- Information -->
                  <div class="rentals-item-owner__info">
                    <!-- Name -->
                    <div class="rentals-item-owner__name">John Doe</div>

                    <!-- Location -->
                    <div class="rentals-item-location">
                      <!-- Icon -->
                      <svg class="rentals-item-location__icon">
                        <use xlink:href="#icon-location"></use>
                      </svg>

                      <!-- City -->
                      <div class="rentals-item-location__city">Riyadh,SA</div>
                    </div>
                  </div>
                </div>

                <!-- Reviews -->
                <div class="rentals-item-reviews">
                  <!-- Container -->
                  <div class="rentals-item-reviews__container">
                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>
                  </div>

                  <!-- Number -->
                  <div class="rentals-item-reviews__number">35 reviews</div>
                </div>
              </div>
            </div>

            <!-- Right part -->
            <div class="rentals-item__right-part">
              <!-- Summary -->
              <ul class="rentals-item__summary">
                <li>Requested On: 26/08/18</li>
                <li>Rented On: $330/Day</li>
                <li>Item Total: $710</li>
              </ul>

              <!-- Actions -->
              <div class="rentals-item__actions">
                <!-- Contact button -->
                <button class="rentals-item__btn btn btn--lg btn--blue" type="button">Give Feedback</button>
              </div>
            </div>
          </div>

          <!-- Confirmation -->
          <div class="rentals-item-confirm">
            <!-- Header -->
            <header class="rentals-item-confirm__header">
              <!-- Title -->
              <h4 class="rentals-item-confirm__title">Please confirm the Gear has been returned</h4>

              <!-- Close button -->
              <button
                class="rentals-item-confirm__close-btn"
                type="button"
                aria-label="Close the confirmation"
              >
                <svg class="icon">
                  <use xlink:href="#icon-close-light"></use>
                </svg>
              </button>
            </header>

            <!-- Illustration -->
            <div class="rentals-item-confirm__illustration">
              <img src="img/pages/rentals/rentals-confirmation.svg" alt>
            </div>

            <!-- Actions -->
            <div class="rentals-item-confirm__actions">
              <!-- Complaint button -->
              <a class="rentals-item-confirm__btn btn btn--lg btn--ghost-blue" href="#">Complaint</a>

              <!-- Confirm button -->
              <a class="rentals-item-confirm__btn btn btn--lg btn--blue" href="#">Confirm</a>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="rentals-item">
          <!-- Container -->
          <div class="rentals-item__container">
            <!-- Thumbnail -->
            <div
              class="rentals-item__thumbnail"
              style="background-image:url('img/pages/rentals/thumbnail.png');"
            ></div>

            <!-- Middle part -->
            <div class="rentals-item__middle-part">
              <!-- Title -->
              <h3 class="rentals-item__title">Cannon C300 Mount Camera and Shoulder Rig</h3>

              <!-- Label -->
              <span class="rentals-item__label label label--blue">Feedback Required</span>

              <!-- Owner -->
              <div class="rentals-item-owner">
                <!-- Container -->
                <div class="rentals-item-owner__container">
                  <!-- Avatar -->
                  <div class="rentals-item-owner__avatar">
                    <img
                      src="img/pages/rentals/owner.png"
                      srcset="img/pages/rentals/owner@2x.png 2x"
                      alt="Name here"
                    >
                  </div>

                  <!-- Information -->
                  <div class="rentals-item-owner__info">
                    <!-- Name -->
                    <div class="rentals-item-owner__name">John Doe</div>

                    <!-- Location -->
                    <div class="rentals-item-location">
                      <!-- Icon -->
                      <svg class="rentals-item-location__icon">
                        <use xlink:href="#icon-location"></use>
                      </svg>

                      <!-- City -->
                      <div class="rentals-item-location__city">Riyadh,SA</div>
                    </div>
                  </div>
                </div>

                <!-- Reviews -->
                <div class="rentals-item-reviews">
                  <!-- Container -->
                  <div class="rentals-item-reviews__container">
                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>
                  </div>

                  <!-- Number -->
                  <div class="rentals-item-reviews__number">35 reviews</div>
                </div>
              </div>
            </div>

            <!-- Right part -->
            <div class="rentals-item__right-part">
              <!-- Summary -->
              <ul class="rentals-item__summary">
                <li>Requested On: 26/08/18</li>
                <li>Rented On: $330/Day</li>
                <li>Item Total: $710</li>
              </ul>

              <!-- Actions -->
              <div class="rentals-item__actions">
                <!-- Contact button -->
                <button class="rentals-item__btn btn btn--lg btn--blue" type="button">Give Feedback</button>
              </div>
            </div>
          </div>

          <!-- Rate -->
          <div class="rentals-item-rate">
            <!-- Header -->
            <header class="rentals-item-rate__header">
              <!-- Title -->
              <h4 class="rentals-item-rate__title">Leave Feedback</h4>

              <!-- Close button -->
              <button
                class="rentals-item-rate__close-btn close-btn"
                type="button"
                aria-label="Close the confirmation"
              >
                <svg class="icon">
                  <use xlink:href="#icon-close-light"></use>
                </svg>
              </button>
            </header>

            <!-- Form -->
            <form class="rentals-item-rate__form" action="leave_feedback" method="post">
              <input type="hidden" name="_token" :value="csrf">
              <!-- Rating -->
              <div class="rentals-item-rate__rating">
                <!-- Stars -->
                <div class="rentals-item-rate__stars">
                  <svg class="rentals-item-rate__star icon">
                    <use xlink:href="#icon-star"></use>
                  </svg>

                  <svg class="rentals-item-rate__star icon">
                    <use xlink:href="#icon-star"></use>
                  </svg>

                  <svg class="rentals-item-rate__star icon">
                    <use xlink:href="#icon-star"></use>
                  </svg>

                  <svg class="rentals-item-rate__star icon">
                    <use xlink:href="#icon-star"></use>
                  </svg>

                  <svg class="rentals-item-rate__star icon">
                    <use xlink:href="#icon-star"></use>
                  </svg>
                </div>

                <!-- Subtitle -->
                <div class="rentals-item-rate__subtitle">Marvellous!</div>
              </div>

              <!-- Message -->
              <textarea
                class="rentals-item-rate__textarea"
                name="feedback_text"
                placeholder="Write feedback"
              ></textarea>

              <!-- Submit button -->
              <button
                class="rentals-item-rate__submit-btn btn btn--lg btn--blue"
                type="submit"
              >Submit</button>
            </form>
          </div>
        </div>

        <!-- Item -->
        <div class="rentals-item">
          <!-- Container -->
          <div class="rentals-item__container">
            <!-- Thumbnail -->
            <div
              class="rentals-item__thumbnail"
              style="background-image:url('img/pages/rentals/thumbnail.png');"
            ></div>

            <!-- Middle part -->
            <div class="rentals-item__middle-part">
              <!-- Title -->
              <h3 class="rentals-item__title">Cannon C300 Mount Camera and Shoulder Rig</h3>

              <!-- Label -->
              <span class="rentals-item__label label label--blue">Feedback Given</span>

              <!-- Owner -->
              <div class="rentals-item-owner">
                <!-- Container -->
                <div class="rentals-item-owner__container">
                  <!-- Avatar -->
                  <div class="rentals-item-owner__avatar">
                    <img
                      src="img/pages/rentals/owner.png"
                      srcset="img/pages/rentals/owner@2x.png 2x"
                      alt="Name here"
                    >
                  </div>

                  <!-- Information -->
                  <div class="rentals-item-owner__info">
                    <!-- Name -->
                    <div class="rentals-item-owner__name">John Doe</div>

                    <!-- Location -->
                    <div class="rentals-item-location">
                      <!-- Icon -->
                      <svg class="rentals-item-location__icon">
                        <use xlink:href="#icon-location"></use>
                      </svg>

                      <!-- City -->
                      <div class="rentals-item-location__city">Riyadh,SA</div>
                    </div>
                  </div>
                </div>

                <!-- Reviews -->
                <div class="rentals-item-reviews">
                  <!-- Container -->
                  <div class="rentals-item-reviews__container">
                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>

                    <svg class="rentals-item-reviews__star">
                      <use xlink:href="#icon-star"></use>
                    </svg>
                  </div>

                  <!-- Number -->
                  <div class="rentals-item-reviews__number">35 reviews</div>
                </div>
              </div>
            </div>

            <!-- Right part -->
            <div class="rentals-item__right-part">
              <!-- Summary -->
              <ul class="rentals-item__summary">
                <li>Requested On: 26/08/18</li>
                <li>Rented On: $330/Day</li>
                <li>Item Total: $710</li>
              </ul>

              <!-- Actions -->
              <div class="rentals-item__actions">
                <!-- Contact button -->
                <button
                  class="rentals-item__btn rentals-item__btn--expand btn btn--lg btn--ghost-blue js-open"
                  type="button"
                >
                  <span>See Feedback</span>
                  <svg class="icon">
                    <use xlink:href="#icon-expand"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <!-- Feedback -->
          <div class="rentals-item-feedback">
            <!-- User -->
            <section class="rentals-item-feedback__section">
              <!-- Header -->
              <header class="rentals-item-feedback__header">
                <!-- Title -->
                <h4 class="rentals-item-feedback__title">Your Feedback:</h4>
              </header>

              <!-- Container -->
              <div class="rentals-item-feedback__container">
                <!-- Top part -->
                <div class="rentals-item-feedback__top-part">
                  <!-- Avatar -->
                  <div class="rentals-item-feedback__avatar">
                    <img
                      src="img/pages/rentals/user.png"
                      srcset="img/pages/rentals/user@2x.png 2x"
                      alt="Name here"
                    >
                  </div>

                  <!-- Information -->
                  <div class="rentals-item-feedback__info">
                    <!-- Name -->
                    <div class="rentals-item-feedback__name">Muhammad Khalid</div>

                    <!-- Container -->
                    <div class="rentals-item-feedback__rating">
                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>

                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>

                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>

                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>

                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>
                    </div>
                  </div>
                </div>

                <!-- Text -->
                <div class="rentals-item-feedback__text">
                  <p>
                    Sum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                  </p>
                </div>
              </div>
            </section>

            <!-- Owner -->
            <section class="rentals-item-feedback__section">
              <!-- Header -->
              <header class="rentals-item-feedback__header">
                <!-- Title -->
                <h4 class="rentals-item-feedback__title">Owner's Feedback:</h4>
              </header>

              <!-- Container -->
              <div class="rentals-item-feedback__container">
                <!-- Top part -->
                <div class="rentals-item-feedback__top-part">
                  <!-- Avatar -->
                  <div class="rentals-item-feedback__avatar">
                    <img
                      src="img/pages/rentals/owner.png"
                      srcset="img/pages/rentals/owner@2x.png 2x"
                      alt="Name here"
                    >
                  </div>

                  <!-- Information -->
                  <div class="rentals-item-feedback__info">
                    <!-- Name -->
                    <div class="rentals-item-feedback__name">John Doe</div>

                    <!-- Container -->
                    <div class="rentals-item-feedback__rating">
                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>

                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>

                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>

                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>

                      <svg class="rentals-item-feedback__star">
                        <use xlink:href="#icon-star"></use>
                      </svg>
                    </div>
                  </div>
                </div>

                <!-- Text -->
                <div class="rentals-item-feedback__text">
                  <p>
                    Sum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                  </p>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="rentals-section__footer">
        <!-- Pagination -->
        <div class="showing">
          <!-- Title -->
          <div class="showing__title">Showing 1 of 2 Completed Rentals</div>

          <!-- Button -->
          <button class="showing__btn btn btn--sm btn--ghost-blue">Show all</button>
        </div>
      </footer>
    </section>
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
    console.log("RentalsList mounted.");
  }
};
</script>
