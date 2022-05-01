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
        <h2 class="headingorange"></h2>
        <p class="tekst2"></p>
        <p class="tekst"></p>
        <p class="indhold"></p>
        <p class="indhold2"></p>
        <p class="ekstra"></p>
        <p class="indhold3"></p>
        <p class="indhold4"></p>
        <p class="indhold5"></p>
<details>
  <summary>Første Modul</summary>
  <p class="bold lektion"></p>
    <p class="bold lektion2"></p>

           <h3 class="bold"></h3>

  <p class="firstdot">Woho</p>
    <p class="seconddot">Woho</p>
      <p class="thirddot">Woho</p>
        <p class="fourthdot">Woho</p>

</details>     
<details>
  <summary class="summary">Andet Modul</summary>
  <p class="bold lektion3"></p>
    <h3 class="bold"></h3>
  <p class="fifthdot">Woho</p>
</details>    

<details>
  <summary class="summary2">Første Modul</summary>
  <p class="bold lektion4"></p>
  <h3 class="bold"></h3>

  <p class="sixthdot">Woho</p>
    <p class="seventhdot">Woho</p>
      <p class="eightdot">Woho</p>
        <p class="ninthdot">Woho</p>
          <p class="bold lektion5"></p>
<p class="ten">Woho</p>
        <p class="elleven">Woho</p>

</details> 

<details>
  <summary class="summary3">Fjerde Modul</summary>
  <p class="bold lektion6"></p>
    <p class="bold lektion8"></p>
    <p class="bold lektion7"></p>

    <h3 class="bold"></h3>
   <p class="twelve">Woho</p>
    <p class="thirteen">Woho</p>
    <p class="fourteen">Woho</p>

</details>  


<details>
  <summary class="summary4">Fjerde Modul</summary>
  <p class="bold lektion9"></p>
    <p class="bold lektion10"></p>

    <h3 class="bold"></h3>
   <p class="fifteen">Woho</p>
    <p class="sixteen">Woho</p>
    <p class="seventeen">Woho</p>
    <p class="eighteen ">Woho</p>
    <p class="nineteen">Woho</p>
    <p class="twenty">Woho</p>
    <p class="twentyone">Woho</p>


</details> 

<details>
  <summary class="summary5">Fjerde Modul</summary>
    <p class="bold lektion11"></p>

    <h3 class="bold"></h3>
    <iframe class="youtube" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe class="youtube2" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe class="youtube3" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



</details> 
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

        document.querySelector(".bold").textContent = opskrift.overskrift;
        //  document.querySelector(".indhold").textContent = opskrift.indhold;
        //  document.querySelector(".indhold2").textContent = opskrift.indhold2;
        //  document.querySelector(".ekstra").textContent = opskrift.ekstra;
        //  document.querySelector(".indhold3").textContent = opskrift.indhold3;
        //  document.querySelector(".indhold4").textContent = opskrift.indhold4;
        //  document.querySelector(".indhold5").textContent = opskrift.indhold5;
         document.querySelector(".firstdot").textContent = opskrift.indhold;
         document.querySelector(".seconddot").textContent = opskrift.indhold2;
         document.querySelector(".thirddot").textContent = opskrift.ekstra;
         document.querySelector(".fourthdot").textContent = opskrift.indhold3;
         document.querySelector(".fifthdot").textContent = opskrift.indhold4;
         document.querySelector("summary").textContent = opskrift.modulone;
         document.querySelector(".tekst2").textContent = opskrift.beskrivelse_single;
         document.querySelector(".lektion").textContent = opskrift.lektion_tid;
         document.querySelector(".lektion2").textContent = opskrift.lektion_tid2;

         document.querySelector(".summary").textContent = opskrift.modultwo;
         document.querySelector(".lektion3").textContent = opskrift.lektion_tid3;

         document.querySelector(".summary2").textContent = opskrift.modulthree;
         document.querySelector(".lektion4").textContent = opskrift.lektion_tid4;
         document.querySelector(".sixthdot").textContent = opskrift.indhold5;
         document.querySelector(".seventhdot").textContent = opskrift.indhold6;
         document.querySelector(".eightdot").textContent = opskrift.indhold7;
         document.querySelector(".ninthdot").textContent = opskrift.indhold8;
         document.querySelector(".lektion5").textContent = opskrift.lektion_tid5;
         document.querySelector(".ten").textContent = opskrift.indhold9;
         document.querySelector(".elleven").textContent = opskrift.indhold10;

         document.querySelector(".summary3").textContent = opskrift.modulfour;
         document.querySelector(".twelve").textContent = opskrift.indhold11;
         document.querySelector(".thirteen").textContent = opskrift.indhold12;
         document.querySelector(".fourteen").textContent = opskrift.indhold13;
         document.querySelector(".lektion6").textContent = opskrift.lektion_tid6;
         document.querySelector(".lektion7").textContent = opskrift.lektion_tid7;
         document.querySelector(".lektion8").textContent = opskrift.lektion_tid8;

         document.querySelector(".summary4").textContent = opskrift.modulfive;
         document.querySelector(".fifteen").textContent = opskrift.indhold14;
         document.querySelector(".sixteen").textContent = opskrift.indhold15;
         document.querySelector(".seventeen").textContent = opskrift.indhold16;
         document.querySelector(".eighteen").textContent = opskrift.indhold17;
         document.querySelector(".nineteen").textContent = opskrift.indhold18;
         document.querySelector(".twenty").textContent = opskrift.indhold19;
         document.querySelector(".twentyone").textContent = opskrift.indhold20;
         document.querySelector(".lektion9").textContent = opskrift.lektion_tid9;
         document.querySelector(".lektion10").textContent = opskrift.lektion_tid10;

         document.querySelector(".summary5").textContent = opskrift.modulsix;
         document.querySelector(".youtube").src = opskrift.yt;
         document.querySelector(".youtube2").src = opskrift.yt2;
         document.querySelector(".youtube3").src = opskrift.yt3;
         document.querySelector(".lektion11").textContent = opskrift.lektion_tid11;





     }


 getJson();
</script>
</div>
<?php
get_footer();
