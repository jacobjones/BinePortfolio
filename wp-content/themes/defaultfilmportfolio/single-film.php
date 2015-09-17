<?php
/*
 * FILM TEMPLATE
 *
 * This is the film template.
 *
*/
?>

<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

			<nav class="film-navigation">

				<div class="next">
					<?php previous_post_link( '%link', '%title →'); ?>
				</div>
				<div class="previous">
					<?php next_post_link( '%link', '← %title'); ?>
				</div>
			</nav>

			<div class="film-wrapper">

				<div class="film">

					<?php
						$vimeoid = get_field('vimeo_id');

						if(!empty($vimeoid)){
							echo '<iframe src="https://player.vimeo.com/video/' . $vimeoid .'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
						}
					?>

				</div>

			</div>

			<header class="article-header">

				<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

			</header>


			<section class="text-wrapper">

				<?php
					// the content (pretty self explanatory huh)
					the_content();
				?>

			</section>

		</article>

		<?php endwhile; ?>

		<?php else : ?>

				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
						<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
