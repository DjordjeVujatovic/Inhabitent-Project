<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <div class="home-hero-image"></div>
  <section class = "product-feed-container">
    <h2 class = "front-page-heading">shop stuff</h2>
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
<section class = "inhabitent-journal-title">
  <h2 class = "front-page-heading">Inhabitent Journal</h2>
</section>
<div class = "inhabitent-journal">
  <?php
  $args = array( 
    'post_type' => 'post', 
    'posts_per_page' => 3, 
    'order' => 'DESC');
   $journal_posts = get_posts( $args ); // returns an array of posts
   ?>
   <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
    <div class ="individual-journal-post">
     <?php the_post_thumbnail(); ?>
     <div class = "journal-post-container">
       <div class ="date-comment">
         <?php the_date();?>
         <?php comments_number();?>
       </div>
       <h3><?php the_title();?></h3>
       <a class ="read" href="<?php the_permalink();?>">Read Entry</a>
     </div>
   </div>
 <?php endforeach; wp_reset_postdata(); ?>
</div>
<section class="adventures-container">
 <h2 class = "front-page-heading">Latest Adventures</h2>
 <div class="adventure-section">
  <div class="left-box">
   <div class ="story-info">
  	<h3 class = "entry-title-left"><a href= "">Getting Back to Nature in a Canoe</a></h3>
  	<a class = "read-more-article" href = "">Read More</a>
   </div>
  </div>
  <div class="right-mix">
    <div class="top-right">
      <div class="right-box-top">
      <div class= "story-info">
      <h3 class = "entry-title-top-right"><a href= "">A Night with Friends at the Beach</a></h3>
        <a class = "read-more-article" href = "">Read More</a>
       </div>
      </div>
    </div>
    <div class="right-box-bottom">
      <div class="bottom-right">
      <div class ="story-info">
      	<h3 class = "entry-title-bottom-left"><a href= "">Taking in the View at Big Mountain</a></h3>
      	<a class = "read-more-article" href = "">Read More</a>
      </div>
      </div>
      <div class="bottom-left">
      <div class ="story-info">
      	<h3 class = "entry-title-bottom-right"><a href= "">Star-Gazing at the Night Sky</a></h3>
      	<a class = "read-more-article" href = "">Read More</a>
      </div>
      </div>
    </div>
  </div>
  <p class = "adventures-button">
      <a class = "more-adventures" href ="https://www.youtube.com/watch?v=dQw4w9WgXcQ">More Adventures</a>
  </p>
</div>
</section>

<?php get_footer(); ?>