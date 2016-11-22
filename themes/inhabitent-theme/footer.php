<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->
<!--Site Footer-->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class= "company-info">
		<div class= "contact-info">
			<h4>Contact Info</h4>
			<i class="fa fa-envelope" aria-hidden="true"></i>
			<a href = ""> hello_there@hotmail.com</a>
			<br>
			<br>
			<a href = ""><i class="fa fa-phone" aria-hidden="true"></i> 778-123-4567</a>
		<div class = "social-media-icons">
			<i class="fa fa-facebook-square" aria-hidden="true"></i>
			<i class="fa fa-twitter-square" aria-hidden="true"></i>
			<i class="fa fa-google-plus-square" aria-hidden="true"></i>
		</div>
		</div>
		<div class= "business-hours">
			<h4>Business Hours</h4>
			<p class = "day-of-week">Monday-Friday: <span class = "hours">9am - 5pm</span></p>
			<p class = "day-of-week">Saturday: <span class = "hours">10am - 2pm</span></p>
			<p class = "day-of-week">Sunday: <span class = "hours">Closed</span></p>
		</div>
		<div class = "footer-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg" alt = "Inhabitent Logo - Tent">  
		</div>
		<div class= "copyright-tag">
			<p>Copyright © 2016 Inhabitent</p>
		</div>
	</div>

	<div class="site-info">
		<!--<a href="<?php //echo esc_url( 'https://wordpress.org/' ); ?>"><?php //printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>-->

	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
