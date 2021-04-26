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
                <article id="txt_omos_beskrivelse">
                    <h2>Hvem er LOUD</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusamus corporis unde alias cupiditate quod asperiores iure ducimus sed soluta dolorem, dolores molestias dicta ad voluptatem quam perferendis. Hic, non.</p>
                    <h3>Hvad er vores mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quos quae voluptatem sint adipisci repellat natus tenetur, voluptate, eum, fuga consectetur perspiciatis enim incidunt quis amet dolorem aut voluptates vel.</p>
                </article>
                <div id="img_omos_secondcontainer">
                    <img src="img/brooke-cagle--uHVRvDr7pg-unsplash.jpeg" alt="">
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
                    <h2>Hvad kan vi tilbyde</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore possimus voluptatum recusandae ex illum praesentium, quibusdam dolor perferendis vel reprehenderit! Quo illum vel reiciendis facere a laudantium exercitationem quia est.</p>
                </div>
            </section>
            <section id="fourth_section_omos">
                <div id="txt_omos_fourthcontainer">
                    <h2>Hvor kan du høre vores podcasts</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut harum ad, mollitia tempora consectetur voluptate molestiae. Ratione ipsam quibusdam, aspernatur sint quo animi consectetur ab explicabo. Laboriosam sapiente commodi, voluptas.</p>
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
