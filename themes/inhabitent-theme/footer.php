<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				 <div class= "company-info">
				   <div class= "contact-info">
					<h4>Contact Info</h4>
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<a href = "main to: djordje_v@hotmail.com">djordje_v@hotmail.com</a>					
					<p>778-688-7121</p>
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
					<i class="fa fa-google-plus-square" aria-hidden="true"></i>
				   </div>
				   <div class= "business-hours">
					<h4>Business Hours</h4>
					<p>Monday-Friday: 9am - 5pm</p>
					<p>Saturday: 10am - 2pm</p>
					<p>Sunday: Closed</p>
				   </div>
				   <div class = "footer-logo">
				    <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg">  
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
