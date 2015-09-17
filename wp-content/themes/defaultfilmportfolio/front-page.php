<?php
/*
 Template Name: Front Page
 *
 * Basic front page with a Vimeo video and optional text
*/
?>

<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

		<div class="text-wrapper">

			<?php
				// the content (pretty self explanatory huh)
				the_content();
			?>

		</div>

		<?php endwhile; else : ?>

				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
