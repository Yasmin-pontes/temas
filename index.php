<?php get_header();  ?>
 <div class="row">
 	<div class="col-md-12">
 		<div class="jumbotron">
                <hr>
            <br>
            <br>
 			<h2> Acontecimentos da semana</h2>
 			
 		</div>
 	</div>
 </div>




   <?php

if ( have_posts()) {?>

  <div class="album py-5 bg-light " >
        <div class="container " >
         
           <div class="row mx-auto"  >


  <?php
  while (have_posts()) {
   ?>

    <div class="row" >
  <div class="col-4 col-md-12 text-center ">
              <div class="card mb-4 shadow-sm text-black" >
                
                <div class="card-body" > 


                   
                    

  <?php  the_post('');


?>

<b><h2> <?php the_title(); ?></h2></b>
 <img class="card-img-top" height="1%" width="1%" alt="Card image cap " <?php the_post_thumbnail()?>>


</div>

<div class="texto">
  <?php the_excerpt(); ?> 
</div>

<a href="<?php the_permalink(); ?>" > ver mais</a>


</div>

</div>
</div>


<?php

  }
}

?>
<br>
<br>









        




<?php get_footer();  ?>
