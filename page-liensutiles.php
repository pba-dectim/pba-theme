<?php
/* Template Name: Liens Utiles */

get_header(); ?>

 

        <div id="primary" class="content-area">

            <div id="content" class="site-content" role="main">

                <?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>



                    <!--					// Include the page content template.-->
                    <!--//					get_template_part( 'content', 'page' );-->

                    <section class='banner-titre' style='background-image:url("<?php the_post_thumbnail_url(' full '); ?>"); '>
                        <div class='banner_filter'></div>
                        <h1><?php the_title(); ?></h1>
                    </section>


                    <section class='section-content'>

                        <div id='section-mandat-historique' class='articles-apropos'>
                            <article>
                                <h2><?php the_field('titre_references_virtuelles'); ?></h2>
                                <hr>
                                <div>
                                    <?php the_field('texte_references_virtuelles'); ?>
                                </div>
                            </article>

                            <article>
                                <h2><?php the_field('titre_references_papier'); ?></h2>
                                <hr>
                                <div>
                                    <?php the_field('texte_references_papier'); ?>
                                </div>
                            </article>

                        </div>

                    <?php endwhile; ?>


            </div>
            <!-- #content -->
        </div>
        <!-- #primary -->

    

    <?php

get_footer();