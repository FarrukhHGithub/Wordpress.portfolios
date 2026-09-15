<?php
/**
 * Fallback template.
 *
 * The one-page portfolio itself lives in front-page.php and is used
 * automatically for the site's homepage. This file only renders for
 * views WordPress can't match to a more specific template (e.g. an
 * archive or search results page), so it's kept minimal.
 */

get_header();
?>

<main class="wrap section">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p>Nothing found.</p>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
