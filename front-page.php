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
					<h2>
						Dine favorit
					</h2>
					<h1 class="glitch"> podcasts </h1>

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

			<h2 class="populaerepodcasts">
				Populære podcasts
			</h2>

			<?php echo do_shortcode('[metaslider id="910"]'); ?>

			<h2 class="nytfraloud">
				Nyt fra LOUD
			</h2>
			<?php echo do_shortcode('[metaslider id="938"]'); ?>

            <section id="secondsection">
                <div id="poppodcasts">
                    <div id="pop1"></div>
                    <div id="pop2"></div>
                    <div id="pop3"></div>
                    <div id="pop4"></div>
                    <div id="pop5"></div>
                    <div id="pop6"></div>
                </div>
            </section>

            <section id="thirdsection">
                <div id="img_container_omos_front">
                    <div id="omos_image_front"></div>
                </div>
                <div id="omos_boks_front">
                    <div id="omos_text_front"></div>
                </div>
            </section>


        </main>
        <!-- #main -->

        <script>
            let popular;

            const url = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/podcast?per_page=100";
            getJson();
            async function getJson() {
                let response = await fetch(url);
                popular = await response.json();
                visPopular();
            }

            function visPopular() {
                console.log(popular);
            }

            /* async function hentData() {
                const JSONData = await fetch("https://babushka-dd8a.restdb.io/rest/menu", {
                    headers: myHeaders
                });
                mad = await JSONData.json();
                console.log("Mad", mad);
                visMad();
            }
            */

        </script>
    </div>
    <!-- #primary -->

    <?php
get_footer();
