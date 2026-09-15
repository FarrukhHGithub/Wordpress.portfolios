<?php
/**
 * Template for any standard Page.
 * Shows the same one-page portfolio layout — handy if you want
 * to keep the default front page and use this on a "Portfolio" page instead.
 */
get_header();
get_template_part( 'template-parts/content', 'portfolio' );
get_footer();
