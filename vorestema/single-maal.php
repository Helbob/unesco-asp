<?php get_header(); 
	get_template_part('templates/page', 'header'); ?>
	<!-- <div id="primary" class="content-area">
	<main id="main" class="site-main"> -->
     <div id="content" class="container homepagecontent">
	<div class="row">
		<div class="main <?php echo esc_attr( pinnacle_main_class() ); ?>" role="main">   
    <div class="borgerskab">
    <img class="pic" src="" alt="">
    <div>
        <h2></h2>
        <p class="tekst"></p>
        <p class="indhold"></p>
        <p class="indhold2"></p>
        <p class="ekstra"></p>
        <p class="indhold3"></p>
        <p class="indhold4"></p>
        <p class="indhold5"></p>
  <details>
    <summary class="modul"></summary>
    <p class="dropdown">
    </p>
  </details>
        </div>
</div>
        	</div><!-- /.main -->
	</div><!-- /.row-->
</div><!-- /.content -->
<!-- 
<section class="retcontainer">
</section> -->

</main>


<script>

let opskrift;

 const dbUrl = "https://helbo.one/kea/tema_09/unesco-asp-wp/wp-json/wp/v2/maal/"+<?php echo get_the_ID() ?>;
 async function getJson(){
     const data = await fetch(dbUrl);
     opskrift = await data.json();
     visMad();
 }

 function visMad(){
	 console.log(opskrift.title.rendered);
         document.querySelector("h2").textContent = opskrift.title.rendered;
         document.querySelector(".pic").src = opskrift.billede.guid;
         document.querySelector(".tekst").textContent = opskrift.beskrivelse;
         document.querySelector(".indhold").textContent = opskrift.indhold;
         document.querySelector(".indhold2").textContent = opskrift.indhold2;
         document.querySelector(".ekstra").textContent = opskrift.ekstra;
         document.querySelector(".indhold3").textContent = opskrift.indhold3;
         document.querySelector(".indhold4").textContent = opskrift.indhold4;
         document.querySelector(".indhold5").textContent = opskrift.indhold5;
         document.querySelector("summary").textContent = opskrift.title.rendered;
         document.querySelector(".dropdown").textContent = opskrift.beskrivelse;
         document.querySelector("details").textContent = opskrift.indhold5;



     }


 getJson();
</script>
</div>
<?php
get_footer();
