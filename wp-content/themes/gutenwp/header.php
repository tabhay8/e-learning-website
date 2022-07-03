<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<?php get_template_part( 'lib/header', 'none' ); ?>