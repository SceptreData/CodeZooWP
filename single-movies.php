<?php
/*
 * Template Name: Articles
 * Template Post Type: articles
 */
get_header();
$header = get_field('movie_header');
$author = get_the_author_meta('display_name', $user_id);
?>

<article class="single-movie">
  <div class="single-movie-hero fit-content">
    <img src="<?= $header['header_image']; ?>">
    <div>
      <h1><?= $header['title'] ?></h1>
      <p><?= $header['tagline'] ?></p>
      <a href="#" class="btn btn-action">Sign up for a Free Trial </a>
    </div>
  </div>

  <main>
    <div class="movie-info">
      <h1> <?= $header['title'] ?> </h1>
      <div>
        <img src="<?= $header['image'] ?>" alt="Movie Image">
        <div class="pricing">
          <div class="price"></div>
          <a href="btn btn-movie-action">Add to Cart</a>
          <a href="btn btn-movie-action-alt">Buy Now</a>
          <small> 30-Day Money-Back Guarantee </small>
          <a href="#">Apply Coupon</a>
        </div>
        <div class="requirements">
          <h3>Course Requirements</h3>
          <p><?= $header['requirements'] ?> </p>
        </div>
    </div>
    
    </div>
    <?php
    if (have_rows('movie_body')) :
      while (have_rows('movie_body')) : the_row();
        ?>

        <div class="movie-content">
          <?php if (get_sub_field('heading')) : ?>
            <h2><?php the_sub_field('heading') ?></h2>
          <?php endif; ?>
          <p><?php the_sub_field('content'); ?></p>
        </div>
       

      <?php endwhile; ?>
    <?php endif; ?>
  </main>
</article>
<?php get_footer(); ?>