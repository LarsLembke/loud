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
            <section id="second_section_omos">
                <article id="txt_omos_beskrivelse"></article>
                <div id="img_omos_secondcontainer"></div>
            </section>
            <section id="third_section_omos">
                <div id="omos_gridcontainer">
                    <img src="" alt="" class="img_omos_grid">
                    <img src="" alt="" class="img_omos_grid">
                    <img src="" alt="" class="img_omos_grid">
                    <img src="" alt="" class="img_omos_grid">
                </div>
                <div id="txt_omos_thirdcontainer"></div>
            </section>
            <section id="fourth_section_omos">
                <div id="txt_omos_fourthcontainer"></div>
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
