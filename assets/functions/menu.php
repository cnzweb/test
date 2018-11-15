<?php
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Navigation Menus
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
register_nav_menus(
	array(
		'main-nav' => __('Main Menu', 'expedite' ),
		'footer-nav1' => __('Footer Menu 1', 'expedite' ),
        'footer-nav2' => __('Footer Menu 2', 'expedite' )
	)
);
// Main Menu
/* <?php echo expedite_top_nav();?> */
function expedite_top_nav() {
    wp_nav_menu(array(
   'container' => false,
   'menu_class' => 'main-menu',
   'theme_location' => 'main-nav',
   'depth' => 5,
   'link_before' => '<span>',
   'link_after' => '</span>'
   ));
}
// Footer Menu
/* <?php echo expedite_footer_nav();?> */
function expedite_footer_nav1() {
    wp_nav_menu(array(
   'container' => false,
   'menu_class' => 'footer-menu',
   'theme_location' => 'footer-nav1',
   'depth' => 5,
   'link_before' => '<span>',
   'link_after' => '</span>'
   ));
}
function expedite_footer_nav2() {
   wp_nav_menu(array(
   'container' => false,
   'menu_class' => 'footer-menu',
   'theme_location' => 'footer-nav2',
   'depth' => 5,
   'link_before' => '<span>',
   'link_after' => '</span>'
   ));
}
?>