<?php get_header(  )?>

<section class="contact">
        <div class="container-fluid px-0">
            <h1 class="text-center"><?php the_title()?></h1>

            <div class="row description">
                <h1 class="head-text col-12">INVESTMENT OPPORTUNITIES </h1>
                <div class="col-md-6">
                    <p>We thoroughly vet every investment opportunity that comes our way. Unfortunately we can only
                        reply to those we wish to learn more about. </p>
                </div>
                <div class="col-md-6">
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="SHARE YOUR OPPORTUNITY">
                            <div class="input-group-append">
                                <div class=" ">
                                    <a href="#" type="submit">
                                        <img src="./img/dark Arrow.svg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dark mx-0 ">
                <div class="row description">
                    <h1 class="head-text col-12">JOIN OUR MAILING LIST</h1>
                    <div class="col-md-6">
                        <p>Get first access to our investments, insights and trends in our newsletter. </p>
                    </div>
                    <div class="col-md-6">
                        <form action="#">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="ENTER YOUR EMAIL ADDRESS">
                                <div class="input-group-append">
                                    <div class=" ">
                                        <a href="#" type="submit">
                                            <img src="./img/white Arrow.svg" class="img-fluid" alt="">
                                            
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <img class="globe" src="<?php bloginfo( 'template_directory' )?>/img/world.svg" alt="">

            </div>


        </div>

    </section>

 <?php
      get_template_part( 'part-navigation' );
    ?>

<?php get_footer(  );?>