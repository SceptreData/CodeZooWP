<?php
/*
 * Template Name: Articles
 * Template Post Type: articles
 */
get_header();
$header = get_field('article_header');
$author = get_the_author_meta('display_name', $user_id);
?>
<article class="single-category">
  <div class="single-category-hero">
    <div class="category-hero-content">
      <h2> We teach <br> You should listen. Or else. </h2>
      <a href="#" class="hero-btn">Sign up for a Free Trial </a>
    </div>
  </div>

  <main>

  <header>
      <span>Check out these</span>
      <h2>Courses and Articles</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="movie-cards">
 <?php if (have_posts()):
            while (have_posts()):
                the_post();
                $header = get_field("header");
                $body = get_field("body");
            ?>
                <article class="category-card" style="margin-right: 1rem;">
                    <header>
                        <a href="<?php the_permalink(); ?>" class="category-link">
                        <img src="<?= $header['image'] ;?>">
                        <div class="card-color-bar blue-bg"></div>
                        <?php the_title('<h2>', '</h2>'); ?>
                        </a>
                    </header>
                    <div class="movie-excerpt"><?= $header['tagline'] ?></div>
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



