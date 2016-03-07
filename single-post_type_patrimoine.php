<?php


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

                        <div id="contenu_single">

                            <div id="ficheInfo" class="blockInfo">

                                <h3>CATÉGORIE(S)</h3>
                                <?php 
                               
                                $term = get_field('categorie_de_lelement');
                               
                                if( $term ): ?>

                                    <p><?php echo $term->name; ?><p>
                                    
                                   
                                <?php endif; ?>


                                <h3>ANNÉE DE CONSTRUCTION</h3>
                                <p><?php the_field('annee_de_construction'); ?></p>

                                <h3>PRIX</h3>
                                <?php the_field('prix_ou_nomination'); ?>

                                <h3>ADRESSE</h3>
                                <p><?php the_field('adresse_patrimoine'); ?></p>

                            </div><!--

                            --><div id="txtInfo" class="blockInfo">

                                    <?php the_content(); ?>

                            </div><!--

                            --><div id="galerie" class="blockInfo">
                            
                            
                            <?php

                                $images = get_field('galerie_photo_patrimoine');

                                    if( $images ): ?>
                                        <ul> 
                                            <?php foreach( $images as $image ): 
                                                $content = '<li>';
                                                    $content .= '<a href="'. $image['url'] .'">';
                                                        $content .= '<img src="'. $image['sizes']['thumbnail'] .'" alt="'. $image['alt'] .'" />';
                                                    $content .= '</a>';
                                                $content .= '</li>';
            
                                            if ( function_exists('slb_activate') ){
                                                $content = slb_activate($content);
                                            }
    
                                            echo $content;?>
                                    <?php endforeach; ?>
                                        </ul>
                            <?php endif; ?>                        

                                
                                <div id="boutonGalerie">
                                    <div><a href="#">CARTE INTÉRACTIVE</a></div><!--
                                    --><div id="showVideo"><a href="#">VIDÉO</a></div>
                                </div>


                            </div>

                        </div>

                    </section>

                    <?php endwhile; ?>


            </div>
            <!-- #content -->
        </div>
        <!-- #primary -->

    </div>
    <!-- #main-content -->

    <?php

get_footer();