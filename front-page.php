<?php

get_header();

?>



    <figure class="firstSlide">
        <video id="full_video" id="js-video" src="<?php echo get_stylesheet_directory_uri(); ?>/video/accueil2.mp4" preload autoplay="" loop="" muted="" type="video/mp4" AddType video/ogg poster="<?php echo get_stylesheet_directory_uri(); ?>/img/510-marie-victorin-face.jpg"><source src="<?php echo get_stylesheet_directory_uri(); ?>/video/accueil.ogv" type="video/ogg"></video>
        
        <figcaption>
            <h1>Le patrimoine</h1>
            <h2>Pour que l'avenir se souvienne !</h2></figcaption>
        <section class="asideSlide1">


    </figure>

    <section class="asideSlide1">

        <article class="artBvn">

            <h2>
            
           <?php the_field("titre_du_mot_de_bienvenue"); ?>
            
        </h2>


            <p>

                <?php the_field("mot_de_bienvenue"); ?>

            </p>

        </article>


        <article class="artBvn">

            <h2>
            
            <?php the_field("titre_des_actualites"); ?>
            
        </h2>



            <div class="owl-carousel owl-theme">


                <?php 

$query = new WP_Query( array( 'post_type' => 'post' ) );

if ($query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>

                    <div>
                        <aside class="containtFigure" style="background-image:url('<?php the_post_thumbnail_url('full');?>')">

                            <aside class="containtFigcaption">
                                <h3>   <?php
           the_title();
           ?>
           </h3>
                                <hr>
                                <h4>   <?php
           the_content();
           ?>
           </h4>
                                <div class="btnVoirPlus"> <a href="<?php the_permalink();?>">
            En savoir plus
            </a>
                                </div>
                            </aside>
                        </aside>
                    </div>
                    <?php
		//
	} // end while
    wp_reset_query();
} // end if

?>

            </div>


        </article>

    </section>


    </div>

    <section class="secMandat">

        <h1>          <?php the_field("section_notre_mandat"); ?></h1>

        <div class="wrapMandat">

            <p>


                <?php the_field("texte_notre_mandat"); ?>

            </p>

        </div>

    </section>


    <section class="secFier">

        <h1><?php the_field("titre_section_patrimoine"); ?></h1>
        <article class="contPhoto">
            <?php 

$query_lastposts = new WP_Query( array( 
    'post_type' => array(
       
        'post_type_patrimoine'),
    'post_per_page' => 6)
);

if ($query_lastposts->have_posts() ) {
	while ( $query_lastposts->have_posts() ) {
		$query_lastposts->the_post(); ?>


                <div class="contInfo">

                    <?php the_post_thumbnail('full');?>

                        <h4><?php the_title();?></h4>

                        <div class="btnVoirPlus"> <a href="<?php the_permalink();?>">
            En savoir plus
            </a>
                        </div>
                </div>

                <?php
		//
	} // end while
    wp_reset_query();
} // end if

?>
        </article>
    </section>

    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel();
        });

        var owl = $('.owl-carousel');
        owl.owlCarousel({

            loop: true,
            margin: 10,
            items: 1,
            autoplay: true,
            autoplayTimeout: 5000,

            autoplayHoverPause: true
        });
    </script>

    <?php

get_footer();

?>