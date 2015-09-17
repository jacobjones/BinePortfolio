			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">


					<div class="social-media">
						<?php 
							$social_media = array("instagram", "pinterest", "tumblr", "facebook", "vimeo");

							foreach ($social_media as &$site) {

								$social_media_url = do_shortcode("[tom id='" . $site . "-url']");

								if (!empty($social_media_url))  { // if not empty, then
									echo "<a target='_blank' class='" . $site . " icon' href='" . $social_media_url . "'>";
									echo "</a>";
								}
							}

						?>
					</div>

					<div class="email">

						<?php 
								$emailaddress = do_shortcode("[tom id='email']");

								if (!empty($emailaddress))  {
									echo "<a href='mailto:" . $emailaddress . "'>" . $emailaddress . "</a>	";
								}

						?>

					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
