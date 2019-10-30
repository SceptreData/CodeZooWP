<?php
get_header();
$header = get_field('article_header')
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
  if (have_rows('paragraphs')) :
    while (have_rows('paragraphs')) : the_row();
      ?>

      <div class="article-text">
        <p><?php the_sub_field('text'); ?></p>
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