<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div class="home-hero-image"></div>
<section class = "product-feed-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


			  <?php endwhile; // End of the loop. ?>

          <?php
                $terms = get_terms('product_type');
                foreach ($terms as $term) :
          ?>
            
           <?php $url = get_term_link($term->slug, 'product_type'); ?>
              <div class = "individual-sections">
              <img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug?>.svg">
              <p><?php echo $term->description ?></p>
              <p><a href="<?php echo $url ?>"><?php echo $term->name ?></a></p>
              </div>
            <?php endforeach;?>
   


		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<section class = "inhabitent-journal">
  <?php
   $args = array( 
    'post_type' => 'post', 
    'posts_per_page' => 3, 
    'order' => 'DESC');
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
     <?php the_post_thumbnail(['400px,400px']); ?>
     <?php  the_date();?>
     <?php comments_number();?>
     <?php the_title();?>
<?php endforeach; wp_reset_postdata(); ?>
</section>
<section class="adventures-container">
	<h2 class = "latest-adventures">Latest Adventures</h2>
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