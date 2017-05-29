<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta property="fb:admins" content="100001208172466"/>
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>
		<?php if (is_home() || is_front_page()) { echo bloginfo( 'name'); } else { echo wp_title( ''); } ?>
	</title>

	<!-- Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="user-scalable=yes,initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="description" content="<?php if((is_home()) || (is_front_page())) {
echo bloginfo('name'); bloginfo('description');
} elseif(is_category()) {
echo category_description();
} elseif(is_tag()) {
echo 'Tag archive page for this blog - ' . single_tag_title();
} elseif(is_month()) {
echo 'Archive page for this blog - ' . the_time('F, Y');
} else {
echo get_post_meta($post->ID, 'metadescription', true);
} ?>" />
	<meta name="keywords" content="<?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo $tag->name . ', '; 
  }
}
?>magazine, revista, nudista, nudismo, naturista, naturismo, nude, bare, nudist, nudism, desnuda">
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<style type="text/css">body {visibility: hidden}</style>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>

<body>
	<?php include (TEMPLATEPATH . '/inc/menu.php' ); ?>
	<?php include (TEMPLATEPATH . '/inc/navigation.php' ); ?>
	<main role="main">
