<?php get_header(); 
	get_template_part('templates/page', 'header'); ?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
</style>
<template>
    <article>
    <img src="" alt="">
    <div>
        <h2></h2>
        <p class="tekst"></p>
        <p class="pris"></p>
        </div>
        </article>
</template>
	<div id="primary" class="content-area">
        <div id="content" class="container">
   	  	<div class="row">
	<main id="main" class="site-main">
    <h1 class="oversigt">UNESCO Skolemål</h1>
<section class="retcontainer4">
</section>
</div>
</div>
</main>


<script>

 let opskrifter;


 const dbUrl = "https://helbo.one/kea/tema_09/unesco-asp-wp/wp-json/wp/v2/maal";


 async function getJson(){
     const data = await fetch(dbUrl);
     opskrifter = await data.json();
     console.log(opskrifter);
     visMad();
 }

 function visMad(){
     let temp = document.querySelector("template");
     let container = document.querySelector(".retcontainer4");
     container.innerHTML = "";
     opskrifter.forEach(opskrift => {
         let klon = temp.cloneNode(true).content;
         klon.querySelector("h2").textContent = opskrift.title.rendered;
         klon.querySelector("img").src = opskrift.billede.guid;
         klon.querySelector(".tekst").textContent = opskrift.beskrivelse;
         klon.querySelector("article").addEventListener("click", ()=> {location.href = opskrift.link; })
         container.appendChild(klon);    
     })

 }

 getJson();
</script>
</div>
<?php get_footer(); ?>