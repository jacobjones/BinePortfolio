<?php
/*
 * FILM ARCHIVE TEMPLATE
 *
 * This is the film archive template.
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div class="archive-collection">

			<ul>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<li class="archive-item">

						<a href="<?php the_permalink() ?>">

								<div class="image-wrapper">
									<?php if ( has_post_thumbnail() ) {
										echo "<div class=\"image\" ";
										$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'bones-thumb-660' );
										$url = $thumb['0'];
										echo "style=\"background-image: url('" . $url . "')\">";
										echo "</div>";
									} 
									?>
								</div>
							

							<h2><?php the_title(); ?></h2>

						</a>

					</li>

				<?php endwhile; else : ?>

					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

				<?php endif; ?>

			</ul>

		</div>

	</div>

<?php get_footer(); ?>
