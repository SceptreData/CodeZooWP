<?php
/*
 * Template Name: Articles
 * Template Post Type: articles
 */
get_header();
$header = get_field('article_header');
$author = get_the_author_meta('display_name', $user_id);
?>

<article class="single-article">
  <div class="single-article-hero fit-content">
    <img src="<?php echo $header['header_image']; ?>">
    <div>
      <h1><?= $header['title'] ?></h1>
      <p><?= $header['tagline'] ?></p>
    </div>
  </div>

  <main>
    <?php
    if (have_rows('article_body')) :
      while (have_rows('article_body')) : the_row();
        ?>

        <div class="article-content">
          <?php if (get_sub_field('content_heading')) : ?>
            <h2><?php the_sub_field('content_heading') ?></h2>
          <?php endif; ?>
          <p><?php the_sub_field('content'); ?></p>
        <?php if (get_sub_field("image") != "") { ?>
          <img class="article-content-img" src="<?php the_sub_field('image'); ?>" alt="Image of a cat">
        <?php } else {
              echo "";
            } ?> 
          </div>
       

      <?php endwhile; ?>
    <?php endif; ?>
  </main>
</article>
<?php get_footer(); ?>