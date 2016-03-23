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
                        
                        <div id="frameDuVideo"><?php the_field('video_dune_realisation'); ?></div>

                            <div id="ficheInfo" class="blockInfo">

                                <h3>CATÉGORIE(S)</h3>
                                 <?php
							   $postid = get_the_ID();
								$terms = get_the_terms( $postid, 'realisation_category');
								if ($terms && ! is_wp_error($terms)) :
									$term_slugs_arr = array();
									foreach ($terms as $term) {
										$term_slugs_arr[] = $term->name;
									}
									$terms_slug_str = join( "<br />", $term_slugs_arr);
								endif;
								echo $terms_slug_str;
								?>

								<?php if( get_field('date_de_la_realisation') ): ?>
                                <h3>DATE DE LA RÉALISATION</h3>
                                <p><?php the_field('date_de_la_realisation'); ?></p>
								<?php endif; ?>
                                
                                <?php  
								$i = 0;
									if( have_rows('liste_gagnant') ):

									// loop through the rows of data
									while ( have_rows('liste_gagnant') ) : the_row();
									
										$i++;?>
                                        <?php if( get_sub_field('gagnant') ): ?>
                                        <h3>LISTE DES GAGNANTS</h3>
                                        <p>Prix #<?php echo $i;?></p>
										<a href="<?php the_sub_field('gagnant');?>"><?php the_sub_field('gagnant');?></a>
										<?php endif; ?>
									<?php endwhile;
								
								else :
								
									// Aucun gagnant trouvé.
								
								endif;
                          ?>    
                          		 
                                <?php  
								$j = 0;
									if( have_rows('liste_nomines') ):

									// loop through the rows of data
									while ( have_rows('liste_nomines') ) : the_row();
								
										$j++;?>
										<?php if( get_sub_field('nomine') ): ?>
                          				 <h3>LISTE DES NOMINÉS</h3>
										 <p>Prix #<?php echo $j;?></p>
										<a href="<?php the_sub_field('nomine');?>"><?php the_sub_field('nomine');?></a>
                                        <?php endif; ?>
									<?php endwhile;
								
								else :
								
									// Aucun gagnant trouvé.
								
								endif;
                          ?>    

                            </div><!--

                            --><div id="txtInfo" class="blockInfo">

                                    <?php the_content(); ?>

                            </div><!--

                            --><div id="galerie" class="blockInfo">
                            
                              
                                <?php 

                                    $images = get_field('galerie_photo_realisation');

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
                                        

                                
                                <div id="boutonGalerie">
                                    
                                    <?php if( get_field('video_dune_realisation') ): ?>
                                    <div id="showVideo"><a href="#">VIDÉO</a></div>
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