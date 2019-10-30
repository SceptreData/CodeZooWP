<?php
/*
 * Template file for the Front-Page
 */

get_header();
?>
<div class="hero">
  <h1>CodeZoo</h1>
  <p>Let's make learning an adventure?</p>
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
      <!-- Insert Articles Here -->
    </div>
  </section>

  <section class="fp-content">
    <header>
      <span>Venture down to our</span>
      <h2>Video Courses</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="fp-videos">
      <!-- Insert Articles Here -->
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