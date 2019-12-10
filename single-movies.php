<?php
/*
 * Template Name: Articles
 * Template Post Type: articles
 */
get_header();
$header = get_field('header');
$body = get_field('body');
?>

<style>

</style>

<article class="single-movie">
  <div class="single-movie-hero">
    <div class="movie-hero-content">
      <h2> Video Training <br> Anywhere, anytime. </h2>
      <a href="#" class="hero-btn">Sign up for a Free Trial </a>
    </div>
  </div>

  <main>
    <h1> <?= $header['title'] ?> </h1>
    <div class="movie-info">

      <div class="movie-header">
        <img src="<?= $header['image'] ?>" alt="Movie Image">
      </div>

      <div class="pricing">
          <div class="price">CA$<?= $header['price'] ;?></div>
          <a class="btn-movie-action" href="#">Add to Cart</a>
          <a class="btn-movie-action-alt" href="#">Buy Now</a>
          <small> 30-Day Money-Back Guarantee </small>
          <a class="link-coupon" href="#">Apply Coupon</a>
      </div>
</div>
  <div class="movie-content">
      <div class="requirements">
          <h3>Course Requirements</h3>
          <p><?= $body['requirements'] ?> </p>
        </div>
      <div class="contents">
        <h3>What you will Learn</h3>
        <p> <?= $body['contents'] ?> </p>
      </div>
      <div class="audience">
        <h3>Who is this course for </h3>
        <p> <?= $body['target_audience'] ?></p>
      </div>
    </div>
</div>
    
    </div>

    <section>
    </section>

 
  </main>
</article>
<?php get_footer(); ?>