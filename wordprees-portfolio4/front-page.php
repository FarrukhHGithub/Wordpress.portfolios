<?php
/**
 * Front page template.
 * Used automatically when Settings > Reading > "Your homepage displays"
 * is set to "A static page".
 */
get_header();
get_template_part( 'template-parts/content', 'portfolio' );
get_footer();
