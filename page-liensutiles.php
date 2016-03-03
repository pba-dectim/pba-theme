<?php
/* Template Name: Liens Utiles */

get_header(); ?>

    <div id="main-content" class="main-content">

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
                                <h2><?php the_field('titre_mandat'); ?></h2>
                                <hr>
                                <div>
                                    <?php the_field('contenu_mandat'); ?>
                                </div>
                            </article>

                            <article>
                                <h2><?php the_field('titre_historique'); ?></h2>
                                <hr>
                                <div>
                                    <?php the_field('contenu_historique'); ?>
                                </div>
                            </article>

                        </div>

                    <?php endwhile; ?>


            </div>
            <!-- #content -->
        </div>
        <!-- #primary -->

    </div>
    <!-- #main-content -->

    <?php

get_footer();