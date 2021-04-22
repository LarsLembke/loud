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
                <nav id="filtrering">
                    <button data-podcast="alle">Alle</button>
                </nav>
                <div id="grid_container_podcast"></div>
            </section>




        </main>
        <!-- #main -->

        <template>
            <article>
                <img src="" alt="" class="podcover">
                <h3 class="navn"></h3>
                <p class="host"></p>
                <p class="beskrivelse"></p>
                <p class="tid"></p>
            </article>
        </template>


        <script>
            let podcasts;
            let categories;
            let filter = "alle";

            console.log("podcasts");

            const url = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/podcast?per_page=100";
            const caturl = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/categories/";

            document.addEventListener("DOMContentLoaded", start);

            function start() {
                console.log("start");

                hentData();
            }

            async function hentData() {
                const respons = await fetch(url);
                const catrespons = await fetch(caturl);
                podcasts = await respons.json();
                categories = await catrespons.json();
                console.log(podcasts);
                visPodcasts();
                opretKnapper();
            }

            function opretKnapper() {
                console.log("opretKnapper")

                categories.forEach(cat => {
                    document.querySelector("#filtrering").innerHTML += `<button class="filter" data-podcast="${cat.name}">${cat.name}</button>`
                })
                addEventListenerToButton();
            }

            function addEventListenerToButton() {
                console.log("button");
                document.querySelectorAll("#filtrering button").forEach(knap => {
                    knap.addEventListener("click", filtrerPodcasts);
                })
            }

            function filtrerPodcasts() {
                filter = this.dataset.podcast;
                console.log("filtrerPodcasts")

                visPodcasts();
            }




            function visPodcasts() {
                console.log("visPodcasts");

                const dest = document.querySelector("#grid_container_podcast");
                const temp = document.querySelector("template").content;

                dest.textContent = "";

                podcasts.forEach(pods => {
                    console.log("forEachPodcasts");


                    if (filter == "alle" || retterne.categories.includes(parseInt(filter))) {

                        console.log("IF");

                        const klon = temp.cloneNode(true);

                        klon.querySelector(".navn").textContent = pods.title.rendered;
                        klon.querySelector(".host").textContent = pods.host;
                        klon.querySelector(".beskrivelse").textContent = pods.description;
                        klon.querySelector(".tid").textContent = pods.time;
                        klon.querySelector(".podcover").src = pods.image.guid;

                        dest.appendChild(klon);
                        //klon.querySelector("").
                    }
                });


            }

        </script>




    </div>
    <!-- #primary -->

    <?php
get_footer();
