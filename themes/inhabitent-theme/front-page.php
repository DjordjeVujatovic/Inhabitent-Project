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
<section class="adventures-container">
	<h2 class = "latest-adventures">Latest Adventures</h2>s
<div class="adventure-section">
  <div class="left-box">
  	<!--<h3 class = "entry-title"><a href= "">Getting Back to Nature in a Canoe</a></h3>
  	<a class = "read-more-button" href = "">Read More</a>-->
  </div>
  <div class="right-mix">
    <div class="top-right">
      <div class="right-box-top">
      </div>
    </div>
    <div class="right-box-bottom">
      <div class="bottom-right">
      	<!--<h3 class = "entry-title"><a href= "">Taking in the View at Big Mountain</a></h3>
      	<a class = "read-more-button" href = "">Read More</a>-->
      </div>
      <div class="bottom-left">
      	<!--<h3 class = "entry-title"><a href= "">Star-Gazing at the Night Sky</a></h3>
      	<a class = "read-more-button" href = "">Read More</a>-->
      </div>
   </div>
  </div>
 </div>
</section>

<?php get_footer(); ?>