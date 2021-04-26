<!--
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package WordPress
* @subpackage Twenty_Nineteen
* @since Twenty Nineteen 1.0
*/
-->
<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section id="firstsection_single">
                <div id="content_single">


                    <div id="beskrivelse_boks_single">
                        <h3 class="podcastnavn"></h3>
                        <p class="host">

                        </p>


                        <div id="front_beskrivelse">
                            <p class="description"></p>
                        </div>
                    </div>
                    <div id="afspil">
                        <button>
                            Afspil seneste
                        </button>
                        <div class="afspiller">

                        </div>
                    </div>
                </div>
                <div id="img_container_single">
                    <div id="splash_image_front">
                        <img class="billede" src="" alt=""></div>
                </div>
            </section>

            <img class="billede" src="" alt="">
            <article>
                <div>
                    <p class="dato"></p>
                    <p class="description"></p>
                </div>
            </article>

            <section id="episode">
                <template>
                    <article>
                        <img src="" alt="">
                        <div>
                            <h2 class="episodenavn"></h2>
                            <p class="dato"></p>
                            <p class="kortbeskrivelse"></p>
                            <a href=""></a>
                        </div>
                    </article>
                </template>
            </section>




        </main>


        <script>
            let podcast;
            let episoder;
            let aktuelpodcast = <?php echo get_the_ID() ?>;

            const dbUrl = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/podcast/" + aktuelpodcast;
            const episodeUrl = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/episode?per_page=100";

            const container = document.querySelector("#episode");

            document.addEventListener("DOMContentLoaded", start);



            function start() {
                console.log("start");



                getJSON();
            }

            async function getJSON() {
                const data = await fetch(dbUrl);
                podcast = await data.json();

                const data2 = await fetch(episodeUrl);
                episoder = await data2.json();
                console.log("episode: ", episoder);

                visPodcast();
                visEpisoder();
            }

            function visPodcast() {
                console.log("visPodcast");
                console.log(podcast.title.rendered);
                document.querySelector(".podcastnavn").innerHTML = podcast.title.rendered;
                document.querySelector(".host").textContent = "...med " + podcast.host;
                document.querySelector(".billede").src = podcast.image.guid;
                document.querySelector(".description").innerHTML = podcast.description;
            }




            function visEpisoder() {
                console.log("visEpisoder");
                let temp = document.querySelector("template");
                episoder.forEach(episode => {
                    console.log("loop id :", aktuelpodcast);
                    console.log(episode.forhold);
                    if (episode.forhold == aktuelpodcast) {
                        console.log("loop kører id :", aktuelpodcast);
                        let klon = temp.cloneNode(true).content;
                        klon.querySelector(".episodenavn").innerHTML = episode.title.rendered;
                        klon.querySelector(".dato").innerHTML = episode.dato;
                        klon.querySelector(".kortbeskrivelse").innerHTML = episode.kortbeskrivelse;
                        klon.querySelector("article").addEventListener("click", () => {
                            location.href = episode.link;

                        })

                        klon.querySelector("a").href = episode.link;
                        console.log("episode", episode.link);
                        container.appendChild(klon);
                    }
                })
                visDato();
            }


            function visDato() {
                let d = new Date(episoder.dato);

                console.log(d.getYear);
            }

        </script>

    </div>
    <!-- #primary -->

    <?php
get_footer(); ?>
