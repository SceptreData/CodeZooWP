<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CodeZoo
 */

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
        <div class="article-content">
 <?php if (have_posts()):
            while (have_posts()):
                the_post();
            ?>
                <article>
                    <header>
                        <?php the_title('<h2>', '</h2>'); ?>
                        <?php the_post_thumbnail(); ?>
                        <?php the_shortlink("Link")
                    </header>
                </article>
                <?php
            endwhile; // end while
        endif; // end if
    
?>
</div>
  </main>
</article>
<?php get_footer(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">
  
      
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();


// template tags togs
// the_permalink();
// the_date();
// the_content();