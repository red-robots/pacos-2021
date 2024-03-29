<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */

get_header(); 



?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="paper">
				<div class="wrapper">
				<?php
				while ( have_posts() ) : the_post();

					the_content();

				endwhile; // End of the loop.
				?>
				</div>
			</section>
			<?php //if( is_page( 'menus' ) ) { get_template_part('parts/menu'); } ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
