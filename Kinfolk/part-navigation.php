   <!-- Modal Nav-->

   <div id="nav-modal" class="uk-modal-container" uk-modal>
       <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
           <!-- <a href="./story.html">Story</a>
              <a href="./team.html">Team</a>
              <a href="./contact.html">Contact</a> -->

           <?php wp_nav_menu( array(
            'theme_location'=>'primary',
            'menu_class'=>'text-center'
              ) 
              );?>

           <div class="text-dark nav-icons">

               <?php if ( have_rows( 'social_icons' ) ) : ?>
               <?php while ( have_rows( 'social_icons' ) ) : the_row(); ?>
                
               <a href="<?php the_sub_field( 'instagram' ); ?>" class="icon">
                   <i class="fa fa-instagram " aria-hidden="true"></i>
               </a>
               <a href="<?php the_sub_field( 'linkedin' ); ?>" class="icon">
                   <i class="fa fa-linkedin" aria-hidden="true"></i>
               </a>
               <a href="<?php the_sub_field( 'twitter' ); ?>" class="icon">
                   <i class="fa fa-twitter" aria-hidden="true"></i>
               </a>
               <?php endwhile; ?>
               <?php endif; ?>
           </div>
       </div>
   </div>
   </div>