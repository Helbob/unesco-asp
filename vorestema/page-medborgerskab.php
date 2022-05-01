<?php get_header(); 
	get_template_part('templates/page', 'header'); ?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
</style>

<!-- Template, som blive klonet længere nede i vores script -->
<template>
    <article>
    <img src="" alt="">
    <div>
        <h2 class="titel"></h2>
        <p class="tekst"></p>
        <p class="pris"></p>
        </div>
        </article>
</template>

<!-- Heri bliver vores data udskrevet i den sektion der hedder "retcontainer". 
Deruodver er der forskellige divs, som hører til temaet, for at det får den rigtige opstilling. -->
	<div id="primary" class="content-area">
        <div id="content" class="container">
   	  	<div class="row">
	<main id="main" class="site-main">
   <h2 class="oversigt">Globalt Medborgerskab</h2>
<section class="retcontainer">
 
</section>
</div>
</div>
</main>


<script>

/* Starter ud med at lave en konstant, som tager data fra vores backend */

 let indholdet;
 const dbUrl = "https://helbo.one/kea/tema_09/unesco-asp-wp/wp-json/wp/v2/medborgerskab";

/* Her bliver dataen fetched, samt logger vi vores array og kalder vores funktion */
 async function getJson(){
     const data = await fetch(dbUrl);
     indholdet = await data.json();
     console.log(indholdet);
     visData();

 }

/* Dette er vores funktion, for at få udskrevet vores data på sitet */
 function visData(){

     /* To variabler, hvor den ene hiver fat i template og den anden vores container */
     let temp = document.querySelector("template");
     let container = document.querySelector(".retcontainer");

     /* Sørger for containeren er tom */
     container.innerHTML = "";

     /* For hvert "indhold", skal der klones et element med class titel, et billede, element med class tekst,
     samt en article, hvor der er et click event på. Afslutningsvis bliver det udskrevet ved hjælp af appendChild */
     indholdet.forEach(indhold => {
         let klon = temp.cloneNode(true).content;
         klon.querySelector(".titel").textContent = indhold.title.rendered;
         klon.querySelector("img").src = indhold.billede.guid;
         klon.querySelector(".tekst").textContent = indhold.beskrivelse;
         klon.querySelector("article").addEventListener("click", ()=> {location.href = indhold.link; })
         container.appendChild(klon);
     })

 }

/* Vi kalder på vores getJson funktion */
 getJson();
</script>
</div>
<?php get_footer(); ?>