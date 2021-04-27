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
						Hvem er Radio LOUD?
					</h1>
                    <h3 class="haandskrevet">
						Vision om god ungomsradio
					</h3>
                    <div class="front-icons">

                        <a href="#"><img src="http://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/appstore_8e70a99f.svg"></a>
                        <a href="#"><img src="http://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/google-play-2_a914298c.png"></a>
                    </div>
                    <div id="front_beskrivelse"></div>
                </div>
                <div id="img_container_front" class="omloud">
                    <div id="splash_image_front"></div>
                </div>
            </section>
			<a href="#second_section_omos" class="pil"><img src="http://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/pil-gul.png"></a>
            <section id="second_section_omos">
				<div id="container">


                <article id="txt_omos_beskrivelse">
                    <h2>Hvem er Radio LOUD</h2>
                    <p>Radio Loud er en dansk digital public service-radiokanal beliggende i Svendborg og København drevet af en sammenslutning af lokalradioer og Berlingske Media gennem selskabet Kulturradio Danmark A/S.</p>
                    <h3>Hvad er vores mission</h3>
                    <p>Vores mission er at skabe spændende og relevant indhold til de unge danskerne, både via live radio men også i stor stil via podcasts.</p>
                </article>
                <div id="img_omos_secondcontainer">
                    <img src="img/brooke-cagle--uHVRvDr7pg-unsplash.jpeg" alt="">
                </div>
				</div>
            </section>
            <section id="third_section_omos">
                <div id="omos_gridcontainer">
                    <img src="img/baresex.jpeg" alt="" class="img_omos_grid">
                    <img src="img/forevigt.jpeg" alt="" class="img_omos_grid">
                    <img src="img/rocker.jpeg" alt="" class="img_omos_grid">
                    <img src="img/ofrene.jpeg" alt="" class="img_omos_grid">
                </div>
                <div id="txt_omos_thirdcontainer">
					<div id="container">
                    <h2>Hvad kan vi tilbyde</h2>
                    <p>På Radio LOUD kan vi tilbyde underholdende live radio med vores altid interessante værter - og vi har hundredevis af podcasts, til en hver lejlighed.</p>
                </div>
		</div>
            </section>
            <section id="fourth_section_omos">
                <div id="txt_omos_fourthcontainer">
					<div id="container">
                    <h2>Hvor kan du høre vores podcasts</h2>
                    <p>Alle vorees podcasts er tilgængelige på stort set alle podcast streamingtjenester. Her i blandt: Apple Podcasts, Spotify, Google Podcasts, Podimo og Spreaker.</p>
                </div>
					</div>
                <div id="link_gridcontainer">
                    <a href="" class="link_omos_grid"></a>
                    <a href="" class="link_omos_grid"></a>
                    <a href="" class="link_omos_grid"></a>
                    <a href="" class="link_omos_grid"></a>
                    <a href="" class="link_omos_grid"></a>
                    <a href="" class="link_omos_grid"></a>
                </div>
            </section>


        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php
get_footer();
