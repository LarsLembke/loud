<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section id="firstsection">
                <div id="beskrivelse_boks_front">
					<h1>
						Dine <b class="red">favorit</b> podcasts
					</h1>
					<h3 class="haandskrevet">
						...lige når du har lyst!
					</h3>
					<div class="front-icons">

					<a href="#"><img src="http://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/appstore_8e70a99f.svg"></a>
						<a href="#"><img src="http://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/google-play-2_a914298c.png"></a>
						</div>
                    <div id="front_beskrivelse"></div>
                </div>
                <div id="img_container_front">
                    <div id="splash_image_front"></div>
                </div>
            </section>

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
