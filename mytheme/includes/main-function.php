<?php 
/*
@package mytheme 
===========================
		ADMIN PAGE 
=============================
*/

function mytheme_add_admin_page() {
	add_menu_page('mytheme theme option', 'mytheme', 'manage_option', 'aqil-mytheme', 'mytheme_theme_creat_page', 'dashicons-admin-page', 110);
}
add_action( 'admin_menu', 'mytheme_add_admin_page');

 
function mytheme_theme_creat_page() {
	echo "<h1>mytheme option</h1>";
}
