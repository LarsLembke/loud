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
						Lyt til Radio LOUD live
					</h1>
					<div id="afspil" class="sendeplan_afspil">


					<button>
							<img src="http://lembkesites.dk/kea/09_CMS/loud/wp-content/uploads/2021/04/pil-1.svg">
						</button>
						</div>
                    <div id="front_beskrivelse"></div>
                </div>
                <div id="img_container_front" class="sendeplanimg">
                    <div id="splash_image_front"></div>
                </div>
            </section>
			<section id="secondsection">

					 <div id="container">
						 <h2>
							Radio LOUD's Sendeplan
						 </h2>

            <nav id="filtrering" class="sendeplan">
                <button data-program="Mandag" class="valgt">Mandag</button>
                <button data-program="Tirsdag">Tirsdag</button>
                <button data-program="Onsdag">Onsdag</button>
                <button data-program="Torsdag">Torsdag</button>
                <button data-program="Fredag">Fredag</button>
                <button data-program="Lørdag">Lørdag</button>
                <button data-program="Søndag">Søndag</button>
            </nav>

<div id="dropdown">
  <button class="btn" style="border-left:1px solid navy">
	  Dag
    <i class="fa fa-caret-down"></i>
  </button>
						 <nav id="filtrering" class="dropdown_content">
                <button data-program="Mandag">Mandag</button>
                <button data-program="Tirsdag">Tirsdag</button>
                <button data-program="Onsdag">Onsdag</button>
                <button data-program="Torsdag">Torsdag</button>
                <button data-program="Fredag">Fredag</button>
                <button data-program="Lørdag">Lørdag</button>
                <button data-program="Søndag">Søndag</button>
            </nav>

	</div>

            <section id="programliste"></section>

				</div>
</section>

        </main>
        <!-- #main -->

        <template>
            <article class="program_container">
                <p class="klokken"></p>
				<img class="img" src="" >
                <p class="program"></p>
            </article>
        </template>

        <script>
            let programmer;
            let dag;
            let filter = "Mandag";

            console.log("lars");

            const url = "https://lembkesites.dk/kea/09_CMS/loud/wp-json/wp/v2/program?per_page=100";

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
				visProgrammer();
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
                    document.querySelector(".valgt").classList.remove("valgt");
                    this.classList.add("valgt");
				visProgrammer();


                visProgrammer();
                //header.textContent = this.textContent;
            }



            function visProgrammer() {
                console.log("visProgrammer");

                const dest = document.querySelector("#programliste");
                const temp = document.querySelector("template").content;

                dest.textContent = "";

                /*const sortedByTime = programmer.sort((a, b) => {
                    return a.(parseInt(klokken)) - b.(parseInt(klokken));
                });*/

                //console.log(sortedByTime)

                programmer.sort((a, b) => (a.klokken < b.klokken) ? -1 : ((a.klokken > b.klokken) ? 1 : 0))

                console.log(programmer)

                programmer.forEach(prog => {
                    console.log("progForEach");
                    //filter == "Mandag" ||
                    if (filter == prog.dag || filter == "mandag") {

                        const klon = temp.cloneNode(true);

                        const HHMM = prog.klokken;
                        const patt = /[0-9][0-9]:[0-9][0-9]/
                        const result = HHMM.match(patt);

                        klon.querySelector(".klokken").textContent = result;
                        klon.querySelector(".program").textContent = prog.title.rendered;
						klon.querySelector(".img").src = prog.image.guid;

                        dest.appendChild(klon);
                    }
                });


            }


        </script>



    </div>
    <!-- #primary -->

    <?php
get_footer();
