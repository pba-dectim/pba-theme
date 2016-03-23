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

                    <section class='banner-titre' style='background-image:url("<?php the_post_thumbnail_url(' full '); ?>"); background-repeat:no-repeat; background-size:cover;'>
                        <div class='banner_filter'></div>
                        <h1><?php the_title(); ?></h1>
                    </section>


                    <section class='section-content'>

                        <div id="contenu_single">
                            
                            <div id="frameDuVideo"><?php the_field('video_patrimoine'); ?></div>

                            <div id="ficheInfo" class="blockInfo">

                                <h3>CATÉGORIE(S)</h3>
                             
                               <?php
							   $postid = get_the_ID();
								$terms = get_the_terms( $postid, 'patrimoine_category');
								if ($terms && ! is_wp_error($terms)) :
									$term_slugs_arr = array();
									foreach ($terms as $term) {
										$term_slugs_arr[] = $term->name;
									}
									$terms_slug_str = join( "<br />", $term_slugs_arr);
								endif;
								echo $terms_slug_str;
								?>
                             

								<?php if( get_field('annee_de_construction') ): ?>
                                    <h3>ANNÉE DE CONSTRUCTION</h3>
                                    <p><?php the_field('annee_de_construction'); ?></p>
								 <?php endif; ?>
								<?php if( get_field('prix_ou_nomination') ): ?>
                                    <h3>PRIX</h3>
                                    <?php the_field('prix_ou_nomination'); ?>
								 <?php endif; ?>

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
                                                        $content .= '<img src="'. $image['sizes']['large'] .'" alt="'. $image['alt'] .'" />';
                                                    $content .= '</a>';
                                                $content .= '</li>';
            
                                            if ( function_exists('slb_activate') ){
                                                $content = slb_activate($content);
                                            }
    
                                            echo $content;?>
                                    <?php endforeach; ?>
                                        </ul>
                            <?php endif; ?>                        

                              <!--addresse?id=leID-->
                                <div id="boutonGalerie">
                             
                                    <div><a href="<?php the_permalink(31); ?>?id=<?php the_ID(); ?>">CARTE INTÉRACTIVE</a></div><!--
                                     <?php if( get_field('video_patrimoine') ): ?>
                                    --><div id="showVideo"><a href="#">VIDÉO</a></div>
                                    <?php endif; ?>
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