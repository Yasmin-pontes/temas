<?php get_header();  ?>
<body>
 <div class="row forma">
 	<div class="col-md-12">
 		<div class="jumbotron">
                <hr>
            <br>
            <br>
 			<h2> ★ Sis Puella Magica ★</h2>
 			
 		</div>
 	</div>
 </div>

<?php
 the_post();

    
?>



  <div class="col-md-12">



 <img class="card-img-top" height="12%"  alt="Card image cap" <?php the_post_thumbnail()?>> 
<h2> <?php the_title(); ?></h2>
  <p><?php the_excerpt(); ?> </p> 

<div class="row">
<?php
$cont = 0;
if ( have_posts()) {
  while (have_posts()) {
    the_post();
    $cont++;
    if ($cont <= 7) {
      
    
?>



  <div class="col-md-4">



 <img class="card-img-top" height="45%"  alt="Card image cap" <?php the_post_thumbnail()?>> 
<h2> <?php the_title(); ?></h2>
  <p><?php the_excerpt(); ?> </p>
  
  <a class="btn btn-danger" href="<?php the_permalink(); ?>">leia mais★</a>
 </div>


<?php


  }
}
} 

?>
</div>
</div>

<hr id="fim">

<br>
<br>









        




<?php get_footer();  ?>
</body>
