<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
            padding-bottom: 30px;
            background-size: 300px !important; width: 300px !important;background-position: bottom !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/* Custom About Page background image
*/

function my_styles_method() {

                if(!is_page_template( 'about.php' )){
                    return;
                }

       $url = CFS()->get( 'background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
               .about-hero{
                       background: linear-gradient( to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.2) 100% ), url({$url}) no-repeat center bottom;
                       height:100vh;
                       background-size: cover, cover;
               }";
       wp_add_inline_style( 'red-starter-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );

