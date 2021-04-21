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
            <div id="front_beskrivelse"></div>
        </div>
        <div id="img_container_front">
            <div id="splash_image_front"></div>
        </div>
        </section>

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


        let popular

        const url ="http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/podcast?per_page=100";
        async function getJson(){
            let response = await fetch(url);
            podcasts = await respsonse.json();
            visPopular();
        }
            function visPopular(){
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

