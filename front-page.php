<?php get_header(); 
$post = get_post(2); 
setup_postdata( $post );

	$desc = get_field('description');

wp_reset_postdata();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post();

			//get_template_part( 'parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		<section class="welcome">
			<img class="nomobile" src="<?php bloginfo('template_url'); ?>/assets/img/background-2.png">
			<div class="contents">
				<div class="wrap">
					<div class="title"><img src="<?php bloginfo('template_url'); ?>/assets/img/big-texas-flavor.png"></div>
					<div class="zigzag">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/zigzag.png">
					</div>
					<?php if( $desc ) { ?>
						<div class="copy">
							<?php echo $desc; ?>
						</div>
					<?php } ?>
					<div class="pepper">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/pepper.png">
					</div>
				</div>	
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
