<?php
/**
 * The header for the Android Dev Portfolio theme.
 */
?>
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
  <nav class="wrap">
    <div class="brand"><?php bloginfo( 'name' ); ?> <span class="mono">/android</span></div>
    <div class="navlinks">
      <?php
      if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'items_wrap'     => '%3$s',
          'depth'          => 1,
        ) );
      } else {
        // Fallback links if no menu is set under Appearance > Menus.
        echo '<a href="#work">Work</a><a href="#about">About</a><a href="#experience">Experience</a><a href="#contact">Contact</a>';
      }
      ?>
    </div>
    <a class="navcta" href="#contact">Start a project</a>
  </nav>
</header>
