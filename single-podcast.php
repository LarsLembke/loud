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
                        <img class="billede" src="" alt="">
                    </div>
                </div>
                <a href="#section_two" class="pil"><img src="https://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/pil-gul.png"></a>
            </section>

            <section id="section_two">
                <h2>
                Hør flere episoder
            </h2>
                <section id="episoder_grid">
                    <div id="pod_beskrivelse_ep">
                        <img class="billede" src="" alt="">
                    </div>
                    <section id="episode">


                    </section>
                </section>
            </section>




        </main>

        <template>
            <article>
                <div>
                    <p class="dato"></p>
                    <h3 class="episodenavn"></h3>

                    <p class="kortbeskrivelse"></p>
                    <a href="">
                        <img src="https://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/pil.svg"></a>

                </div>
            </article>
        </template>
        <script>
            let podcast;
            let episoder;
            let aktuelpodcast = <?php echo get_the_ID() ?>;
            let episodeInfo;


            const dbUrl = "https://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/podcast/" + aktuelpodcast;


            const episodeUrl = "https://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/episode?per_page=100";

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
                getEpisoder();
                //visEpisoder();
            }

            function visPodcast() {
                console.log("visPodcast");
                console.log(podcast.title.rendered);
                document.querySelector(".podcastnavn").innerHTML = podcast.title.rendered;
                document.querySelector(".host").textContent = "...med " + podcast.host;
                document.querySelector("#img_container_single .billede").src = podcast.image.guid;
                document.querySelector("#pod_beskrivelse_ep .billede").src = podcast.image.guid;
                document.querySelector(".description").innerHTML = podcast.description;
            }

            async function getEpisoder() {
                let episodeForhold = "https://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/episode/";


                podcast.episoder.forEach(async episoderne => {
                    let data3 = "data" + episoderne;
                    data3 = await fetch(episodeForhold + episoderne);
                    episodeInfo = await data3.json();

                    console.log(episodeInfo);
                    visEpisoder();


                })


            }




            function visEpisoder() {
                console.log("visEpisoder");
                let temp = document.querySelector("template");
                let klon = temp.cloneNode(true).content;

                console.log("loop id :", aktuelpodcast);

                klon.querySelector(".episodenavn").innerHTML = episodeInfo.title.rendered;
                klon.querySelector(".dato").innerHTML = episodeInfo.dato;
                klon.querySelector(".kortbeskrivelse").innerHTML = episodeInfo.kortbeskrivelse;
                klon.querySelector("article").addEventListener("click", () => {
                    location.href = episodeInfo.link;
                });
                klon.querySelector("a").href = episodeInfo.link;
                console.log("episode", episodeInfo.link);
                container.appendChild(klon);




                //if (episode.forhold == aktuelpodcast) {}
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
