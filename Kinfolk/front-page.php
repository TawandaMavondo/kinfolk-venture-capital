<?php get_header(  )?>

  <!-- Callout section -->
  <section class="callout-section">
    <div class="container">
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

  <img class="world" src="<?php bloginfo( 'template_directory' )?>/img/world.svg" alt="">

    <?php
      get_template_part( 'part-navigation' );
    ?>


<?php get_footer()?>