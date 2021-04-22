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
            <nav id="filtrering">
                <button data-program="Mandag">Mandag</button>
                <button data-program="Tirsdag">Tirsdag</button>
                <button data-program="Onsdag">Onsdag</button>
                <button data-program="Torsdag">Torsdag</button>
                <button data-program="Fredag">Fredag</button>
                <button data-program="Lørdag">Lørdag</button>
                <button data-program="Søndag">Søndag</button>
            </nav>

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
            let filter = "Mandag";

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
                visProgrammer();
                //opretKnapper();
                addEventListenerToButton();
            }

            /*function opretKnapper() {
                programmer.forEach(pro => {
                    document.querySelector("#filtrering").innerHTML += `<button class="filter" data-program="${pro.dag}">${pro.dag}</button>`
                })
                addEventListenerToButton();
            }*/


            function addEventListenerToButton() {
                console.log("button");
                document.querySelectorAll("#filtrering button").forEach(knap => {
                    knap.addEventListener("click", filtrerProgrammer);
                })
            }

            function filtrerProgrammer() {
                filter = this.dataset.program;
                console.log("filtrerRetter")
                    //document.querySelector(".valgt").classList.remove("valgt");
                    //this.classList.add("valgt");


                visProgrammer();
                //header.textContent = this.textContent;
            }


            function visProgrammer() {
                console.log("visProgrammer");

                const dest = document.querySelector("#programliste");
                const temp = document.querySelector("template").content;

                dest.textContent = "";

                programmer.forEach(prog => {
                    console.log("progForEach");

                    if (filter == "Mandag" || prog.dag.includes(filter)) {

                        const klon = temp.cloneNode(true);
                        klon.querySelector(".klokken").textContent = prog.klokken;
                        klon.querySelector(".program").textContent = prog.title.rendered;

                        dest.appendChild(klon);
                    }
                });


            }

        </script>



    </div>
    <!-- #primary -->

    <?php
get_footer();
