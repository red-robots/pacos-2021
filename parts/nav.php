<div class="burger">
	<span></span>
</div>


<?php wp_nav_menu( array( 
	'theme_location' => 'primary', 
	'container' => 'nav',
	'container_class' => 'mobilemenu',
	'menu_class' => 'main'
) ); ?>


<nav id="site-navigation" class="main-navigation" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->