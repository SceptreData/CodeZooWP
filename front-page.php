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
          <h4 class="category">CSS</h4>
          <h3><a href="#">Math</a></h3>
          <p>by <span class="article-card-author">David Bergeron</span></p>
        </header>
        <p class="article-card-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <hr class="article-card-separator"></hr>
        <footer>
          <div class="social-buttons">
            <button>Like</button>
            <button>Share</button>
          </div>
          <button>Favorite</button>
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
          <img src="https://picsum.photos/300/200">
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