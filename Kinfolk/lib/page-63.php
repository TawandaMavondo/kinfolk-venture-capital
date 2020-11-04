<?php get_header(  )?>

<section class="contact">
        <div class="container-fluid px-0">
            <h1 class="text-center"><?php the_title()?></h1>

            <?php if ( have_rows( 'contact' ) ) : ?>
	<?php while ( have_rows( 'contact' ) ) : the_row(); ?>
        <div class="row description">
                <h1 class="head-text col-12"><?php the_sub_field( 'title' ); ?></h1>
                <div class="col-md-6">
                <?php the_sub_field( 'description' ); ?>

                </div>
                <div class="col-md-6">
                    <?php the_sub_field( 'form' ); ?>
                </div>
                
            </div>
	<?php endwhile; ?>
<?php endif; ?>
       
            <div class="dark mx-0 ">
            <?php if ( have_rows( 'mailing_list' ) ) : ?>
	<?php while ( have_rows( 'mailing_list' ) ) : the_row(); ?>
        <div class="row description">
                    <h1 class="head-text col-12"><?php the_sub_field( 'title' ); ?></h1>
                    <div class="col-md-6">
                    <?php the_sub_field( 'description' ); ?>
                    </div>
                    <div class="col-md-6">
                        <?php the_sub_field( 'form' ); ?>
                </div>
	<?php endwhile; ?>
<?php endif; ?>
                
                <img class="globe" src="<?php bloginfo( 'template_directory' )?>/img/world.svg" alt="">

            </div>


        </div>

    </section>

 <?php
      get_template_part( 'part-navigation' );
    ?>

<?php get_footer(  );?>