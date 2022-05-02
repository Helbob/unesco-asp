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
<!-- <nav id="filtrering"></nav> -->
    <h1>Global Medborgerskab</h1>
<section class="retcontainer2">
</section>
</div>
</div>
</main>


<script>
function hej(){
 console.log("hej");
}
// https://helbo.one/kea/tema_09/unesco-asp-wp/kategori/globalt_medborgerskab/
hej();
 let opskrifter;
//  let categories;
//  let filterRet;

 const dbUrl = "https://helbo.one/kea/tema_09/unesco-asp-wp/wp-json/wp/v2/udvikling";
//  const catUrl = "https://helbo.one/kea/tema_09/passion-wp/wp-json/wp/v2/categories";

 async function getJson(){
     const data = await fetch(dbUrl);
    //  const catdata = await fetch(catUrl);

     opskrifter = await data.json();
    //  categories = await catdata.json();

     console.log(opskrifter);
     visMad();
    //  opretknapper();
 }

// function opretknapper(){
//     categories.forEach(cat =>{
//     document.querySelector("#filtrering").innerHTML += `<button class"filter" data-opskrift="${cat.id}">${cat.name}</button>`
//     })
//     addEventListenersToButtons();
// }

// function addEventListenersToButtons(){
//     document.querySelectorAll("#filtrering button").forEach(elm =>{
//         elm.addEventListener("click", filtrering);
//     })
// }

// function filtrering(){
// filterRet = this.dataset.opskrift;
// console.log(filterRet)

// visMad();
// }


 function visMad(){
     let temp = document.querySelector("template");
     let container = document.querySelector(".retcontainer2");
     container.innerHTML = "";
     opskrifter.forEach(opskrift => {
        //  if (opskrift.categories.includes(parseInt(filterRet))){
         let klon = temp.cloneNode(true).content;
         klon.querySelector("h2").textContent = opskrift.title.rendered;
         klon.querySelector("img").src = opskrift.billede.guid;
         klon.querySelector(".tekst").textContent = opskrift.beskrivelse;
         klon.querySelector("article").addEventListener("click", ()=> {location.href = opskrift.link; })
         container.appendChild(klon);
            //  }
     })

 }

 getJson();
</script>
</div>
<?php get_footer(); ?>