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

            <div id="splash_omos">
                <div id="beskrivelse_boks_omos">
                    <div id="omos_beskrivelse"></div>
                </div>
                <div id="img_container_omos">
                    <img src="" alt="" id="splash_image_omos">
                </div>
            </div>
            <section id="first_section_omos">
                <article id="txt_omos_beskrivelse"></article>
                <div id="img_omos_firstcontainer"></div>
            </section>
            <section id="second_section_omos">
                <div id="omos_gridcontainer">
                    <img src="" alt="" class="img_omos_grid">
                    <img src="" alt="" class="img_omos_grid">
                    <img src="" alt="" class="img_omos_grid">
                    <img src="" alt="" class="img_omos_grid">
                </div>
                <div id="txt_omos_secondcontainer"></div>
            </section>
            <section id="third_section_omos">
                <div id="txt_omos_thirdcontainer"></div>
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
