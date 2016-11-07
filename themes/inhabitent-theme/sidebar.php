<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!--<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
<section class ="side-bar">
<div class= "contact-info">
    <h3>Contact Info</h3>
    <p><a href="tel:778-456-7891">
	<i class="fa fa-phone" aria-hidden="true"></i> 778-456-7891</a></p>
    <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="info@inhabitent.com"> info@inhabitent.com</a></p>
    <p><i class="fa fa-map-marker" aria-hidden="true"></i> 1490 W Broadway <br>Vancouver, BC V6H 1H5</p>
</div>
<div class = "business-hours">
	<h3>Business Hours</h4>
	<p>Monday-Friday: 9am - 5pm</p>
	<p>Saturday: 10am - 2pm</p>
	<p>Sunday: Closed</p>
</div>
<div class = "archives">
	<h3>Archives</h3>
	<p><a href="">April 2016</a></p>
	<p><a href="">March 2016</a></p>
</div>
</section>