<?php 
	$src = get_bloginfo('template_url').'/assets/img/';
	if( is_front_page() ) {
		$class = 'homepage';
		$img = $src . 'banner-home.png';
		$title = get_bloginfo('description');
	} elseif( is_page( 'menus' ) ) {
		$class = 'menus';
		$img = $src . 'banner-menus.png';
		$title = get_the_title();
	} elseif( is_page( 'private-dining' ) ) {
		$class = 'private-dining';
		$img = $src . 'banner-menus.png';
		$title = get_the_title();
	} else {
		$title = get_the_title();
	}
 ?>
 <section class="banner">
 	<img src="<?php echo $img; ?>">
	<div class="title <?php echo $class; ?>">
		<h1><?php echo $title; ?></h1>
	</div>
	<?php if( is_front_page() ) { ?>
		<img class="plate-intro" src="<?php bloginfo('template_url'); ?>/assets/img/plate-intro.png">
	<?php } ?>
</section>