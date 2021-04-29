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

            <section id="firstsection_single">
                <div id="content_single">


                    <div id="beskrivelse_boks_single">
                        <h3 class="singleepisodenavn"></h3>
                        <p class="host">

                        </p>

                        <p class="aktuelDato"></p>


                        <div id="front_beskrivelse">
                            <p class="description"></p>
                        </div>
                    </div>
                    <div id="afspil">
                        <button>
                            Afspil episode
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
                <a href="#section_two" class="pil"><img src="http://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/pil-gul.png"></a>
            </section>

            <section id="section_two">
                <h2>
					Hør flere episoder
				</h2>
                <section id="episoder_grid">
                    <div id="pod_beskrivelse_ep">
                        <img class="billede" src="" alt="">
                        <div id="single_episode_podcast_beskrivelse">
                            <p class="podcast_beskrivelse_episode"></p>
                        </div>
                    </div>
                    <section id="episode">

                        <template>
                            <article>
                                <div>
                                    <p class="dato"></p>
                                    <h3 class="episodenavn"></h3>

                                    <p class="kortbeskrivelse"></p>
                                    <a href="">
                                        <img src="http://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/pil.svg"></a>

                                </div>
                            </article>
                        </template>
                    </section>
                </section>
            </section>




        </main>
        <!-- #main -->


        <script>
            let singleEpisode;
            let episoder;
            let podcastForhold
            let aktuelEpisode = <?php echo get_the_ID() ?>;
            let episodeInfo;

            let podcast;

            const dbUrl = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/episode/" + aktuelEpisode;
            const episodeUrl = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/episode?per_page=100";
            //const podcastUrl = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/podcast/";

            const container = document.querySelector("#episode");

            document.addEventListener("DOMContentLoaded", start);




            function start() {
                console.log("start");



                getJSON();
            }

            async function getJSON() {
                const data = await fetch(dbUrl);
                singleEpisode = await data.json();

                const data2 = await fetch(episodeUrl);
                episoder = await data2.json();
                console.log("episode: ", episoder);

                //const data3 = await fetch(podcastUrl);
                //podcastForhold = await data3.json();

                console.log(singleEpisode);

                getPodcast();
                visSingleEpisode();
            }

            async function getPodcast() {
                const podcastUrl = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/podcast/" + singleEpisode.forhold;

                const data3 = await fetch(podcastUrl);
                podcastForhold = await data3.json();

                console.log("podcastForhold", podcastForhold);
                getEpisoder();
                visSingleEpisode();
            }

            async function getEpisoder() {
                let episodeForhold = "http://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/episode/";


                podcastForhold.episoder.forEach(async episoderne => {
                    let data4 = "data" + episoderne;
                    data4 = await fetch(episodeForhold + episoderne);
                    episodeInfo = await data4.json();

                    console.log(episodeInfo);
                    visEpisoder();


                })


            }

            function visSingleEpisode() {
                console.log("visSingleEpisode");
                console.log(singleEpisode.title.rendered);
                document.querySelector(".singleepisodenavn").innerHTML = singleEpisode.title.rendered;
                document.querySelector(".aktuelDato").innerHTML = singleEpisode.dato;
                document.querySelector(".host").innerHTML = "...med " + podcastForhold.host;
                document.querySelector(".description").innerHTML = singleEpisode.kortbeskrivelse;


                document.querySelector("#img_container_single .billede").src = podcastForhold.image.guid;
                document.querySelector("#pod_beskrivelse_ep .billede").src = podcastForhold.image.guid;
                document.querySelector(".podcast_beskrivelse_episode").textContent = podcastForhold.description;

            }




            function visEpisoder() {
                console.log("visEpisoder");
                let temp = document.querySelector("template");

                console.log("loop id :", aktuelEpisode);
                console.log("pId: ", podcastForhold.episoder);
                console.log("eId: ", episode.id);
                console.log(episode.forhold);

                console.log("loop kører id :" + singleEpisode.forhold + "mod" + episodeInfo.forhold);
                let klon = temp.cloneNode(true).content;
                klon.querySelector(".episodenavn").innerHTML = episodeInfo.title.rendered;
                klon.querySelector(".dato").innerHTML = episodeInfo.dato;
                klon.querySelector(".kortbeskrivelse").innerHTML = episodeInfo.kortbeskrivelse;
                klon.querySelector("article").addEventListener("click", () => {
                    location.href = episodeInfo.link;

                })

                klon.querySelector("a").href = episodeInfo.link;
                console.log("episode", episodeInfo.link);
                container.appendChild(klon);



            }

        </script>






    </div>
    <!-- #primary -->

    <?php
get_footer();
