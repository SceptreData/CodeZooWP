<?php
/*
 * Template Name: Articles
 * Template Post Type: articles
 */
get_header();
$header = get_field('article_header');
$body = get_field('article_body');
?>


<div class="single-article-hero">
  <img src="<?php echo $header['header_image']; ?>">
  <div>
    <h1><?php echo $header['title'] ?></h1>
    <p><?php echo $header['tagline'] ?></p>
  </div>
</div>

<main>
  <?php
  if (have_rows('article_body')) :
    while (have_rows('article_body')) : the_row();
      ?>

      <div class="article-content">
       <?php if (get_sub_field('content_heading')): ?>
        <h2><?php the_sub_field('content_heading') ?></h2>
        <?php endif; ?>
        <p><?php the_sub_field('content'); ?></p>
      </div>
      <?php if (get_sub_field("image") != "") { ?>
        <img src="<?php the_sub_field('image'); ?>" alt="Image of a cat">
      <?php } else {
            echo "";
          } ?>

    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>