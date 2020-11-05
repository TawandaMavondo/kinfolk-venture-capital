<?php get_header(  )?>

<section class="the-story">
        <div class="container text-dark">
        <?php 
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post(); 
        the_content();
      } // end while
    } // end if
    ?>
        </div>
    </section>
    <?php
      get_template_part( 'part-navigation' );
    ?>
    <img class="globe" src="<?php bloginfo( 'template_directory' )?>/img/world.svg" alt="">


<?php get_footer(  )?>