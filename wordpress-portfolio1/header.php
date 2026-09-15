<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<nav class="wrap navbar">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">amir<span>.dev</span></a>
		<div class="navlinks">
			<a href="#about">About</a>
			<a href="#stack">Stack</a>
			<a href="#work">Work</a>
			<a href="#contact">Contact</a>
		</div>
		<a href="#contact" class="btn btn-ghost btn-small">Get in touch</a>
	</nav>
</header>
