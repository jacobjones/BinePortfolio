<?php
/*
 Template Name: Contact Page
 *
 * Contact page template
*/
?>

<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php if (has_post_thumbnail()): ?>

			<div class="resize-wrapper">

				<?php
					$editmode = get_field('edit_mode');

					$editclass = ($editmode ? ' editmode' : '');

					echo '<div class="portrait-wrapper' . $editclass . '">';
				?>

				<?php

					$leftvisible = get_field('left_eye_visible');

					if ($leftvisible)
					{
						$lefteyewidth = get_field('left_eye_width');
						$leftpupilwidth = get_field('left_pupil_width');
						$leftpupilleft = ($lefteyewidth-$leftpupilwidth)/2;

						$lefteyeheight = get_field('left_eye_height');
						$leftpupilheight = get_field('left_pupil_height');
						$leftpupiltop = ($lefteyeheight-$leftpupilheight)/2;

						echo '<div class="left eye" style="width:' . $lefteyewidth . 'px;height:' . $lefteyeheight . 'px;left:' . get_field('left_eye_left') . 'px;top:' . get_field('left_eye_top') . 'px;">';
						echo '<div class="pupil" style="width:' . $leftpupilwidth .'px;height:' . $leftpupilheight . 'px;left:' . $leftpupilleft . 'px;top:' . $leftpupiltop . 'px;" data-width="' . get_field('left_ellipse_width') . '" data-height="' . get_field('left_ellipse_height') . '"></div>';
						echo '</div>';
					}

				?>


				<?php

					$rightvisible = get_field('right_eye_visible');

					if ($rightvisible)
					{
						$righteyewidth = get_field('right_eye_width');
						$rightpupilwidth = get_field('right_pupil_width');
						$rightpupilleft = ($righteyewidth-$rightpupilwidth)/2;

						$righteyeheight = get_field('right_eye_height');
						$rightpupilheight = get_field('right_pupil_height');
						$rightpupiltop = ($righteyeheight-$rightpupilheight)/2;

						echo '<div class="right eye" style="width:' . $righteyewidth . 'px;height:' . $righteyeheight . 'px;left:' . get_field('right_eye_left') . 'px;top:' . get_field('right_eye_top') . 'px;">';
						echo '<div class="pupil" style="width:' . $rightpupilwidth .'px;height:' . $rightpupilheight . 'px;left:' . $rightpupilleft . 'px;top:' . $rightpupiltop . 'px;" data-width="' . get_field('right_ellipse_width') . '" data-height="' . get_field('right_ellipse_height') . '"></div>';
						echo '</div>';
					}

				?>

				<?php
					the_post_thumbnail("full");
				?>

			</div>
		</div>

		<?php endif; ?>

		

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
