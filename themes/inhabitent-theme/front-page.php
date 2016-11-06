<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <div class="home-hero-image"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<h2 class = "latest-adventures">Latest Adventures</h2>
<section class="adventure-section">
  <div class="big"> </div>
  <div class="rest">
    <div class="medium">
      <div class="blue"></div>
    </div>
    <div class="small">
      <div class="green"></div>
      <div class="yellow"></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>