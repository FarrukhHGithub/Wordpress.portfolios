<?php
/**
 * Main template file (required by every WordPress theme).
 * Shows the same one-page portfolio as front-page.php so the
 * site works correctly whether or not a static front page is set.
 */
get_header();
get_template_part( 'template-parts/content', 'portfolio' );
get_footer();
