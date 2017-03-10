<?php 
/* Template Name: About Page 
*/
?>

<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
?>
<?php get_header(); ?>
<div id="primary-about" class="content-area-about">
 <main id="main" class="site-main" role="main">
  <section class="about-hero">
	<h2><?php single_post_title() ?></h2>
	 </section>
	  <div class = "about-container">
		<div class = "about-section">
		  <?php echo CFS()->get( 'our_story' ); ?>
		  <?php echo CFS()->get( 'our_team' ); ?>
 		</div>
	  </div>
  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>