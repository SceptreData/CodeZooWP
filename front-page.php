<?php
/*
 * Template file for the Front-Page
 */

get_header();
?>
<div class="hero">
  <h1>CodeZoo</h1>
  <p>Get ready for a learning adventure!</p>
  <a href="#" class="btn btn-call-to-action">Browse Courses </a>
</div>
<main>
  <section class="fp-content">
    <header>
      <span>Check out our</span>
      <h2>Popular Articles</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="fp-articles">

      <div class="article-card">
        <header class="article-card-header">
          <img src="https://picsum.photos/id/42/300/200">
          <div class="article-card-color-bar"></div>
          <h4 class="category">CSS</h4>
          <h3><a href="#">Math</a></h3>
          <p><span class="article-card-author">David Bergeron</span></p>
        </header>
        <p class="article-card-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <hr class="article-card-separator">
        </hr>
        <footer>
          <div class="social-buttons">
            <button class="like-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
              </svg>
              <span>32</span>

            </button>
            <button class="share-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-square" class="svg-inline--fa fa-share-square fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"></path>
              </svg>
              <span>15</span>
            </button>
          </div>
          <button class="favorite-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg>
            <span>9</span>
          </button>
        </footer>
      </div>

    </div>
  </section>

  <section class="fp-content">
    <header>
      <span>Venture down to our</span>
      <h2>Video Courses</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="fp-videos">
      <div class="article-card">
        <header class="article-card-header">
          <div>
            <img src="https://picsum.photos/300/200">
          </div>
          <h3><a href="#">Math</a></h3>
          <p>by <span class="article-card-author">David Bergeron</span></p>
          <span class="article-card-price">$99</span>
        </header>
        <div>
          <div class="rating"></div>
          <p class="article-card-excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A mollitia debitis harum. Nostrum dolores, obcaecati, cumque dicta corporis...</p>
        </div>
        <div class="article-card-separator"></div>
        <footer>
          <div class="course-duration"></div>
          <div class="course-skills"></div>
          <div class="course-difficulty"></div>
        </footer>
      </div>
    </div>
  </section>

  <section class="fp-content">
    <header>
      <span>Don't go into the field without</span>
      <h2>Developer Tooling</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="fp-tooling">
      <!-- Insert Articles Here -->
    </div>
  </section>

  <section class="fp-content">
    <header>
      <span>Get to know</span>
      <h2>The Team</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="fp-team">
      <!-- Insert Articles Here -->
    </div>
  </section>

</main>
<?php get_footer(); ?>