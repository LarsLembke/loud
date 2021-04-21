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

        <div id="splash_podcast">
            <div id="beskrivelse_boks_podcast">
                <div id="podcast_beskrivelse"></div>
            </div>
            <div id="img_container_podcast">
                <div id="splash_image_podcast"></div>
            </div>
        </div>
        <section id="podcast_grid">
            <nav id="filtrering"></nav>
            <div id="grid_container_podcast"></div>
        </section>




        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php
get_footer();
