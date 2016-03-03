<?php
/* Template Name: Contact */

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

                        <div class='articles-apropos'>
                            <article>
                                <h1>POUR NOUS JOINDRE</h1>
                                <div id='contact-telephone' class = 'contact-infos'>
                                    <i class="fa fa-phone fa-5x"></i>
                                    <div>
                                        <?php the_field('numero_de_telephone'); ?><br>
                                            <?php the_field('numero_du_telecopieur'); ?>
                                    </div>
                                </div>
                                <div id='contact-adresse' class = 'contact-infos'>
                                    <i class="fa fa-map-marker fa-5x"></i>
                                    <div>
                                        <?php the_field('adresse'); ?>
                                    </div>
                                </div>
                                <div id='contact-courriel' class = 'contact-infos'>
                                    <i class="fa fa-at fa-5x"></i>
                                    <div>
                                        <?php

                                // check if the repeater field has rows of data
                                if( have_rows('repeater_courriels') ):

                                    // loop through the rows of data
                                    while ( have_rows('repeater_courriels') ) : the_row(); ?>
                                        <div>
                                            <?php the_sub_field('adresse_courriel');  ?>
                                        </div>
                                    <?php endwhile; endif; ?>

                                       
                                    </div>
                                </div>


                            </article>

                            <article id = 'section-form'>
                                <?php echo do_shortcode( '[contact-form-7 id="74" title="Formulaire de contact"]' ); ?>
                            </article>

                        </div>

                        <!--<div id='section-membres-ca' class='articles-apropos'>
                            <h2><?php the_field('titre_membres_du_ca'); ?></h2>
                            <hr>
                            <div id='centre-CA'>
                                <article>
                                    <h3><?php the_field('titre_membres_fondateurs'); ?></h3>
                                    <div>
                                        <?php the_field('liste_membres_fondateurs'); ?>
                                    </div>
                                </article>

                                <article>
                                    <h3><?php the_field('titre_presidentes'); ?></h3>
                                    <div>
                                        <?php the_field('liste_presidentes'); ?>
                                    </div>
                                </article>
                            </div>


                        </div>

                        <div id='section-politique-culturelle' class='articles-apropos'>
                            <h2><?php the_field('titre_politique_culturelle'); ?></h2>
                            <hr>
                            <?php the_field('contenu_politique_culturelle'); ?>
                        </div>-->


                    </section>

                    <p>
                        <?php the_content(); ?>
                    </p>
                    <?php endwhile; ?>


            </div>
            <!-- #content -->
        </div>
        <!-- #primary -->

    </div>
    <!-- #main-content -->

    <?php

get_footer();