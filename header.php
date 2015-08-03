<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />

<?php wp_head(); ?>
</head>

<body>
<script>rb.init( { debug: true } );</script>
<div id="main-wrapper">
