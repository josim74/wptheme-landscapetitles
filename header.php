<!DOCTYPE html>
<html lang="Eng">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container">
	<div id="header">
		<h1><span class="off"><?php bloginfo('name');?></span><?php bloginfo('description'); ?></h1>
        <div id="links">
            <?php wp_nav_menu(array(
                'theme_location'=>'main-menu'
            )); ?>
        </div>
    </div>

