<?php get_header();?>
    
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2><?php the_title(); ?> </h2>
                </div>
            </div>
        </div>

        <?php if (!is_page('contato')) { ?>
        

        <div class="row">
             <div class="col-md-12">
              <?php the_content(); ?>
            </div>
        </div>
        <?php } ?>

        <?php if (is_page('contato')) { ?>
            <div class="row">
             <div class="col-md-4">
              <?php the_content(); ?>
            </div>
            <div class="col-md-8">
               <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=itanha%C3%A9m,%20Brasil&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            </div>
        </div>
        <?php
        }?>
       
    <?php get_footer();?>