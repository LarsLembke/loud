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
            <nav id="filtrering"></nav>

            <section id="programliste"></section>



        </main>
        <!-- #main -->

        <template>
            <article class="program_container">
                <p class="klokken"></p>
                <p class="program"></p>
            </article>
        </template>

        <script>
            let programmer;
            let dag;
            let filter;

            console.log("lars");

            const url = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/program?per_page=100";

            document.addEventListener("DOMContentLoaded", start);

            function start() {
                console.log("start");

                hentData();
            }

            async function hentData() {
                const respons = await fetch(url);
                programmer = await respons.json();
                console.log(programmer);
            }

        </script>



    </div>
    <!-- #primary -->

    <?php
get_footer();
