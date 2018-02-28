<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>

<body>
<header>
	The Header Template File
<?php
 wp_nav_menu(
  array(
    'theme_location' => 'header-menu',
    'container_class' => 'my_header_menu_class',
	'container'	=> 'nav',
  )
);
 ?>
</header>