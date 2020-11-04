<?php get_header(  )?>
<section class="the-team">
        <div class="container">
            <h1 class="text-center"><?php the_title()?></h1>


            <div class="row team-section">
                    <?php
                        $args =array(
                            'post_type'=>'theteam'
                        );
                        $query = new WP_Query( $args );

                        if($query->have_posts()):
                            while($query->have_posts()):$query->the_post();
                    ?>
                     <div class="col-md-6">
                    <a data-toggle="collapse"
                     href="#<?php the_ID();?>"
                     aria-expanded="false" 
                     role="button" 
                     aria-controls="<?php the_ID();?>">
                        <!-- <img src="./img/JayFreeman.jpg" class="img-fluid mb-3" alt=""> -->
                        <div 
                        class="profile-image" 
                            style="background-image:url('<?php echo get_the_post_thumbnail_url();?>')"
                        >

                        </div>
                    </a>
                    <div>
                        <h3> <?php the_title();?> </h3>
                        <p> <?php the_secondary_title();?> </p>
                    </div>
                    <div class="expanded collapse" id="<?php the_ID();?>" >
                            <?php the_content();?>
                    </div>
                </div>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                    ?>
            </div>
        </div>

    </section>
    <?php
      get_template_part( 'part-navigation' );
    ?>

<img class="globe" src="<?php bloginfo( 'template_directory' )?>/img/world.svg" alt="">

<?php get_footer(  )?>