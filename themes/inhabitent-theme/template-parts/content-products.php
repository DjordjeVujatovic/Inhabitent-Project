<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href = '<?php the_permalink();?>'><?php the_post_thumbnail( 'large' ); ?></a>
		<?php endif; ?>
	<div class = "product-title-price">
		<?php the_title( sprintf( '<p class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?> 
		<p><?php echo CFS()->get( 'product_price' ); ?></p>
	</div>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->