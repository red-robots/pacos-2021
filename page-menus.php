<?php
/**
 * Template Name: Menus
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */

get_header(); 



?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>
			<?php if( is_page( 'menus' ) ) { get_template_part('parts/menu'); } ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
