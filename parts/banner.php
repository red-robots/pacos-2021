<?php 
	// $img = get_field('banner');
	//$src = get_bloginfo('template_url').'/assets/img/';
	// echo '<pre>';
	// print_r($img);
	// echo '</pre>';
	$img = get_the_post_thumbnail_url();
	// echo '<pre>';
	// print_r($img);
	// echo '</pre>';
	// $src = $img['url'];
	$src =  $img;
	$alt = $img['alt'];
	if( is_front_page() ) {
		$class = 'homepage';
		echo 'hony';

		// $img = $src . 'banner-home.png';
		$title = get_bloginfo('description');
		$post = get_post(2); 
		setup_postdata( $post );
			$src = get_field('banner');
			$src = $src['url'];
			$alt = $src['alt'];
			// echo '<pre>';
			// print_r($src);
			// echo '</pre>';
		wp_reset_postdata();

	} elseif( is_page( 'menus' ) ) {
		$class = 'menus';
		// $img = $src . 'banner-menus.png';
		$title = get_the_title();
	} elseif( is_page( 'private-dining' ) ) {
		$class = 'private-dining';
		// $img = $src . 'banner-menus.png';
		$title = get_the_title();
	} else {
		$class = 'menus';
		$title = get_the_title();
		// $img = $src . 'banner-menus.png';
	}
 ?>
 <section class="banner">
 	<img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
	<div class="title <?php echo $class; ?>">
		<h1><?php echo $title; ?></h1>
	</div>
<!-- 	<?php if( is_front_page() ) { ?>
		<img class="plate-intro" src="<?php bloginfo('template_url'); ?>/assets/img/plate-intro.png">
	<?php } ?> -->
</section>